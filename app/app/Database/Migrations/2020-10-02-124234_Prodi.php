<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodi extends Migration
{
	private $table = 'prodi';

	public function up()
	{
		$this->forge->addField([
			'kode_prodi' => [
					'type'           => 'VARCHAR',
					'constraint'     => '3',
			],
			'nama_prodi' => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'ketua_prodi' => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
		]);
		$this->forge->addKey('kode_prodi', true);
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
