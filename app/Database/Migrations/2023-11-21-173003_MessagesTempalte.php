<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MessagesTempalte extends Migration
{
    public function up()
    {
        //
    }

    public function down()
    {
        $this->forge->dropTable('messages_template');
    }
}
