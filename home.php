<?php
  include_once("connection.php");
  error_reporting(0);
   session_start();
  $username = $_SESSION['username'];
  $name = $_SESSION['name'];
  $photo = $_SESSION['photo'];
  $bio = $_SESSION['bio'];
  if($_SESSION['username']!=true){
   header("Location:index.html");
  }
  else{
?>
   <!DOCTYPE html>
<html lang="en">
  <head>
	<title>Bhuvi Web</title>
    <link rel="icon shortcut" type="images/jpg" href="images/bhuvi1.jpg" sizes="16X16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
 <style type="text/css">
      @media screen and (max-width: 800px){
      #photo-section{
        margin-top:100px;
      }
      .carousel-item{
      max-height:250px;
    }
    }
    .carousel-item{
      background-color: #333;
      height: 500px;
    }
    #protrait{
      display: block;
      position: relative;
      margin: auto;
    }
    #space{
      margin:20px auto;
      border:1px solid #ccc;
      padding: 10px ;
    }
    </style>
     <script type="text/javascript">
      function logout() {
        window.location.href='logout.php';
      }
      function awards() {
        window.location.href='result.php';
      }
      function settings() {
        window.location.href='settings.php';
      }
    </script>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="#home-section"><label>Bhuvi&nbsp;Web&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></a></div>
          <div>
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li onclick="awards();"><a href="result.php" class="nav-link">Awards</a></li>
                <li><a href="#photo-section" class="nav-link">Photos</a></li>
                <li><a href="#video-section" class="nav-link">Videos</a></li>
                <li onclick="settings();"><a href="settings.php" class="nav-link">Settings</a></li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block">
                <li class="cta" onclick="logout();"><a href="logout.php" class="nav-link"><span class="rounded border border-primary">Logout</span></a></li>
              </ul>
            </nav>
            <a href="#home-section" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 mr-auto" data-aos="fade-up">
            <h1>My Bio</h1>
            <h2 style="color: #FFC800;font-weight: bold;"><?php echo $name; ?></h2>
            <p class="mb-5" style="color:#fff;"><?php echo $bio; ?></p>
            <p><a href="settings.php" class="btn btn-outline-light py-3 px-5">Edit</a></p>

          </div>
          <div class="col-lg-2 ml-auto"  data-aos="fade-up" data-aos-delay="100">
            <figure class="img-absolute">
              <img src="<?php echo $photo; ?>" alt="Image" class="img-fluid">
            </figure>
          </div>
        </div>
      </div>
    </div>


 <!--Photo Gallery-->

     <div class="site-section section-2" id="photo-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <span class="section-sub-title d-block">Friends</span>
            <h2 class="section-title">Photo Gallery</h2>
            <p>These photos always show our lovable friendship at every time , in every moments , forever.</p>
          </div>
        </div>

      </div>
      
<div class="container">
    <h3 class="section-title">Group Photos</h3>
</div>        

<div class="container" id="space">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="9"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="10"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="11"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/1.jpg" class="d-block w-100" alt="First image" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/2.jpg" class="d-block w-100" alt="Second image" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/3.jpg" class="d-block w-100" alt="Third image" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/4.jpg" class="d-block w-75" alt="Fourth image" id="protrait" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/5.jpg" class="d-block w-75" alt="Fifth image" id="protrait" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/6.jpg" class="d-block w-100" alt="Sixth image" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/7.jpg" class="d-block w-50" alt="Seventh image" id="protrait" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/8.jpg" class="d-block w-50" alt="Eighth image" id="protrait" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/9.jpg" class="d-block w-75" alt="Ninth image" id="protrait" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/10.jpg" class="d-block w-50" alt="Tenth image" id="protrait" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/11.jpg" class="d-block w-75" alt="Eleventh image" id="protrait" id="slide_photo">
      </div>
      <div class="carousel-item">
        <img src="images/12.jpg" class="d-block w-75" alt="Twelveth image" id="protrait" id="slide_photo">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container">
    <h4 class="section-title">Friends Profile</h4>
