<?php

include "database.php";

session_start();

$email = $_POST['email'];
$pass = $_POST['password'];
$role = $_POST['role'];

echo $role;
$sql=" SELECT * FROM employee WHERE email = '".$email."' AND password = '".$pass."' AND role = '".$role."' ";

$result= mysqli_query($con,$sql);

//signOut
if (isset($_SESSION['email'])) {

    session_destroy();
    header("Location:home.html");

}
   
//signIn

else if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $email;
    $_SESSION['role'] = $role;
    $_SESSION['id'] = $row['id'];

    header("Location:home.php");
} 

else {
    session_destroy();
    header("Location:signIn.php?error=Wrong Email or Password!");
}






?>