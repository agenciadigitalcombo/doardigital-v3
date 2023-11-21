<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Address extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'customer_ID' => [
                'type' => 'INT',
            ],
            'zip_code' => [
                'type' => 'INT',
            ],
            'street' => [
                'type' => 'VARCHAR',
                'constraint' => 75,
            ],
            'house_number' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'complement' => [
                'type' => 'VARCHAR',
                'constraint' => 75,
            ],
            'neighborhood' => [
                'type' => 'VARCHAR',
                'constraint' => 75,
            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'state' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('address');
    }

    public function down()
    {
        $this->forge->dropTable('address');
    }
}
