<?php

session_start();

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home - page</title>
  <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/flat-icon/flaticon.css">
  <link rel="stylesheet" href="temp/styles/styles.css?ts=<?=time()?>">
  <link rel="stylesheet" href="temp/styles/myStyles.css?ts=<?=time()?>">
</head>
<body>
  <div class="main-wrapper">
    <header class="header header--bg">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav pull-right">
              <li><a href="#">HOME</a></li>
              <li><a href="About.php">ABOUT</a></li>
              <li><a href="http://riyadhmetro.sa/en/interactive-map" target="_blank">INTERACTIVE MAP</a></li> 
              <?php
                      if(isset($_SESSION['id']))
                      {
                        echo '<li><a href="Dashboard.php">DASHBOARD</a></li>';
                        echo '<li><a href="checkAccount.php">SIGN OUT</a></li>';
                      }
                      else
                        echo '<li><a href="Register.php">SIGN IN</a></li>';


            ?>
            </ul>
          </div>
        </nav>
        <div class="header__content text-center">
          <h1 class="header__content__title">RIYADH METRO</h1>
          <p class="header__content__paragraph">Metro in the region that will make your life easier, closer, and more connected with the world around you, through the metro network that covers the city of Riyadh according to multiple networks and levels of transportation systems</p>
          <a class="button button--margin-right button--hover" href="#">LARN MORE</a>
          <a class="button button--hover" href="#" >PURCHASE</a>
        </div>
      </div>
    </header>
    
    <section class="service">
      <div class="container">
        <div class="page-section text-center">
          <h2 class="page-section__title">SERVICES WE OFFER</h2>
          <p class="page-section__paragraph">Riyadh Metro project offers many services that facilitate movement in the metro network, so you can book tickets, get subscription cards, view the metro map and many other services all in your hands </p>
          <div class="row gutters-40">
            <div class="col-md-4">
<a href="Card.php">
                <div class="thumbnail">
                  <i class="material-icons"><img src="img/card.svg" alt=""></i>
                  <h4 class="service__title">Get a card</h4>
                  <p class="service__paragraph">A smart card that enables you to use the metro and enjoy more mobility with the card, as you can get a weekly, monthly, yearly card</p>
                </div>
</a>
            </div>
            <div class="col-md-4">
<a href="Map.php">
                <div class="thumbnail">
                  <i class="material-icons"><img src="img/map1.svg" alt=""></i>
                  <h4 class="service__title">View the map</h4>
                  <p class="service__paragraph">A metro map that clarify users to know and understand the metro network in addition to the stations and paths used for transportation</p>
                </div>
</a>
            </div>
            <div class="col-md-4">
<a href="Ticket.php">
                <div class="thumbnail">
                  <i class="material-icons"><img src="img/ticket.svg" alt=""></i>
                  <h4 class="service__title">Buy a ticket</h4>
                  <p class="service__paragraph">Get tickets online now without having to go to the ticket centers, to save time and effort</p>
                </div>
</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="about">
      <div class="container">
        <div class="page-section">
          <div class="text-center">
            <h2 class="page-section__title">ABOUT RIYADH METRO</h2>
            <p class="page-section__paragraph">An overview of the Riyadh Metro project and its most prominent features and services, in addition to some statistics</p>
          </div>
          <div class="row gutters-50">
            <div class="about--narrow" style="display: flex; align-items:center">
              <div class="col-md-6">
                <img class="img-responsive" src="img/RM_2.jpg" alt="">
              </div>
              <div class="col-md-6 about__extra-padding">
                <p class="about__content-subTitle">Riyadh Metro project offers you a distinctive public transport service, through 6 main paths covering 176 km from Riyadh and 85 stations equipped with the latest technologies that give you an exceptional experience while touring throughout the city of Riyadh.</p>
                  <a class="button--light" href="About.php">READ MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      
      <section class="contact contact--bg changeColor">
      <div class="container">
        <div class="page-section text-center changeColor">
        <div class="overview__wrapper text-center changeColor">
              <ul>
                <li>
                  <h1 class="overview__number">6</h1>
                  <p class="overview__title">NUMBER OF PATHS</p>
                </li>
                <li>
                  <h1 class="overview__number">85</h1>
                  <p class="overview__title">STATIONS</p>
                </li>
                <li>
                  <h1 class="overview__number">176 KM</h1>
                  <p class="overview__title">SYSTEM LENGTH</p>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </section>
          
    <section class="about page-section" style="margin-top: 150px">
      <div class="container">
          <div class="text-center">
            <h2 class="page-section__title">Technologies and features</h2>
            <p class="page-section__paragraph">An overview of the latest advanced technologies and features used in the Riyadh Metro project</p>
          </div>
          <div class="row gutters-50">
            <div class="about--narrow" style="display: flex; align-items:center">
              <div class="col-md-6">
                <img class="img-responsive" src="img/RM_3.jpg" alt="">
              </div>
              <div class="col-md-6 about__extra-padding">
                <p class="about__content-subTitle">Riyadh metro offers you a unified design, equipped with advanced technologies, which gives it a distinctive feature in terms of design, as the metro adopts the automatic self-driving (without driver) by controlling it from central control rooms with specifications that enable it to follow up with high accuracy.

