<?php

include "database.php";

$delWor = $_GET['dWorker'];

$sql = " DELETE FROM employee WHERE id = '$delWor' ";

mysqli_query($con,$sql);

header("Location:modify.php?sucsses=SUCSSESFULY DELETED!");


mysqli_close($con);






?>