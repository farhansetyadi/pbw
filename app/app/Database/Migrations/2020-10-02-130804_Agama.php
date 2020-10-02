<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agama extends Migration
{
	private $table = 'agama';
	public function up()
	{
		$this->forge->addField([
			'kode_agama'          => [
					'type'           => 'INT',
					'constraint'     => '11',
					'unsigned'       => true,
                    'auto_increment' => true,
			],
			'agama'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
	]);
	$this->forge->addKey('kode_agama', true);
	$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
