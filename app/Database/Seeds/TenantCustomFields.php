<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class TenantCustomFields extends Seeder
{
    public function run()
    {
        $faker = Factory::create('pt_BR');
        for ($i=1; $i < 3; $i++) {
            $data = [
                'template_ID' => $i,                
                'name' => 'cep',
                'value' => $faker->randomNumber(8),
            ];
            $this->db->table('Tenant_custom_fields')->insert($data);
        }
    }
}
