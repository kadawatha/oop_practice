
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

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>
<body>



<?php

$object = new NewClass;

$object2 = new NewClass;

$object3 = new NewClass;


echo "<br>";
echo $object->getProperty();


?>










</body>
</html>





























