<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class Mahasiswa_Model extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'nim';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nim','nama','jenis_kelamin',"kode_agama",'alamat','foto','tempat_lahir','tanggal_lahir'];
    
    public function get(ConnectionInterface &$db, $where = null) {
        $this->builder = $db->table($this->table);

        $this->builder->join('agama', 'agama.kode_agama = mahasiswa.kode_agama');

        if (!empty($where))
            return $this->builder->getWhere($where);
        else
            return $this->builder->get();
    }
}