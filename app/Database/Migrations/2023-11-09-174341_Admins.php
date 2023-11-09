<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admins extends Migration
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
            'fk' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'password_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'document' => [
                'type' => 'INT',
                'null' => true,
            ],
            'admin_ID' => [
                'type' => 'INT',
                'null' => true,
            ],
            'is_activated' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'activation_code' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'recovery_code' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'data_register' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('admins');
    }

    public function down()
    {
        $this->forge->dropTable('admins');
    }
}