The specifications of the metro included the latest technology in the manufacture around the world.</p>
                  <a class="button--light" href="About.php">READ MORE</a>
                </div>
              </div>
            </div>
        </div>
      </section>

      <div class="container">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/VMh1ll5i41s?autoplay=1&iv_load_policy=3&loop=1&modestbranding=1&playlist=VMh1ll5i41s" frameborder="0" allowfullscreen="" id="video"  allowscriptaccess="always"></iframe>
                </div>                                       
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <section class="video-section video-section--bg">
        <div class="container">
          <div class="page-section--large text-center">
            <button class="video-section__icon" data-toggle="modal" data-target="#myModal"><img src="assets/images/video-icon.png" alt=""></button>
          </div>
        </div>
      </section>

      <section class="about page-section" style="margin-top: 150px">
      <div class="container">
          <div class="text-center">
            <h2 class="page-section__title">LATEST NEWS</h2>
            <p class="page-section__paragraph">An overview of the latest news and the development proccess in the Riyadh metro</p>
          </div>
          <div class="row gutters-50">
            <div class="about--narrow" style="display: flex; align-items:center">
              <div class="col-md-6">
                <img class="img-responsive" src="img/RM_5.jpg" alt="">
              </div>
              <div class="col-md-6 about__extra-padding">
                <p class="about__content-subTitle">135000 concrete pieces depicting the features of the tunnels in the Riyadh metro and Prince Faisal bin Bandar head of the Riyadh Development Authority, announced earlier that the deep tunnel excavation work on the Riyadh train project has ended by 7 machines to dig deep tunnels after 21 months of continuous work</p>
                </div>
              </div>
            </div>
        </div>
      </section>

      <footer class="footer footer--bg">
        <div class="container">
          <div class="page-section">
            <div class="row gutters-100">
              <div class="col-md-4 col-lg-3">
                <div class="footer__first">
                  <h2 class="footer__title">Riyadh Metro</h2>
                  <p class="footer-first__paragraph">We try to provide our services with the best possible quality and we thank you for your trust</p>
                  <ul class="footer-first__social-icons">
                    <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li>
                    <li><a href="#"><i class="flaticon-behance-logo"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-2">
                <div class="footer__second">
                  <h2 class="footer__title">QUICK LINK</h2>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="footer__third">
                  <h2 class="footer__title">CONTACT US</h2>
                  <ul>
                    <li><span class="glyphicon glyphicon-envelope"></span> <a href="#">dartagency@gmail.com</a></li>
                    <li><span class="glyphicon glyphicon-earphone"></span> <a href="#">+0123-345-6789</a></li>
                  </ul>
                  <h4 class="footer__subscribe__title">Subscribe</h4>
                  <div class="subscribe-section">
                    <input type="email" class="form-control" size="50" placeholder="Enter Your Email" required>
                    <button class="subscribe-section__button" type="button"><img src="assets/images/send-icon.png" alt=""></button>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="footer__fourth">
                  <h4 class="footer__title">INSTAGRAM</h4>
                  <div class="row">
                    <ul>
                      <li><a href="#"><img src="assets/images/instagram-pic1.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/instagram-pic2.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/instagram-pic3.png" alt=""></a></li>
                    </ul>
                  </div>
                  <div class="row">
                    <ul>
                      <li><a href="#"><img src="assets/images/instagram-pic4.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/instagram-pic5.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/instagram-pic6.png" alt=""></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <hr class="footer__horizontal-bar">
            <p class="footer__bottom-paragraph">&copy; Copyright 2020 <a href="#" style="color: #ffffff;font-weight:bold;">SWE497 students</a>. All Rights Reserved</p>
          </div>
        </div>
      </footer>





      <!-- ProProfs Chat code starts --><div id="l2s_trk" style="z-index:99;">add chat to your website</div><script type="text/javascript">   var l2s_pht=escape(location.protocol); if(l2s_pht.indexOf("http")==-1) l2s_pht='http:'; (function () { document.getElementById('l2s_trk').style.visibility='hidden'; var l2scd = document.createElement('script');  l2scd.type = 'text/javascript'; l2scd.async = true; l2scd.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'live2support.com/js/lsjs1.php?stid=41093&jqry=Y&l2stxt='; var l2sscr = document.getElementsByTagName('script')[0]; l2sscr.parentNode.insertBefore(l2scd, l2sscr); })();  </script><!-- ProProfs Chat code closed -->
      
  </div>
    
  <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
  <script>paypal.Buttons().render('body');</script>

  
  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>





