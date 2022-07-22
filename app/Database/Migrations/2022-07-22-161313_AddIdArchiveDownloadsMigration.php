<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIdArchiveDonwloadsMigration extends Migration
{
    public function up()
    {
        $fields = [
            'id_archive' => [
                'type'      => 'INT',
                'constraint' => 5,
                'unsigned'  => TRUE,
                'after'         => 'date',
                'null'            => TRUE
            ],
            'CONSTRAINT downloads_id_archive_fk_1 FOREIGN KEY(`id_archive`) REFERENCES `archives`(`id`)'
        ];
        $this->forge->addColumn('downloads', $fields);
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropForeignKey('downloads', 'downloads_id_archive_fk_1');
        $this->forge->dropColumn('downloads', 'id_archive');
    }
}
