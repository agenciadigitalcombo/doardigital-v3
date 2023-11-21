<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Messages extends Migration
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
                'constraint' => 100,
            ],
            'to' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'subject' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'body' => [
                'type' => 'TEXT',
            ],
            'scheduling_date' => [
                'type' => 'TIMESTAMP',
            ],
            'send_date' => [
                'type' => 'TIMESTAMP',
            ],
            'status_send' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'call_back' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'retry' => [
                'type' => 'INT',
                'default' => 0,
            ],
            'transaction_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'external_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'menssage_error' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('messages');
    }

    public function down()
    {
        $this->forge->dropTable('messages');
    }
}
