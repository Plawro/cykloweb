<?php

namespace App\Models;

use CodeIgniter\Model;

class RiderModel extends Model
{
    protected $table            = 'rider';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';

    protected $autoIncrement = "true";
    protected $allowedFields    = ['first_name', 'last_name', 'country', 'date_of_birth', 'place_of_birth', 'photo', 'weight', 'height', 'link', 'place_link', 'in_results'];
    protected $useSoftDeletes = "true";
    protected $dateFormat = "int";
    protected $useTimeStamps = "true";

    protected $deletedField = "deleted_at";
    protected $createdField = "created_at";
    protected $updatedField = "updated_at";

}
