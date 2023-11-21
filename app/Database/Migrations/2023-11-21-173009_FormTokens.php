<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FormTokens extends Migration
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
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('form_tokens');
    }

    public function down()
    {
        $this->forge->dropTable('form_tokens');
    }
}
