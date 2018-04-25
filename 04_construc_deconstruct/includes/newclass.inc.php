<?php



class NewClass{


	public $data = "i am a property";


	public  function setNewProperty($newdata){

		$this->data=$newdata;

	}


	public function getProperty(){

		return $this->data;

	}




	public function __construct() {

		echo "this class has been instantiated";

	}

	public function __destruct() {
		echo "<br>";
		echo "this is the end of class";
	}


}



























































