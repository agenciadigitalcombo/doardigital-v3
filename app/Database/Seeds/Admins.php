<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admins extends Seeder
{
    public function run()
    {
        $data = [
            "name" => 'Bruno Vieira',
            "fk" => 'ADM_' . uniqid(),
            "email" => 'br.rafael@outlook.com',
            "password_hash" => hash('sha256', '123456'),
            "document" => 74751443054,
            "is_activated" => false,
            "activation_code" => uniqid(),
            "data_register" => date('Y-m-d H:i:s')
        ];

        $this->db->table('admins')->insert($data);
    }
}
