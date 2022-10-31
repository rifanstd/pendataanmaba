<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'Rifan Setiadi',
            'id_user' => 1,
        ];

        $this->db->table('admin')->insert($data);
    }
}
