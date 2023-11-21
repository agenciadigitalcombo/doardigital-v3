<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Invoices extends Migration
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
            'invoices_ID' => [
                'type' => 'INT',
            ],
            'customer_ID' => [
                'type' => 'INT',
            ],
            'amount' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'transaction_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'ip' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'external_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'due_date' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'register_date' => [
                'type' => 'TIMESTAMP',
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('invoices');
    }

    public function down()
    {
        $this->forge->dropTable('invoices');
    }
}
