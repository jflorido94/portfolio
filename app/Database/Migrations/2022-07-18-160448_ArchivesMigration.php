<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArchivesMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'   => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'type' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'route' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'date' => [
                'type'           => 'DATE',
                'NULL'           => FALSE,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('archives');
    }
 
    //--------------------------------------------------------------------
 
    public function down()
    {
        $this->forge->dropTable('archives');
    }
}