<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'prodi';
    protected $primaryKey       = 'id_prodi';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_prodi', 'jurusan_id', 'fakultas_id'];

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function getByID($id)
    {
        $dataProdi = $this->db->table($this->table)
            ->where('id_prodi', $id)
            ->get()
            ->getResultArray();

        return $dataProdi;
    }

    public function getProdi()
    {
        $dataProdi = $this->db->table($this->table)
            ->join('jurusan', 'jurusan.id_jurusan = prodi.jurusan_id')
            ->join('fakultas', 'fakultas.id_fakultas = prodi.fakultas_id')
            ->get()->getResultArray();

        return $dataProdi;
    }
}
