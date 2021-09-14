<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EmailTemplateConfiguration extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'Id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'auto_increment' => true,
                ],
                'keyWord'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                ],
                'key'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                ],
                'value'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                ],
                'type'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                ],
                'display_text'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                ],
                'description'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                ],
                'display_order'       => [
                    'type'       => 'TINYINT',
                    'constraint' => '255',
                    'null'       => true,
                ],
                'is_active'          => [
                    'type'           => 'bit',
                    'constraint'     => 1,
                    'default' => 1,
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
        $this->forge->createTable('tblemailtemplatesconfigurations');
    }

    public function down()
    {
        $this->forge->dropTable('tblemailtemplatesconfigurations');
    }
}
