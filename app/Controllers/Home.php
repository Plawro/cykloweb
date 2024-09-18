<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Race;

class Home extends BaseController
{
    var $race;
    var $raceyear;

    public function __construct()
    {
        $this->race = new Race();
    }

    public function index(): string
    {
        return view('home');
    }

    public function teams(): string
    {
        return view('teams');
    }

    public function races(): string
    {
        $data['race'] = $this->race->paginate(25);
        $data['pager'] = $this->race->pager;
        return view('races', $data);
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
