<?php

session_start();

if (!isset($_SESSION['email'])) {
	header("Location:signIn.php?error=SignIn First!");
}

include "database.php";

$empId = $_SESSION['id'];

$sql_DisplayPost = " SELECT id,image,title,category,price FROM post WHERE NOT EXISTS ( SELECT * FROM orderr WHERE post.id = orderr.Pid AND status = 2 OR post.id = orderr.Pid AND orderr.Eid = $empId AND status = 1) ";
$sql_Comment = " SELECT status FROM comment WHERE status = 1 ";

$sql_ItemCart = " SELECT image,title,text,price 
									FROM post
									 WHERE post.id IN ( SELECT orderr.Pid
									 										FROM orderr,employee
																		 WHERE $empId = orderr.Eid AND orderr.status = 1 ) AND NOT EXISTS ( SELECT * FROM orderr WHERE post.id = orderr.Pid AND status = 2 ) ";

$sql_ShowWorker = " SELECT * FROM employee WHERE role = 'worker' ORDER BY id ASC ";

$result_ShowWorker = mysqli_query($con,$sql_ShowWorker);
$result_DisplayPost = mysqli_query($con,$sql_DisplayPost);
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

<a href="orderPage.php" class="starIcon">
	<i class="fas fa-star"></i>
</a>

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


	<div class="container">

				<div class="message">

<?php
		if (isset($_GET['sucsses'])) {

	echo "<div class='alert alert-success text-center mt-5 mx-auto w-25' role='alert'>

									". $_GET['sucsses']."
												
	</div>";
		}
?>
</div>


<div class="leftSideForm">
	<button type="button" class="btn btn-primary ml-5 addWorker" data="newWorker" id="test">add Worker</button>
	
			<div class="formAdd">
					<form action="addWorker.php" method="POST">
						<label for="newName">
						<h6>Username:</h6>
							<input type="text" name="nameAdd" id="newName">
						</label>
						
						<label for="newEmail">
						<h6>Email:</h6>
							<input type="email" name="emailAdd" id="newEmail">
						</label>
	
						<label for="newPassword">
						<h6>Password:</h6>
							<input type="password" name="passwordAdd" id="newPassword">
						</label>
							
						<input type="submit" class="btn btn-success" value="send">
						</form>
			</div>
</div>

<div class="rightSideForm">
	<button type="button" class="btn btn-primary ml-5 addComment" data="newComment" id="test">add comment</button>
	
			<div class="formAddC">
					<form action="addComment.php" method="POST">
						<label for="newTitle">
						<h6>Title:</h6>
							<input type="text" name="titleAdd" id="newTitle">
						</label>
						
						<label for="newText">
						<h6>Text:</h6>
							<input type="text" name="textAdd" id="newText">
						</label>
							
						<input type="submit" class="btn btn-success" value="send">
						</form>
			</div>
</div>

	<div class="showTable w-75 mx-auto text-center">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>

	  <?php
	  $i=0;
	  while ($row = mysqli_fetch_array($result_ShowWorker)) {
		?>
	  
    <tr>
      <th scope='row'><?php echo ++$i ?></th>
      <td><?php echo $row['id'] ?></td>
	  <td><?php echo $row['name'] ?></td>
	  <td><?php echo $row['email'] ?></td>
	  <td><a href="#" title="delete" onclick="conDelete(<?php echo $row['id'] ?>) "><img src="img/x-button.png"></a></td>
	  <td><a href="#" title="edit" class="toEdit" onclick="getEdit(<?php echo $row['id'] ?>,'<?php echo $row['name'] ?>','<?php echo $row['email'] ?>')"> <img src="img/edit.png"></a></td>
    </tr>

	<?php
	  }
	?>

  </tbody>
</table>

	</div>
		<br>
		<br>
		<br>
	  
		<div class="formEdit">
				<form action="editWorker.php" method="POST">
					<label for="editName">
					<h6>Username:</h6>
						<input type="text" name="nameEdit" id="editName" value="">
					</label>
					
					<label for="editEmail">
					<h6>Email:</h6>
						<input type="email" name="emailEdit" id="editEmail" value="">
					</label>

					<input type="hidden" name="idEdit" id="editId" value="">
  				
					<input type="submit" class="btn btn-success" value="send" onclick="confirm('are you sure ?')?alert('done'):alert('sory')">
			 	 </form>
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
