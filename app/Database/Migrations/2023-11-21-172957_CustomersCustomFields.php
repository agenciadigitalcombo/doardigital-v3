<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CustomersCustomFields extends Migration
{
    public function up()
    {
        //
    }

    public function down()
    {
        $this->forge->dropTable('customers_custom_fields');
    }
}
