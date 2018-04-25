<?php




include "includes/users.inc.php";



?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>




<?php

$first ='john';

$users= new Users($first);
echo $users->first;


?>









</body>
</html>










































