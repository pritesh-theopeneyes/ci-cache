<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EmailTemplate extends Migration
{
    public function up()
    {
        
        $this->forge->addField([
                'Id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'auto_increment' => true,
                ],
                'header' => [
                    'type' => 'TEXT',
                    'null' => true,
                ],
                'footer' => [
                    'type' => 'TEXT',
                    'null' => true,
                ],
                'is_active'     => [
                    'type'           => 'bit',
                    'constraint'     => 1,
                    'default' => 1,
                ],
                'deleted_at'        => [
                    'type'           => 'timestamp',
                    'null'       => true,
                ],
                'CreatedBy'      => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null'           => true,
                ],
                'UpdatedBy'      => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null'           => true,
                ],
                'CreatedOn'       => [
                    'type'       => 'timestamp',
                    'null'       => true,
                ],
                'UpdatedOn' => [
                    'type' => 'timestamp',
                    'null'       => true,
                ]
        ]);
        $this->forge->addKey('Id', true);
        $this->forge->createTable('tblemailtemplates');
    }

    public function down()
    {
        $this->forge->dropTable('tblemailtemplates');
    }
}
