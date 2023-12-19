<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePersonalityTable extends Migration
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
            'date' => [
                'type' => 'DATE',
                'null' => true
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
            'ie' => [
                'type'       => 'INT',
                'constraint' => 5
            ],
            'sn' => [
                'type'       => 'INT',
                'constraint' => 5
            ],
            'tf' => [
                'type'       => 'INT',
                'constraint' => 5
            ],
            'jp' => [
                'type'       => 'INT',
                'constraint' => 5
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('personality');
    }

    public function down()
    {
        $this->forge->dropTable('personality', true);
    }
}
