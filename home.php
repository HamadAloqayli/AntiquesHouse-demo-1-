<?php

session_start();

if(isset($_COOKIE['phone']))
{
  $_SESSION['id'] = $_COOKIE['id'];
  $_SESSION['name'] = $_COOKIE['name'];
  $_SESSION['email'] = $_COOKIE['email'];
  $_SESSION['phone'] = $_COOKIE['phone'];
}
if(isset($_COOKIE['role']))
{
  $_SESSION['id'] = $_COOKIE['id'];
  $_SESSION['name'] = $_COOKIE['name'];
  $_SESSION['email'] = $_COOKIE['email'];
  $_SESSION['role'] = $_COOKIE['role'];
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Sal.js CSS -->
    <link rel="stylesheet" href="sal-master/dist/sal.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css?ts=<?=time()?>">

    <title>Home</title>
  </head>
  <body>
    
                                                          <!-- Header and Nav section -->

<div id="header">
  <div class="mainBg"></div>

  <div class="container holdNav">
  <div class="row">
            <nav class="col-md-8 col-sm-10 col-12 offset-md-2 offset-sm-1">
            <?php
          
            if(isset($_SESSION['phone']))
            {
              $text = "مرحبا بك";
              echo '<span> <span>'.$_SESSION['name'].' ،</span><span class="float-right">'.$text.'</span> </span>';
              echo '<span>USER</span>';
              echo '<a href="checkAccount.php"><span>تسجيل الخروج</span></a>';
            }
            else if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')
            {
              $text = "مرحبا بك";
              echo '<span> <span>'.$_SESSION['name'].' ،</span><span class="float-right">'.$text.'</span> </span>';
              echo '<div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span>لوحة التحكم</span>
                    </a>
                  
                    <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" style="color: var(--main-en-color); cursor: default;" href="#">الرئيسية</a>
                      <a class="dropdown-item" href="Order.php">الطلبات</a>
                      <a class="dropdown-item" href="Comment.php">التعليقات</a>
                      <a class="dropdown-item" href="Post.php">إدارة المنتجات</a>
                      <a class="dropdown-item" href="Worker.php">إضافة موظف</a>
                    </div>
                  </div>';
              echo '<a href="checkAccount.php"><span>تسجيل الخروج</span></a>';
            }
            else if(isset($_SESSION['role']) && $_SESSION['role'] == 'worker')
            {
              $text = "مرحبا بك";
              echo '<span> <span>'.$_SESSION['name'].' ،</span><span class="float-right">'.$text.'</span> </span>';
              echo '<div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span>لوحة التحكم</span>
                    </a>
                  
                    <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item activeLink" href="#">الرئيسية</a>
                      <a class="dropdown-item" href="Order.php">الطلبات</a>
                      <a class="dropdown-item" href="Comment.php">التعليقات</a>
                      <a class="dropdown-item" href="Post.php">إدارة المنتجات</a>
                    </div>
                  </div>';
              echo '<a href="checkAccount.php"><span>تسجيل الخروج</span></a>';
            }
            else
            {
              echo '<a href="Register.php" class="mx-auto"><span>تسجيل الدخول</span></a>';
            }
            
            
            ?>
            </nav>
  </div>
</div>

  <div class="headerContent">
      <img src="img/aLogo.png" alt="" data-sal="fade" data-sal-duration="800" data-sal-delay="300" data-sal-easing="ease-out">
      <h1 data-sal="fade" data-sal-duration="800" data-sal-delay="600" data-sal-easing="ease-out">Antique & Gifts</h1>
  </div> 
</div>

                                                         <!-- Guid section -->

<div id="guid1" class="section">
    <div class="container-fluid">
      <div class="row justify-content-around">
        <a href="#random" class="col-3 article" data-sal="slide-up" data-sal-duration="800" data-sal-delay="600" data-sal-easing="ease-out">
          <div class="mainBg"></div>
          <img src="img/randomImg.jpg" alt="">
          <div class="underImg">
            <span>تحف منوعه</span>
            <i class="fas fa-chevron-down"></i>
          </div>
        </a>
        <a href="#new" class="col-3 article" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300" data-sal-easing="ease-out">
          <div class="mainBg"></div>
          <img src="img/newImg.jpg" alt="">
          <div class="underImg">
            <span>تحف جديده</span>
            <i class="fas fa-chevron-down"></i>
          </div>
        </a>
        <a href="#old" class="col-3 article" data-sal="slide-up" data-sal-duration="800" data-sal-delay="0" data-sal-easing="ease-out">
           <div class="mainBg"></div>
            <img src="img/oldImg.jpg" alt="">
             <div class="underImg">
                <span>تحف قديمه</span>
                <i class="fas fa-chevron-down"></i>
             </div>
         </a>
      </div>
    </div>
</div>

                                                          <!-- Old section -->

<div id="old" class="section container d-flex flex-column align-items-center" data-sal="fade" data-sal-duration="800" data-sal-delay="0" data-sal-easing="ease-out">

  <div class="titleSection">
  <div class="mainBg"></div>
    <span>تحف قديمه</span>
  </div>
  
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
        <img src="img/oldImg.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="img/newImg.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/randomImg.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <div class="moreSection">
    <div class="mainBg"></div>
    <a href="Shop.php?old"><span>المزيد</span></a>
  </div>

</div>

                                                         <!-- New section -->

<div id="new" class="section container d-flex flex-column align-items-center" data-sal="fade" data-sal-duration="800" data-sal-delay="0" data-sal-easing="ease-out">

<div class="titleSection">
<div class="mainBg"></div>
  <span>تحف جديده</span>
</div>

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="img/oldImg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/newImg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/randomImg.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="moreSection">
  <div class="mainBg"></div>
  <a href="Shop.php?new"><span>المزيد</span></a>
</div>

</div>

                                                          <!-- Random section -->

<div id="random" class="section container d-flex flex-column align-items-center" data-sal="fade" data-sal-duration="800" data-sal-delay="0" data-sal-easing="ease-out">

<div class="titleSection">
<div class="mainBg"></div>
  <span>تحف منوعه</span>
</div>

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="img/oldImg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/newImg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/randomImg.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="moreSection">
  <div class="mainBg"></div>
  <a href="Shop.php?random"><span>المزيد</span></a>
</div>

</div>

                                                          <!-- Guid section -->

<div id="guid2" class="section">
    <div class="container-fluid">
      <div class="row justify-content-around">
        <a href="#random" class="col-3 article" data-sal="slide-up" data-sal-duration="800" data-sal-delay="600" data-sal-easing="ease-out">
          <div class="mainBg"></div>
          <img src="img/randomImg.jpg" alt="">
          <div class="underImg">
            <span>تحف منوعه</span>
            <i class="fas fa-chevron-up"></i>
          </div>
        </a>
        <a href="#new" class="col-3 article" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300" data-sal-easing="ease-out">
          <div class="mainBg"></div>
          <img src="img/newImg.jpg" alt="">
          <div class="underImg">
            <span>تحف جديده</span>
            <i class="fas fa-chevron-up"></i>
          </div>
        </a>
        <a href="#old" class="col-3 article" data-sal="slide-up" data-sal-duration="800" data-sal-delay="0" data-sal-easing="ease-out">
          <div class="mainBg"></div>
            <img src="img/oldImg.jpg" alt="">
               <div class="underImg">
                    <span>تحف قديمه</span>
                    <i class="fas fa-chevron-up"></i>
              </div>
        </a>
      </div>
    </div>
</div>

                                                          <!-- Footer section -->

<div id="footer" class="section">
<div class="mainBg"></div>
<div class="container-fluid h-100">
  <div class="row h-50">
                                                          <!-- contact part -->
      <div class="col-4 flexContent contact">
        <img src="img/contact.svg" alt="">
        <p>تواصل معنا</p>
        <form action="" class="flexContent" style="direction: rtl">
          <input type="text" placeholder="الاسم" class="form-control">
          <input type="email" placeholder="البريد الالكتروني" class="form-control">
          <input type="text" placeholder="عنوان الرساله" class="form-control">
          <textarea name="" id="" cols="30" rows="10" placeholder="نص الرساله" class="form-control"></textarea>
          <input type="submit" value="ارسال" class="form-control btn btn-outline-danger">
        </form>
      </div>
                                                          <!-- location part -->
      <div class="col-4 flexContent location">
        <img src="img/location.svg" alt="">
        <p>موقعنا</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, odit tempore! In dolorum adipisci beatae autem ipsum, optio vitae delectus! Ut iure asperiores odit expedita velit doloribus voluptates voluptas neque.</p>
      </div>
                                                          <!-- message part -->
      <div class="col-4 flexContent message">
        <img src="img/message.svg" alt="">
        <p>عن المؤسسه</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eos nam, minus, laborum placeat ad, atque ut odio iure tenetur quo ex adipisci eum non id! Modi mollitia totam hic?</p>
      </div>
  </div>
  <div class="row h-50">
                                                          <!-- follow -->
      <div class="offset-4 col-4 flexContent follow">
        <img src="img/follow.svg" alt="">
        <p>تابعنا</p>
        <div class="socialMedia">
          <a href=""><i class="fab fa-facebook"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>
      </div>
                                                          <!-- subscribe -->
      <div class="col-4 flexContent subscribe">
        <img src="img/subscribe.svg" alt="">
        <p>ليصلك كل جديد</p>
        <form action="" class="" style="direction: rtl">
          <input type="email" class="form-control outline-none" placeholder="البريد الالكتروني">
          <input type="submit" class="form-control btn btn-outline-danger" value="ارسال">
        </form>
      </div>
      </div>

      <div class="mine">
        <span>Developed By</span>
        <img src="img/hbLogo-removeBG.png" alt="">
      </div>
    </div>
    </div>

    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/882f4098ed.js" crossorigin="anonymous"></script>

    <!-- MixitUp -->
    <script src="mixitup-3/dist/mixitup.min.js"></script>

    <!-- Sal.js -->
    <script src="sal-master/dist/sal.js"></script>

    <!-- JS -->
    <script src="js/script.js?ts=<?=time()?>"></script>
</body>
</html>