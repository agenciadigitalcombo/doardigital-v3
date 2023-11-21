<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VisualStyles extends Migration
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
            'primary_color' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'secondary_color' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'logo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'template_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'ico' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('visual_styles');
    }

    public function down()
    {
        $this->forge->dropTable('visual_styles');
    }
}
