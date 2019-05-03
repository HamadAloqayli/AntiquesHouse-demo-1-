<?php

session_start();

if (!isset($_SESSION['email'])) {
	header("Location:signIn.php?error=SignIn First!");
}

include "database.php";
$empId = $_SESSION['id'];
$idImg = $_GET['idImg'];

$sql_Item = " SELECT * FROM post WHERE id = ".$idImg." ";
$sql_Comment = " SELECT status FROM comment WHERE status = 1 ";
$sql_ItemCart = " SELECT image,title,text,price 
									FROM post
									 WHERE post.id IN ( SELECT orderr.Pid
									 										FROM orderr,employee
																		 WHERE $empId = orderr.Eid AND orderr.status = 1 ) AND NOT EXISTS ( SELECT * FROM orderr WHERE post.id = orderr.Pid AND status = 2 ) ";

$result_Item = mysqli_query($con,$sql_Item);
$result_Comment = mysqli_query($con,$sql_Comment);
$result_ItemCart = mysqli_query($con,$sql_ItemCart);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?ts=<?=time()?>">
	<style>
	
	#Container .mix{ display: none;}

	</style>
</head>
<body>


		<nav class="navbar navbar-dark bg-dark navbar-expand-lg mt-5 stickyBar">

							<span class="headerName text-uppercase font-weight-bold"> <?php  
											echo $_SESSION['name'];
										?></span>
										    <ul class="navbar-nav">

<li class="nav-item dropdown mt-1">
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<?php
		if ($_SESSION['role'] == 'admin') {
			echo "<i class='fas fa-desktop'></i>";
		}
		else {
			echo "<i class='fas fa-desktop'></i>";
		}

?>
	</a>
	<div class="dropdown-menu mt-1" aria-labelledby="navbarDropdown">

<?php
		if ($_SESSION['role'] == 'admin') {
			echo "  <a class='dropdown-item' href='modify.php'>Modify workers</a>
					<a class='dropdown-item' href='#'>Another action</a>";
		}
		else {
			echo "  <a class='dropdown-item' href='modifyPost.php'>Modify posts</a>
					<a class='dropdown-item' href='comment.php'>View comments</a>";
		}

?>

	</div>
</li>
</ul>

  <a class="navbar-brand headerBrand" href="home.php">Antiques&House</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">


  </div>
  

<div class="iconHeader">
<a href="cartPage.php"> <i class="fas fa-shopping-cart mr-4 <?php if(mysqli_num_rows($result_ItemCart) > 0 ) echo "goldColor" ?>"></i> </a>
		<i class="fab fa-facebook"></i>
		<i class="fab fa-instagram"></i>
		<i class="fab fa-twitter"></i>
		<i class="fab fa-google-plus"></i>
</div>


<?php		if ($_SESSION['role'] == 'worker' && mysqli_num_rows($result_Comment) > 0){
			
			echo " <i class='fas fa-bell text-warning'></i> <span class='ml-1 text-warning'> ".mysqli_num_rows($result_Comment)." </span>";

			}
			?>
<a class="signOut text-uppercase font-weight-bold ml-5" href="check.php"><i class="fas fa-sign-out-alt"></i></a>

</nav>

<?php
		if (isset($_GET['sucsses'])) {

	echo "<div class='alert alert-success text-center mt-5 mx-auto w-25' role='alert'>

									".$_GET['sucsses']."
												
	</div>";
		}
?>

	<div class="container">

            <div class="row">
            
            <div class="col-12 col-md-6">

                <div class="leftSide">
                    <?php $row = mysqli_fetch_array($result_Item)    ?>

                        <img src="savedImg/<?php echo $row['image'] ?>" alt="">
                        <h3> <?php  echo $row['title']  ?> </h3>
                        <p> <?php  echo $row['text']  ?> </p>

                    
                </div>

            </div>

            <div class="col-12 col-md-6">

                        <div class="rightSide">
                            <p> To buy this item add it to cart then we will contact with you... </p>
                            <span> The payment method will be by transfare </span>
                            <h6> The cost is <?php echo $row['price'] ?> </h6>
                        </div>

		<form action="addToCart.php" method="post" enctype="multipart/form-data">
									<input type="hidden" value="<?php echo $_SESSION['id']; ?>" name="empId">
									<input type="hidden" value="<?php echo $row['id']; ?>" name="postId">
					<input type="submit" class="btn btn-success buttonCart" value="Add To Cart">
			
		</form>
                        
            </div>
            
            </div>



	</div>
<script
  src="https://code.jquery.com/jquery-3.1.0.js"
  integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="js/frames/jquery.mixitup.js"></script>
<script type="text/javascript" src="js/script.js?ts=<?=time()?>"></script>
</body>
</html>