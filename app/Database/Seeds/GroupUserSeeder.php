<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupUserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'group_id' => 1,
            'user_id' => 1
        ];

        $this->db->table('auth_groups_users')->insert($data);
    }
}
