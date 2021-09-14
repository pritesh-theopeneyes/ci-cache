<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblEmailLogs extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'Id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'auto_increment' => true,
                ],
                'email_template_id'       => [
                    'type'       => 'INT',
                    'constraint' => 11,
                    'null'       => true,
                ],
               'user_id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null'           => true,
                ],
                'to'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null'           => true,
                ],
                'cc'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null'           => true,
                ],
                'bcc'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'null'           => true,
                ],
                'Subject'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                ],
                'message_body' => [
                    'type' => 'TEXT',
                    'null' => true,
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
        $this->forge->createTable('tblemaillogs');
    }

    public function down()
    {
        $this->forge->dropTable('tblemaillogs');
    }
}
