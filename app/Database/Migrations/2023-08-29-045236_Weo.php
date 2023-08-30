<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Weo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_weo' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_weo' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'date_weo' => [
                'type'       => 'DATE',
            ],
            'info_weo' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_weo', true);
        $this->forge->createTable('weo');
    }

    public function down()
    {
        $this->forge->dropTable('weo');
    }
}
