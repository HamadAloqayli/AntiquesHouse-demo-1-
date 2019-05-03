<?php

include "database.php";

$name = $_POST['nameAdd'];
$email = $_POST['emailAdd'];
$pass = $_POST['passwordAdd'];

$sql = " INSERT INTO employee(name,email,password,role) VALUES('$name','$email','$pass','worker') ";

mysqli_query($con,$sql);
header("Location:modify.php?sucsses=SUCSSESFULY ADDED!");


mysqli_close($con);





?>