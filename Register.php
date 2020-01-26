<?php

session_start();

if(isset($_SESSION['id']) || isset($_COOKIE['id']))
{
    header("Location:Home.php");
    exit();
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
  <body style="height: 100vh" class="d-flex justify-content-center align-items-center">
    
<div id="mainHolder" class="container rounded-lg">
    <div class="coverHalf rounded-lg d-flex flex-column align-items-center">
        <div class="mainBg rounded-lg"></div>
        <img src="img/registerIcon.svg" alt="">
        <span id="coverState">انشاء حساب</span>
            
                <?php
                        if(isset($_GET['errorInName']) || isset($_GET['errorInEmailDuplicate']) || isset($_GET['errorInEmailCompatibility']) || isset($_GET['errorInPassword']) || isset($_GET['errorInPasswordCompatibility']) || isset($_GET['errorInPhoneLength']) || isset($_GET['errorInPhoneNumber']))
                            echo '
                            <div id="errorMsg" class="mt-3 text-danger">
                            يوجد خطأ في التسجيل
                            </div>';
                ?>
          
            
                <?php
                        if(isset($_GET['success']))
                            echo '
                            <div id="successMsg" class="mt-3 text-success">
                            تم التسجيل بنجاح
                            </div>';
                ?>
           <div id="backHome" class="mb-5">
               <a href="Home.php">عودة للصحفة الرئيسية</a>
           </div>
    </div>
    <div class="row">
                                                                <!-- Login side -->
            <div id="subHolderLeft" class="col-6 flexContent ">
                 <p>تسجيل الدخول</p>
                 <form action="checkAccount.php" method="post" style="direction: rtl" class="needs-validation" novalidate>
                <input type="email" name="email" placeholder="البريد الالكتروني" class="form-control" required>
                    <div class="invalid-feedback">

                    </div>
                <input type="password" name="password" placeholder="كلمة المرور" class="form-control" required>
                    <div class="invalid-feedback">

                    </div>
               <div class="holdCheckBox">
                   <input type="checkbox" name="remember" style="width: auto">
                   <label>تذكرني</label>
               </div>

                        <?php

                                if(isset($_GET['errorInRegister']))
                                    echo '
                                <div class="text-danger alert alert-dismissible fade show position-relative h-auto mb-0 mt-3 p-0">
                                    يجب تسجيل الدخول
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';

                                if(isset($_GET['errorInLogin']))
                                echo '
                            <div class="text-danger alert alert-dismissible fade show position-relative h-auto mb-0 mt-3 p-0">
                                يوجد خطأ في البريد الالكتروني أو كلمة المرور
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
            
                        ?>

               <button type="submit" name="submit" class="btn btn-outline-danger submit">تسجيل</button>
            </form>
            </div>
                                                                 <!-- Register side -->
            <div id="subHolderRight" class="col-6 flexContent ">
                 <p>انشاء حساب</p>
                 <form action="createAccount.php" method="post" style="direction: rtl" id="registerForm" class="needs-validation" novalidate>
                <input type="text" placeholder="الاسم" name="name" class="form-control" required>
                    <div class="invalid-feedback d-block text-right">
                        <?php

                            if(isset($_GET['errorInName']))
                                echo 'يوجد خطأ في كتابة الاسم';

                        ?>
                    </div>
                <input type="email" name="email1" value="<?php 
                    if(isset($_GET['errorInEmailDuplicate'])) 
                        echo $_GET['errorInEmailDuplicate'];

                    else if(isset($_GET['errorInEmailCompatibility']))
                        echo $_GET['errorInEmailCompatibility'];
                
                ?>" placeholder="البريد الالكتروني" class="form-control" required>
                    <div class="invalid-feedback d-block text-right">
                            <?php

                                if(isset($_GET['errorInEmailDuplicate']))
                                    echo 'تم استخدام البريد الالكتروني مسبقا';

                                if(isset($_GET['errorInEmailCompatibility']))
                                    echo 'البريد الالكتروني و تأكيد البريد الألكتروني غير متوافقان';

                            ?>
                    </div>
                <input type="email" name="email2" placeholder="تأكيد البريد الالكتروني" class="form-control" required>
                    <div class="invalid-feedback confirmEmail text-danger text-right">
                       
                    </div>
                <input type="password" name="password1" placeholder="كلمة المرور" class="form-control" required>
                    <div class="invalid-feedback d-block text-right">
                         <?php

                            if(isset($_GET['errorInPassword']))
                                echo 'يجب ان تكون كلمة المرور اكثر من (3) خانات';

                            if(isset($_GET['errorInPasswordCompatibility']))
                                echo 'كلمة المرور وتأكيد كلمة المرور غير متوافقان';

                         ?>
                    </div>
                <input type="password" name="password2" placeholder="تأكيد كلمة المرور" class="form-control" required>
                    <div class="invalid-feedback confirmPassword text-danger text-right">
                       
                    </div>
                <input type="text" name="phone" placeholder="رقم الجوال" class="form-control" required>
                <small class="d-block text-right">مثال: 05XXXXXXXXXX</small>
                    <div class="invalid-feedback d-block text-right">
                        <?php

                            if(isset($_GET['errorInPhoneLength']))
                                echo 'يجب ان يكون رقم الجوال (10) خانات';

                            if(isset($_GET['errorInPhoneNumber']))
                                echo 'يجب ان يكون رقم الجوال ارقام فقط';
                            

                        ?>
                    </div>
                <button type="submit" name="submit" class="btn btn-outline-danger submit">تسجيل</button>
            </form>
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