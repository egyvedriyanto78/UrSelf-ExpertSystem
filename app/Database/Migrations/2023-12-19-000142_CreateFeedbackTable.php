<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
            'message' => [
                'type'       => 'VARCHAR',
                'constraint' => '999'
            ]
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('feedback');
    }

    public function down()
    {
        $this->forge->dropTable('feedback', true);
    }
}
