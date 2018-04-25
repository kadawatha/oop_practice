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

$object = new NewClass();
unset($object);
echo $object->getProperty();

?>










</body>
</html>





























