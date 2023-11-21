<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Whatsapp extends Migration
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
            'tenant_ID' => [
                'type' => 'INT',
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('whatsapp');
    }

    public function down()
    {
        $this->forge->dropTable('whatsapp');
    }
}
