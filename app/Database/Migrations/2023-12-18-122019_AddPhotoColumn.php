<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhotoColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'photo' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', ['photo']);
    }
}
