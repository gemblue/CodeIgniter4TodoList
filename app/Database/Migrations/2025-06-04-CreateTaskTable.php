<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTaskTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title'      => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'is_done'    => [
                'type'       => 'BOOLEAN',
                'default'    => false
            ],
            'deleted_at' => [
                'type'     => 'DATETIME',
                'null'     => true
            ],
            'created_at' => [
                'type'     => 'DATETIME',
                'null'     => true
            ],
            'updated_at' => [
                'type'     => 'DATETIME',
                'null'     => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('task');
    }

    public function down()
    {
        $this->forge->dropTable('task');
    }
}
