<?php


class dbh{

	private $servername;
	private $username;
	private $password;
	private $dbname;

	protected function connect(){

		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "book_data";

		$conn =new mysqli($this->servername,$this->username,$this->password,$this->dbname);

		return $conn;


	}


}
































