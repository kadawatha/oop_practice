

<?php

class NewClass{



	public $data="i am a property";
	public $error="this is the class called newclass".__CLASS__." !!!! ";

	public static $static = "DHANUSHKA GAYAN";




	public function  __construct() {
		echo "this class has been instantiated<br>";
	}

	public function __toString() {
		echo "tostring method ";
		return $this->error;
	}


	public function setNewProperty($newdata){
		$this->data = $newdata;
	}

	public function getProperty(){
		return $this->data;
	}


	public function __destruct() {
		echo "this is the end of classes";
	}


}


?>



<?php

echo NewClass::$static;

?>






















































































