<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Notifications extends Migration
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
            'content' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'read' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('notifications');
    }

    public function down()
    {
        $this->forge->dropTable('notifications');
    }
}
