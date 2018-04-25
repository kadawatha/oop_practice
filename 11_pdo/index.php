<?php
include_once 'includes/dbh.inc.php';
include_once 'includes/user.inc.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<?php

$object=new User;
echo $object->getAllUsers();



?>





</body>
</html>















































