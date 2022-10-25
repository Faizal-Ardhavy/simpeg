<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'username'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'tgl_lahir'       => [
                'type'           => 'DATE',
                'null'            => true,
            ],
            'kelamin'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'alamat'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'no_telp'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'gaji'       => [
                'type'           => 'INT',
            ],
            'bank'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'rekening'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '1000',
            ],
            'tgl_kadaluarsa' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ]

        ]);
        $this->forge->addPrimaryKey('username', true);
        $this->forge->createTable('pegawai');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
