<?php


class ParentClass{

	private $name="Hey there !!! ";

	public function name(){

		return $this->name;

	}

}


class childclass extends ParentClass {



}


$xy =new ParentClass();

echo $xy->name();





























