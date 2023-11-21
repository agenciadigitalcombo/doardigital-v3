<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InvoicesAnnotations extends Migration
{
    public function up()
    {
        //
    }

    public function down()
    {
        $this->forge->dropTable('invoices_annotations');
    }
}
