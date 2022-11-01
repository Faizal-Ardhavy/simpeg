<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PresensiModel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       => [
                'type'           => 'INT',
                'constraint'     => '100',
                'auto_increment' => true,
            ],
            'user_presensi'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'tanggal'       => [
                'type'          => 'DATE',
                'NULL'          => 'TRUE',
            ],
            'keterangan'       => [
                'type'            => 'VARCHAR',
                'constraint'      => '100',
            ]
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->addForeignKey('user_presensi', 'pegawai', 'username');
        $this->forge->createTable('presensi');
    }

    public function down()
    {
        $this->forge->dropTable('presensi');
    }
}
