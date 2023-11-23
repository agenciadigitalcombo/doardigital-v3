<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Domains extends Seeder
{
    public function run()
    {
        $data = [
            "name" => 'doarsandbox.com.br',
            "tenant_ID" => 1,
        ];
        $this->db->table('domains')->insert($data);

        $data = [
            "name" => 'institution.doarsandbox.com.br',
            "tenant_ID" => 2,
        ];
        $this->db->table('domains')->insert($data);
    }
}
