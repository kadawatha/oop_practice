<!--
there is a
1)ParentClass

In Parent Class

*Privet variable
*Public function
*Return this /variable name/

 )
2)ChildClass

In Child Class

*Child class extend to Parent Class
*Public function
*Return this /variable name/

3)
variable = new ParentClass;
variable->name
-->
<?php
include 'includes/parentclass.inc.php';
include 'includes/newclass.inc.php';

$object = new ParentClass;





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


































