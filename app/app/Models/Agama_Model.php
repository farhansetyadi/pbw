<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\HTTP\Response;

class Agama_Model extends Model
{
    protected $table      = 'agama';
    protected $primaryKey = 'kode_agama';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['agama'];

    public function get_sebaran_mahasiswa(){
        $db = \Config\Database::connect();
       
        $this->builder = $db->table($this->table);

        $this->builder->select('agama, (COUNT(mahasiswa.kode_agama)) AS jumlah_mahasiswa');
        $this->builder->join('mahasiswa', 'agama.kode_agama = mahasiswa.kode_agama','left');
        $this->builder->groupBy('agama');

        return $this->builder->get();
           
    }
}