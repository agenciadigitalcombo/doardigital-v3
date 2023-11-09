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
            "password_hash" => md5('AguaDeCocoNaoDaEmCoco'),
            "document" => 74751443054,
            "is_activated" => false,
            "activation_code" => uniqid(),
        ];

        $this->db->table('admins')->insert($data);
    }
}
