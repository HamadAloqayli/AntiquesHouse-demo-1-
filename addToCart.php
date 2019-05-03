<?php

include "database.php";

$empId = $_POST['empId'];
$postId = $_POST['postId'];

$sql = " INSERT INTO orderr(Eid,Pid) VALUES('$empId','$postId') ";

mysqli_query($con,$sql);
header("Location:home.php?sucsses=SUCCESSFULY ADD TO CART :)");


mysqli_close($con);


?>