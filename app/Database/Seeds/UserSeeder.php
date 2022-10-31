<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email' => 'rfan2442@gmail.com',
            'username' => 'rifanstd',
            'password_hash' => password_hash('dungbed324', PASSWORD_DEFAULT),
            'nama' => 'Rifan Setiadi',
        ];

        $this->db->table('users')->insert($data);
    }
}
