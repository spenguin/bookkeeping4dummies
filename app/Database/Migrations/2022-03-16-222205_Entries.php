<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Entries extends Migration
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
            'description'   => [
                'type'              => 'TEXT',
                'constraint'        => 500,
            ],
            'amount'   => [
                'type'              => 'FLOAT',
                'constraint'        => 10,2,
                'null'              => FALSE,
                'default'           => '0.00'
            ],
            'accountIdD'              => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE
            ],
            'accountIdC'              => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE
            ]            
        ]);
        $this->forge->addField( "created TIMESTAMP DEFAULT CURRENT_TIMESTAMP" );

        $this->forge->addKey( 'id', true );
        $this->forge->createTable( 'entries', true );  
    }

    public function down()
    {
        $this->forge->dropTable( 'entries' ); 
    }
}
