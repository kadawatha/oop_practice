<!--
1)ParentClass
*Public variable
2)ChildClass
*ChildClass extend to ParentClass

3)
variable new Child class
echo variable->name;
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

echo $object->name;

?>




</body>
</html>

















































































