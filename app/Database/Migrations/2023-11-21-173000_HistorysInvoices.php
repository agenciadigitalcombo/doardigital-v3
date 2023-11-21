<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HistorysInvoices extends Migration
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
            'transaction_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'external_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'last_modified_date' => [
                'type' => 'TIMESTAMP',
            ],
            'body' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('historys_invoices');
    }

    public function down()
    {
        $this->forge->dropTable('historys_invoices');
    }
}
