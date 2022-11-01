<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama', 'nik', 'npm', 'angkatan', 'validasi', 'id_user', 'prodi_id', 'jurusan_id', 'fakultas_id', 'kurikulum', 'status', 'jalur_pendaftaran'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function getByUserID()
    {
        $mahasiswa = $this->db->table($this->table)
            ->where('id_user', user_id())
            ->get()
            ->getResultArray()[0];
        return $mahasiswa;
    }
}
