<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'superadmin',
                'description' => 'Super Administrator',
            ],
            [
                'name' => 'admin',
                'description' => 'Administrator',
            ],
            [
                'name' => 'mahasiswa',
                'description' => 'Mahasiswa'
            ],
        ];

        $this->db->table('auth_groups')->insertBatch($data);
    }
}
