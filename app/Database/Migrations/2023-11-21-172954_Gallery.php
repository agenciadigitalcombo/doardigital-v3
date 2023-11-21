<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gallery extends Migration
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
            'image_URL' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'order' => [
                'type' => 'INT',
            ],
            'ImageDescription' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('gallery');
    }

    public function down()
    {
        $this->forge->dropTable('gallery');
    }
}
