<?php
class database {
	protected $db;
	public function __construct($host, $username, $password, $db_name){
		$dsn = 'mysql:host=' . $host . ';dbname=' . $db_name;
		$conn = null;
		try{
			$conn = new PDO($dsn, $username, $password);
			$conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAME \'UTF8\'');
			$conn->exec("set names utf8");
			$this->db = $conn;

		} catch(PDOException $e){

		}
	}

	public function Connection(){
		return $this->db;
	}
}
?>