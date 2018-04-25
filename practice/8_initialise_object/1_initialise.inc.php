<?php
class Users{

	public $first = "Daniel";
	public $last  = "Nielsen";
	public $hairColor ="Brown";
	public $eyeColor ="Blue";

	public function __construct($first) {
		$this->first =$first;
	}

	public function __destruct() {


	}

}

?>

<?php

$first ='john';

$users= new Users($first);
echo $users->first;


?>
















































































