<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // # 1 data
        // $data = [
        //     'name_user' => 'Administrator',
        //     'email_user' => 'admin@gmail.com',
        //     'password_user' => password_hash('12345', PASSWORD_BCRYPT),
        // ];
        // $this->db->table('users')->insert($data);

        // Multi Data
        $data = [
            ['name_user' => 'ucup',
            'email_user' => 'user123@gmail.com',
            'password_user' => password_hash('12345', PASSWORD_BCRYPT),
            ],
            [
            'name_user' => 'Budi Budiman',
            'email_user' => 'Budi@gabut.com',
            'password_user' => password_hash('Budi12345', PASSWORD_BCRYPT),
            ],
            
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
