<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TenantCustomFields extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'value' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tenant_custom_fields');
    }

    public function down()
    {
        $this->forge->dropTable('tenant_custom_fields');
    }
}