</div>

      <div class="owl-carousel nonloop-block-13">

          <a class="work-thumb" href="images/arun1.jpg" data-fancybox="gallery">
            <div class="work-text">
              <h3>Arunkumar</h3>
              <span class="category">MECH</span>
            </div>
            <img src="images/arun1.jpg" alt="arun" class="img-fluid">
          </a> 
          
          <a class="work-thumb" href="images/bhuvi1.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Bhuvaneshwaran</h3>
              <span class="category">CSE</span>
            </div>
            <img src="images/bhuvi1.jpg" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="images/arun2.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Arunkumar</h3>
              <span class="category">EEE</span>
            </div>
            <img src="images/arun2.jpg" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="images/seba.JPG"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Sebastin aakash</h3>
              <span class="category">EEE</span>
            </div>
            <img src="images/seba.JPG" alt="Image" class="img-fluid">
          </a>

          <a class="work-thumb" href="images/srigokul.JPG"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Sri gokul</h3>
              <span class="category">MECH</span>
            </div>
            <img src="images/srigokul.JPG" alt="Image" class="img-fluid">
          </a>
          <a class="work-thumb" href="images/kathir.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Kathir</h3>
              <span class="category">MECH</span>
            </div>
            <img src="images/kathir.jpg" alt="Image" class="img-fluid">
          </a>
          <a class="work-thumb" href="images/sivasangar.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Sivasangar</h3>
              <span class="category">MECH</span>
            </div>
            <img src="images/sivasangar.jpg" alt="Image" class="img-fluid">
          </a>
          <a class="work-thumb" href="images/sivakumar.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Sivakumar</h3>
              <span class="category">MECH</span>
            </div>
            <img src="images/sivakumar.jpg" alt="Image" class="img-fluid">
          </a>
          <a class="work-thumb" href="images/gokulnath.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Gokulnath</h3>
              <span class="category">MECH</span>
            </div>
            <img src="images/gokulnath.jpg" alt="Image" class="img-fluid">
          </a>
           <a class="work-thumb" href="images/rooban.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Ruban</h3>
              <span class="category">MECH</span>
            </div>
            <img src="images/rooban.jpg" alt="Image" class="img-fluid">
          </a>
          <a class="work-thumb" href="images/bhuvi2.jpg"  data-fancybox="gallery">
            <div class="work-text">
              <h3>Maya</h3>
              <span class="category">EEE</span>
            </div>
            <img src="images/maya.jpg" alt="Image" class="img-fluid">
          </a>
      </div>
    </div>
   
   <section id="video-section">
       <div class="container">
            <h3 class="section-title">Videos</h3>
       </div>   
       <div align="center" class="embed-responsive embed-responsive-16by9">
            <video loop class="embed-responsive-item" controls>
               <source src="videos/" type="video/mp4">
             </video>
        </div>
   </section>
   
<footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Bhuvi</h3>
            <p>I am M Bhuvaneshwaran.</p>
            <p>I am CSE student.</p>
            <p>Love to code.</p>
            <p>This website is for my friends.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-links">
              <li ><a style="font-weight:bold;" href="#home-section">Home</a></li>
              <li><a style="font-weight:bold;" href="awards.php">Awards</a></li>
              <li><a style="font-weight:bold;" href="#photo-section">Photos</a></li>
              <li><a style="font-weight:bold;" href="#video-section">Videos</a></li>
              <li><a style="font-weight:bold;" href="settings.php">Settings</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Feedback</h3>
            <p>Give me your feedback and i will do those stuffs</p>
            <form action="" method="POST">
              <div class="d-flex mb-5">
                <input type="text" name="feedback" class="form-control rounded-0" placeholder="Your Feedback">
                <input type="submit" name="submitfeedback" class="btn btn-primary rounded-0" value="Send">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p style="font-weight:bold;">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> This Website is made with <i class="icon-heart" style="color:red;font-weight:bold;" aria-hidden="true"></i> by <a href="#" target="_blank" style="font-weight:bold;" >Bhuvaneshwaran</a>
             </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

</div>


<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
</body>
</html>

<?php
}

if(isset($_POST['submitfeedback'])){
  $feedback = $_POST['feedback'];
   date_default_timezone_set("Asia/Kolkata");

   $date = date("Y-m-d H:i:s");

   $feedbackquery = "INSERT INTO feedback VALUES ('$username' , '$feedback' ,'$date')";
   $feedbackdata = mysqli_query($conn , $feedbackquery);
   if($feedbackdata){
    echo "<script>alert('Thanks For Your Feedback,Keep Supporting :) .');</script>";
   }
}
?>