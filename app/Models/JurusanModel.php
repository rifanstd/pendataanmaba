<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jurusan';
    protected $primaryKey       = 'id_jurusan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_jurusan', 'fakultas_id'];

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function getByID($id)
    {
        $dataJurusan = $this->db->table($this->table)
            ->where('id_jurusan', $id)
            ->get()
            ->getResultArray();

        return $dataJurusan;
    }

    public function getJurusan()
    {
        $dataJurusan = $this->db->table($this->table)
            ->join('fakultas', 'fakultas.id_fakultas = jurusan.fakultas_id')
            ->get()->getResultArray();
        return $dataJurusan;
    }

    public function getByProdi($id)
    {
        $dataJurusan = $this->db->table($this->table)
            ->where('id_jurusan', $id)
            ->get()
            ->getResultArray();

        return $dataJurusan;
    }
}
