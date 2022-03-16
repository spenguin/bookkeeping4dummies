<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Accounts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => TRUE,
                'unsigned'          => TRUE
            ],
            'account'   => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
                'unique'            => TRUE,
                'null'              => FALSE
            ],
            'name'   => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
                'unique'            => TRUE,
                'null'              => FALSE
            ],
            'date'  => [
                'type'              => 'DATETIME',
                'null'              => FALSE
            ],            
            'parentId'              => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE
            ]
        ]);
        $this->forge->addField( "created TIMESTAMP DEFAULT CURRENT_TIMESTAMP" );

        $this->forge->addKey( 'id', true );
        $this->forge->createTable( 'acounts', true );        

    }

    public function down()
    {
        $this->forge->dropTable( 'accounts' );    
    }
}
