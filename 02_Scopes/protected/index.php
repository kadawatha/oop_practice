<!--
1)ParentClass
*protected variable name
2)Child Class
*Child class extend to Parent class
*public function
*return $this->name;

-->
<?php
include 'includes/parentclass.inc.php';
include 'includes/newclass.inc.php';

$object = new NewClass;





?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>








<?php

echo $object->name();

?>









</body>
</html>


































