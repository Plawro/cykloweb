<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RaceModel as raceModel;

class Home extends BaseController
{
    var $raceModel;

    public function __construct()
    {
        $this->raceModel = new RaceModel();
    }

    public function index(): string
    {
        $data['title']="Cykloweb - domů";
        $data['array']= $this->raceModel->orderBy("default_name","asc")->paginate(25); //or findAll()
        return view('home',$data);
    }

    public function teams(): string
    {
        return view('teams');
    }

    public function races(): string
    {
        
    }

    public function race(): string
    {
        return view('race');
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
