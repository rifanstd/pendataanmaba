<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'admin';
    protected $primaryKey       = 'id_admin';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama', 'id_user'];

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function getAdmin()
    {
        $dataAdmin = $this->db->table($this->table)
            ->join('auth_groups_users', 'auth_groups_users.user_id = admin.id_user')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->get()
            ->getResultArray();

        // dd($dataAdmin);

        return $dataAdmin;
    }
}
