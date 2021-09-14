<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EmailTemplateBody extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'Id'          => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'auto_increment' => true,
                ],
                'token_text'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                ],
                'subject'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                ],
                 'email_template_id'       => [
                    'type'       => 'INT',
                    'constraint' => 11,
                    'null'       => true,
                ],
                'email_body' => [
                    'type' => 'TEXT',
                    'null' => true,
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
                 'bcc_email'       => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                ],
                'is_active'          => [
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
        $this->forge->createTable('emailtemplatebody');
    }

    public function down()
    {
        $this->forge->dropTable('emailtemplatebody');
    }
}
