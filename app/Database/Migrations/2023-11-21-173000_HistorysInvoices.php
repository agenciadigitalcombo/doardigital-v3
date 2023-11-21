<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HistorysInvoices extends Migration
{
    public function up()
    {
        //
    }

    public function down()
    {
        $this->forge->dropTable('history_invoices');
    }
}
