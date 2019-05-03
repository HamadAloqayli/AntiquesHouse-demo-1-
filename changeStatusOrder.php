<?php

include "database.php";


if (isset($_GET['readOrder'])) 
{
	$sqlU = " UPDATE orderr SET status = 3 WHERE status = 2";
    $resultU = mysqli_query($con,$sqlU);
    header("Location:orderPage.php");
}


mysqli_close($con);

?>