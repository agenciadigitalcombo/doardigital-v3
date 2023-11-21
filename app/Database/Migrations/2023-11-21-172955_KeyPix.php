<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KeyPix extends Migration
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
            'token_hash' => [
                'type' => 'TEXT',
            ],
            'qrcode' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('key_pix');
    }

    public function down()
    {
        $this->forge->dropTable('key_pix');
    }
}
