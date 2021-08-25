<?php 

require "../init.php";

class Banco{
	
	protected $pdo;
	
	public function __construct()
	{
		$this->conexao();
	}
	
	private function conexao()
	{
		$this->pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
	}

}