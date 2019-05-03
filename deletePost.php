<?php

include "database.php";

$delPost = $_GET['dPost'];

$sql = " DELETE FROM post WHERE id = '$delPost' ";

mysqli_query($con,$sql);

header("Location:modifyPost.php?sucsses=SUCSSESFULY DELETED!");


mysqli_close($con);






?>