<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TenantCustomFields extends Migration
{
    public function up()
    {
        //
    }

    public function down()
    {
        $this->forge->dropTable('tenant_custom_fields');
    }
}
