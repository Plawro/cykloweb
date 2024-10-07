<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RaceModel as raceModel;
use App\Models\RiderModel as riderModel;
use App\Models\StageModel as stageModel;
use App\Models\LocationModel as locationModel;
use App\Models\RaceYear as raceYear;


use Dompdf\Dompdf;
use Dompdf\Options;

class Home extends BaseController
{
    var $riderModel;
    var $raceYear;
    var $raceModel;
    var $stageModel;
    var $locationModel;

    public function __construct()
    {
        $this->raceModel = new RaceModel();
        $this->raceYear = new RaceYear();
        $this->riderModel = new RiderModel();
        $this->stageModel = new StageModel();
        $this->locationModel = new LocationModel();
    }

    public function generatePDF()
    {
        $data['isPDF'] = true;
        $data['title']="Cykloweb - domů";
        $data['races'] = $this->raceModel->countAllResults();
        $data['locations'] = $this->locationModel->countAllResults();
        $data['riders'] = $this->riderModel->countAllResults();
        $data['stages'] = $this->stageModel->countAllResults();
        $data['array']= $this->raceModel->orderBy("id","asc")->paginate(25); //or findAll()
        $html = view('home', $data);
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $action = $this->request->getGet('action');

        if ($action == 'download') {
            $dompdf->stream("index.pdf", ["Attachment" => 1]);
        } else {
            $dompdf->stream("index.pdf", ["Attachment" => 0]);
        }
    }


    public function index()
    {
        $data['title']="Cykloweb - domů";
        $data['races'] = $this->raceModel->countAllResults();
        $data['locations'] = $this->locationModel->countAllResults();
        $data['riders'] = $this->riderModel->countAllResults();
        $data['stages'] = $this->stageModel->countAllResults();
        $data['array']= $this->raceModel->orderBy("id","asc")->paginate(25); //or findAll()
        return view('home',$data);
    }

    public function race($id)
    {
        $data['race'] = $this->raceModel->find($id);
        $data['raceyear'] = $this->raceYear->select('Count(*) as pocet, real_name, year, start_date, end_date, logo, category, id_race_year, Sum(distance) as delka')->join('stage','stage.id_race_year = race_year.id')->where('id_race',$id)->orderBy('year','desc')->groupBy('stage.id_race_year')->findAll();
        $data['title'] = 'Závod';
        return view('race', $data);
    }

    public function rider($id)
    {
        //$data['rider'] = $this->riderModel->find($id);
        $data['rider'] = $this->riderModel
        ->select('rider.*, location.name as place_of_birth_name')
        ->join('location', 'rider.place_of_birth = location.id', 'left')
        ->where('rider.id', $id)
        ->first();

        if (!$data['rider']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Rider not found');
        }
        $data['title'] = 'Závodník';
        return view('rider', $data);
    }

    function races(){
        $data['title']="Cykloweb - závody";
        $data['array']= $this->raceModel->orderBy("id","asc")->paginate(25); //or findAll()
        $data['pager'] = $this->raceModel->pager;
        echo view('races', $data);
    }


    /**
     * @param int $id - id of the race year
     */
    function etapa($id){
        $data['name'] = $this->raceYear->find($id);
        $data['stage'] = $this->stage->join('parcour_type','parcour_type.id = stage.parcour_type')->where('id_race_year',$id)->orderBy('date','asc')->findAll();
        $data['title'] = 'Etapa';
        echo view('etapa', $data);
    }
}
