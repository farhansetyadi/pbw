<?php namespace App\Models;

use CodeIgniter\Model;

class Hobi_Model extends Model
{
    protected $table      = 'hobi';
    protected $primaryKey = 'kode_hobi';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['hobi'];

}