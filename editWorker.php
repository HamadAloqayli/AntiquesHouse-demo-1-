<?php

include "database.php";

$id = $_POST['idEdit'];
$name = $_POST['nameEdit'];
$email = $_POST['emailEdit'];

$sql = " UPDATE employee SET name = '$name' , email = '$email' WHERE id = '$id'  ";

mysqli_query($con,$sql);
header("Location:modify.php?sucsses=SUCSSESFULY EDIT!");


mysqli_close($con);





?>