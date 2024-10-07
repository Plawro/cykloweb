<?php

namespace App\Models;

use CodeIgniter\Model;

class StageModel extends Model
{
    protected $table            = 'stage';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields    = ['number', 'note', 'id', 'departure', 'arrival', 'distance', 'parcour_type', 'vertical_meters', 'profile', 'id_race_year', 'link'];
}
