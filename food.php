<?php

session_start();

if (!isset($_SESSION['email'])) {
	header("Location:signIn.php?error=SignIn First!");
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css?ts=<?=time()?>">
	
</head>
<body>
	

<div class="container">
	<div class="row">
		<div class="col-3 showName"><?php  
											echo "Welcome ".$_SESSION['name'];
										?></div>
		<div class="col-8">
			<nav>
			<ul>
				<li> <a href="home.php">home</a> </li>
				<li> <a href="sport">sport</a> </li>
				<li> <a href="tech.php">tech</a> </li>
				<li class="activeA">food</li>
				
				<?php

						if ($_SESSION['role'] == 'admin') {

							echo "<li class='nav-item dropdown myDropdown'>
							<a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>admin job</a>
								<div class='dropdown-menu mt-1'>
								<a class='dropdown-item' href='modify.php'>modify workers</a>
						</li>";
						} else {

							echo "<li class='nav-item dropdown myDropdown'>
							<a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>worker job</a>
								<div class='dropdown-menu mx-2 my-1'>
								<a class='dropdown-item' href='#'>add post</a>
								<a class='dropdown-item' href='#'>delete post</a>
								<a class='dropdown-item' href='#'>edit post</a>
						</li>";
						}
						
					?>

			</ul>
			</nav>
		</div>
			<div class="col-1 signIn flexCenter"> <a href="check.php">signOut</a> </div>
	</div>

	<div class="desc">
			
		<div class="bgImg flexCenter">
			<h1>Food</h1>
		</div>
		<br>

			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quidem fugiat placeat perferendis dicta, vitae obcaecati beatae natus. Delectus adipisci quasi dolorum nobis suscipit sunt rerum, laudantium neque voluptatum quas voluptates amet at, ducimus nostrum est dolore, pariatur quisquam magnam optio necessitatibus. Neque recusandae aut nulla sed cum perferendis esse.</p>
	</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>