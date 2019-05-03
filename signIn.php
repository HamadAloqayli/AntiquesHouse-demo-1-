<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css?ts=<?=time()?>">
    
    
    <style>
        
        .main
        {
            width: 30%;
            margin: auto;
            margin-top: 50px;
        }
        .navSignIn
        {
            width: 30%;
            margin: 0px;
            padding: 0px;
        }

        img
        {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }


      @media (max-width: 767px)
      {
        img
        {
            width: 100px;
            height: 100px;
        }
        form h1
        {
            font-size: 20px !important;
        }
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg mt-5 stickyBar">

	
  <a class="navbar-brand headerBrand m-auto" href="home.html">Antiques&House</a>


</nav>
      
<div class="text-center main">

    <form class="form-signin" action="check.php" method="POST">
            <img src="img/107697.jpg" alt="">
            <br>
            <br>
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                
                    <?php
                        if (isset($_GET['error'])) {
                            echo "<div class='alert alert-danger' role='alert'>".$_GET['error']."</div>";
                        }
                    ?>
                
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email"  type="email" id="inputEmail" class="form-control mb-1" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="radio mb-3">
            <label for="admin">
                    <input type="radio" name="role" value="admin" id="admin"> Admin
            </label>

            <label for="worker">
            <input type="radio" name="role" value="worker" id="worker"> Worker
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>