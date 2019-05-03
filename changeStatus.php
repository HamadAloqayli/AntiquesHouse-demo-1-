<?php

include "database.php";


if (isset($_GET['read'])) 
{
	$sqlU = " UPDATE comment SET status = 0 ";
    $resultU = mysqli_query($con,$sqlU);
    header("Location:comment.php");
}


mysqli_close($con);

?>