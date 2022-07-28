<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProyectsMigration extends Migration
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
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
            ],
            'category' => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
            ],
            'type' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'date' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'git_url' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'url' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'NULL'           => true  
            ],
            'image' => [
                'type'           => 'VARCHAR',
                'NULL'           => true   
            ],
            'details' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'in_progress' => [
                'type'           => 'BOOLEAN',
            ],
            'created_at' => [
                'type'           => 'DATE',
                'NULL'           => FALSE,
            ],
            'updated_at' => [
                'type'           => 'DATE',
                'NULL'           => FALSE,
            ],
            'deleted_at' => [
                'type'           => 'DATE',
                'NULL'           => FALSE,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('proyects');
    }

    public function down()
    {
        $this->forge->dropTable('proyects');
    }
}
