<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reports extends Migration
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
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'total' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'date' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('reports');
    }

    public function down()
    {
        $this->forge->dropTable('reports');
    }
}
