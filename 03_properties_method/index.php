<?php

include 'includes/newclass.inc.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>



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










</body>
</html>





























