<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Domains extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tenant_ID' => [
                'type' => 'INT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('domains');
    }

    public function down()
    {
        $this->forge->dropTable('domains');
    }
}
