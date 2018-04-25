
<?php

class SomthingBrandnew{

  public   $variable="hello world";

    public function root(){

        return $this->variable;

    }

    public function rooty($youtube){

        $this->variable=$youtube;

    }


}



$object =new SomthingBrandnew();
$object2=new SomthingBrandnew();


echo $object->root();

$object->rooty("this is a new data");

echo "<br>";

echo $object->root();

















?>













































































































