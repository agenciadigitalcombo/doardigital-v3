<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KeyPix extends Migration
{
    public function up()
    {
        //
    }

    public function down()
    {
        $this->forge->dropTable('key_pix');
    }
}
