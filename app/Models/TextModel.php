<?php

namespace App\Models;

use CodeIgniter\Model;

class TextModel extends Model
{
    protected $table            = 'textmain';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields    = ['content'];

}
