<?php

namespace App\Models;

use CodeIgniter\Model;

class FakultasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'fakultas';
    protected $primaryKey       = 'id_fakultas';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_fakultas'];

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function getByID($id)
    {
        $dataFakultas = $this->db->table($this->table)
            ->where('id_fakultas', $id)
            ->get()
            ->getResultArray();

        return $dataFakultas;
    }

    public function getByJurusan($id)
    {
        $dataFakultas = $this->db->table($this->table)
            ->where('id_fakultas', $id)
            ->get()
            ->getResultArray();

        return $dataFakultas;
    }

    public function getByProdi($id)
    {
        $dataFakultas = $this->db->table($this->table)
            ->where('id_fakultas', $id)
            ->get()
            ->getResultArray();

        return $dataFakultas;
    }
}
