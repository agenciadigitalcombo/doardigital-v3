<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Email extends Migration
{
    public function up()
    {
        //
    }

    public function down()
    {
        $this->forge->dropTable('email');
    }
}
