<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admins extends Migration
{
    public function up()
    {
        //
    }

    public function down()
    {
        $this->forge->dropTable('admins');
    }
}