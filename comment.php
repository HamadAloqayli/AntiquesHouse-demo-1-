<?php

include "database.php";

session_start();

if(isset($_COOKIE['role']))
{
  $_SESSION['id'] = $_COOKIE['id'];
  $_SESSION['name'] = $_COOKIE['name'];
  $_SESSION['email'] = $_COOKIE['email'];
  $_SESSION['role'] = $_COOKIE['role'];
}
if(!isset($_SESSION['role']))
{
    header("Location:Home.php");
    mysqli_close($con);
    session_destroy();
    exit();
}

    $empId = $_SESSION['id'];

    // $sql_Comment = " SELECT status FROM comment WHERE status = 1 ";

    // $sql_ItemCart = " SELECT image,title,text,price 
    //                                     FROM post
    //                                      WHERE post.id IN ( SELECT orderr.Pid
    //                                                                              FROM orderr,employee
    //                                                                          WHERE $empId = orderr.Eid AND orderr.status = 1 ) AND NOT EXISTS ( SELECT * FROM orderr WHERE post.id = orderr.Pid AND status = 2 ) ";
    
    $sql_ShowComment = " SELECT * FROM comment ORDER BY id DESC ";
    // $sql_Order = " SELECT status FROM orderr WHERE status = 2 ";
    
    $result_ShowComment = mysqli_query($con,$sql_ShowComment);
    // $result_Order = mysqli_query($con,$sql_Order);
    // $result_Comment = mysqli_query($con,$sql_Comment);
    // $result_ItemCart = mysqli_query($con,$sql_ItemCart);

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
<div id="header" style="height: 4rem; position: fixed; top: 0; z-index: 10;">
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
                      <a class="dropdown-item" href="Order.php">الطلبات</a>
                      <a class="dropdown-item" href="Comment.php">التعليقات</a>
                      <a class="dropdown-item" href="Post.php">إدارة المنتجات</a>
                      <a class="dropdown-item" href="Worker.php">إضافة موظف</a>
                      <a class="dropdown-item" href="Cart.php">طلباتي</a>
                    </div>
                  </div>';
              echo '<a href="checkAccount.php"><span>تسجيل الخروج</span></a>';
            }
            else if(isset($_SESSION['role']) && $_SESSION['role'] == 'worker')
            {
              $text = "مرحبا بك";
              echo '<span> <span>'.$_SESSION['name'].' ،</span><span class="float-right">'.$text.'</span> </span>';
              echo '<div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,10">
                      <span>لوحة التحكم</span>
                    </a>
                  
                    <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="dropdownMenuLink">
                        <div class="mainBg"></div>
                      <a class="dropdown-item" href="Home.php">الرئيسية</a>
                      <a class="dropdown-item" href="Order.php">الطلبات</a>
                      <a class="dropdown-item activeLink" href="#">التعليقات</a>
                      <a class="dropdown-item" href="Post.php">إدارة المنتجات</a>
                      <a class="dropdown-item" href="Cart.php">طلباتي</a>
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
</div>
                                                            <!-- Title section -->

<div class="container">
    <div class="title section rounded-lg">
            <div class="mainBg rounded-lg"></div>
          <img src="img/aLogo.png" alt="" data-sal="fade" data-sal-duration="800" data-sal-delay="300" data-sal-easing="ease-out">
          <h1 data-sal="fade" data-sal-duration="800" data-sal-delay="600" data-sal-easing="ease-out">Antique & Gifts</h1>
    </div>
</div>

                                                            <!-- Comment section -->
<div class="container section">

<button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-danger form-control readAll mb-4">تمت قراءه الكل</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header flex-row-reverse">
        <h5 class="modal-title" id="exampleModalLabel">تأكيد عمليه القراءه</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger form-control delPost" data-dismiss="modal">الغاء</button>
        <button type="button" class="btn btn-outline-danger form-control position-relative delPost"><a href="#" onclick="confirmeReadComment()" class="stretched-link">قراءه</a></button>
      </div>
    </div>
  </div>
</div>

<div class="showTable mx-auto text-center table-responsive" style="direction: rtl;">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"> </th>
          <th scope="col">عنوان الرساله</th>
          <th scope="col">نص الرساله</th>
        </tr>
      </thead>
      <tbody>
    
          <?php
          $i=0;
          if(mysqli_num_rows($result_ShowComment) > 0){
          while ($row = mysqli_fetch_array($result_ShowComment)) {
            ?>
          
        <tr>
        
          <td style="font-size: 12px;"><?php if($row['status'] == '1') echo "<i class='fas fa-circle hideIconComment' data='disIcon' style='color: var(--main-en-color)'></i>"; ?></td>
          <td><?php echo $row['title'] ?></td>
          <td><?php echo $row['text'] ?></td>
          
        </tr>
    
        <?php
          } }
          else
            echo "sorry no data";
        ?>
    
      </tbody>
    </table>
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
