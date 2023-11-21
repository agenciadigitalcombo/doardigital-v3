<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TenantAdmins extends Migration
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
            'admin_ID' => [
                'type' => 'INT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tenant_admins');
    }

    public function down()
    {
        $this->forge->dropTable('tenant_admins');
    }
}
