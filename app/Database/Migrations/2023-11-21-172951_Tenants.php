<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tenants extends Migration
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
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'admin_ID' => [
                'type' => 'INT',
            ],
            'template_ID' => [
                'type' => 'INT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tenants');
    }

    public function down()
    {
        $this->forge->dropTable('tenants');
    }
}
