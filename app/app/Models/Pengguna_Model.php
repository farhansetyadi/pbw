<?php namespace App\Models;

use CodeIgniter\Model;

class Pengguna_Model extends Model
{
    protected $table      = 'pengguna';
    protected $primaryKey = 'username';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['username','password'];

}