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



$users= new Users('jhon','deo','Blond','brown');
$users2= new Users('Deniel','Nielson','lynda','udemy');


echo $users2->fullName();


?>









</body>
</html>










































