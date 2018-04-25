<?php


class ParentClass{

    protected $udemy="Hey there !!! ";

}


class childclass extends ParentClass {

	public function xxxx(){

	return $this->udemy;

	}

}


$xy =new childclass();

echo $xy->xxxx();





























