<?php

namespace App\Models;

use CodeIgniter\Model;

class RaceYear extends Model
{
    protected $table            = 'race_year';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields    = ['real_name', 'id_race', 'year', 'start_date', 'end_date', 'uci_tour', 'logo', 'sex', 'category', 'country'];
}