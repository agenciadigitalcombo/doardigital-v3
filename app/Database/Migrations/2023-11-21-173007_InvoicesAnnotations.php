<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InvoicesAnnotations extends Migration
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
            'invoices_ID' => [
                'type' => 'INT',
            ],
            'texto' => [
                'type' => 'TEXT',
            ],
            'data' => [
                'type' => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('invoices_annotations');
    }

    public function down()
    {
        $this->forge->dropTable('invoices_annotations');
    }
}
