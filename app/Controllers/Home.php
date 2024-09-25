<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RaceModel as raceModel;
use App\Models\RaceYear as raceYear;

class Home extends BaseController
{
    var $raceModel;
    var $raceYear;

    public function __construct()
    {
        $this->raceModel = new RaceModel();
        $this->raceYear = new RaceYear();
    }

    public function index()
    {
        $data['title']="Cykloweb - domů";
        $data['array']= $this->raceModel->orderBy("id","asc")->paginate(25); //or findAll()
        $data['pager'] = $this->raceModel->pager;
        return view('home',$data);
    }

    public function race($id)
    {
        $data['race'] = $this->race->find($id);
        $data['raceyear'] = $this->raceYear->select('Count(*) as pocet, real_name, year, start_date, end_date, logo, category, id_race_year, Sum(distance) as delka')->join('stage','stage.id_race_year = race_year.id')->where('id_race',$id)->orderBy('year','desc')->groupBy('stage.id_race_year')->findAll();
        $data['title'] = 'Závod';
        return view('race', $data);
    }

    public function teams(): string
    {
        return view('teams');
    }

    public function races(): string
    {
        
    }


    public function team(): string
    {
        return view('team');
    }

    public function admin(): string
    {
        return view('admin');
    }
}
