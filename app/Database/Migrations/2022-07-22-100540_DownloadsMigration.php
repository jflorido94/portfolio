<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DownloadsMigration extends Migration
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
            'ip' => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
            ],
            'country' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'region' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'city' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'user_agent' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'platform' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
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
        $this->forge->createTable('downloads');
    }

    public function down()
    {
        $this->forge->dropTable('downloads');
    }
}
