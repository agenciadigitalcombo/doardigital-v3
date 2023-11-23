<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use Faker\Factory;

class Tenants extends Seeder
{
    public function run()
    {
        $faker = Factory::create('pt_BR');
        for ($i=1; $i < 3; $i++) {
            $data = [
                'name' => $faker->randomElement(['Doar Digital', 'Instituição Padrão']),
                'type' => $faker->randomElement(['INSTITUTIONS', 'ONG']),
                'admin_ID' => $i,
                'template_ID' => $i,
            ];
            $this->db->table('tenants')->insert($data);
        }
    }
}
