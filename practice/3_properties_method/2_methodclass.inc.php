<?php


class NewClass{


	public $real="I am a property";

	/**
	 * @param $newreal
     */
	public function setNewProperty($newreal){

		$this->real =$newreal;

	}

	/**
	 * @return string
     */
	public  function getProperty(){
		return $this->real;
	}



}




?>



<?php

$object =new NewClass();
$object2=new NewClass();

echo $object->getProperty();
$object->setNewProperty("this is a new data");

echo "<br>";

echo $object->getProperty();

echo "<br>";


$object2->setNewProperty("this is a object 2 data here");
echo $object2->getProperty();





?>

































