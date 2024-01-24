<?php
    if (isset($_POST) && $_POST){
        include_once("connect.php");

        $sql = "INSERT INTO `contact2` (`name`, `email`, `password`) 
        VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "');";
    
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BellaGlow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/697f7d2aae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    

  
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><span class=" text-danger background ">Bella</span>Glow</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Estheticians</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#Blog">Pack</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#Contact">Contact</a>
            </li>

        </div>
      </div>
    </nav>
 
<!--carousel-->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
 
  
  <div class="carousel-inner">
    <div class="carousel-item active bg-1">
      <div class="carousel-caption">
<h5 class="animated fadeInDown"style="animation-delay: 1s;"> Welcome to <br> <span class="text-danger background">BellaGlow Center</span></h5>
<p class="animated fadeInUp" style="animation-delay: 1s;">Where Beauty Meets Serenity,we invite you to immerse yourself in a haven where self-care create a life of harmonious beauty.</p>
<a href="service.phh"class="btn">Learn More</a>
      </div>
    </div>
    <div class="carousel-item bg-2">
      <div class="carousel-caption">
        <h5 class="animated fadeInDown"style="animation-delay: 1s;">beauty <span class="text-danger background">LifeStyle</span></h5>
        <p class="animated fadeInUp" style="animation-delay: 1s;">Enhance Your Beauty, Elevate Your Confidence and Stay connected with the latest beauty trends..</p>
        <a href="service.php"class="btn">discover More</a>
              </div>
    </div>
    <div class="carousel-item bg-3">
      <div class="carousel-caption">
        <h5 class="animated fadeInDown"style="animation-delay: 1s;">Hair &  <span class="text-danger background">Treatments</span></h5>
        <p class="animated fadeInUp" style="animation-delay: 1s;">Because you need time for yourself, unlock the Secrets to Gorgeous, Healthy Hair.</p>
        <a href="service.php"class="btn">discover More</a>
        </div>
    </div>
  </div>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<!--about-->


<div class="about section-padding" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-header text-center">
          <h2>  About <span> Us</span></h2>
          <p> BellaGlow space for everyone</p>
        </div>
      </div>
    </div>
 
    <div class="row">
      <div class="col-lg-5 col-sm-12">
        <div class="ab-img">
          <img src="img/glow.jpeg" alt=""  width="400" height="350"> 
        </div>
        </div>
     

      <div class="col-lg-5 col-sm-12">
        <div class="about-text">
        <h4>Welcome To BellaGlow</h4>
        <h2>better life with perfect body</h2>
          <p>our  Center is founded on the belief that beauty should be accessible to all,
            Peaceful spa treatments for deep relaxation of the mind, reducing stress and life changing services. Whether you want to feel better in yourself, are attending a work or family event or maybe have a wedding come around, we have the treatments you need to look your best and feel amazing
          </p>
          <a href="#">discover  More</a>
        </div>
    </div>
  </div>
</div>
</div>


<!--stats-->
<div class="stats section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="single-number text-center">
          <i class="fa-solid fa-location-dot"></i>
          <h2>lacation</h2>
          <p>Sidi Alouane,Mahdia <br>
            Tunisia, 5190</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="single-number text-center">
          <i class="fa-solid fa-phone"></i>
          <h2>Phone Number</h2>
          <p>(+216)93 249 635 <br> (219)70 710 100
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="single-number text-center">
          <i class="fa-solid fa-clock"></i>
          <h2>openning Time</h2>
          <p>Mon-sat 09:00AM - 08:00PM
            <br> Sun 09:00AM - 04:00PM
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="single-number text-center">
          <i class="fa-solid fa-users"></i>
          <h2>5000+</h2>
          <p>Happy Customers</p>
        </div>
      </div>
    </div>
  </div>
</div>


<!--services-->

<div class="services section-padding" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-header text-center">
          <h2>Our <span> Services</span></h2>
          <p>Exprience the best beauty services  </p>          
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="single-service text-center">
          <i class=></i>
          <img src="img/makeup1.jpg" alt=""  width="350" height="350">
          <h2>Make-up & Nails</h2>
          <p>We offer professional makeup and nails services with a look customized just for you.</p>
          <a href="service.php">View details</a>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="single-service text-center">
          <i class=></i>
          <img src="img/hair.jpg" alt=""  width="350" height="350">
          <h2>Hair & Treatments</h2>
          <p>Hydrate, protect and revive your hair by using our best styling products. Curl and create volume.</p>
          <a href="service.php">View details</a>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="single-service text-center">
          <i class=></i>
          <img src="img/massage.jpg" alt=""  width="350" height="350">
          <h2>Massage & Wellness</h2>
          <p>Peaceful spa treatments for deep relaxation of the mind, reducing stress and life changing services.</p>
          <a href="service.php">View details</a>
        </div>
      </div>


    </div>
  </div>
</div>



<!-- Estheticians-->

<div class="trainer section-padding " id="trainer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-header text-center">
          <h2>Our<span> Estheticians</span></h2>
          <p>becauce you need time for yourself</p>          
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
       <div class="single-trainer text-center">
        <div class="card">
          <img src="img/es1.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Maha Bouabdi</h5>
            <p class="card-text">Beauty Advisor, Spa Manager, Laser Technician</p>
           </div>
        </div>
       </div>
      </div>
      <div class="col-lg-4">
        <div class="single-trainer text-center">
         <div class="card">
           <img src="img/es2.jpg" alt="" class="card-img-top">
           <div class="card-body">
             <h5 class="card-title">Imen Berriri</h5>
             <p class="card-text">Makeup Artist or Medical Aesthetician</p>
          
           </div>
         </div>
        </div>
       </div>
       <div class="col-lg-4">
        <div class="single-trainer text-center">
         <div class="card">
           <img src="img/es3.jpg" alt="" class="card-img-top">
           <div class="card-body">
             <h5 class="card-title">Amira Rouabeh</h5>
             <p class="card-text">Medical Aesthetician and Spa Manager</p>
         
           </div>
         </div>
        </div>
       </div>
    </div>
  </div>
</div>


<!--pack-->

<div class="blog section-padding" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-header text-center">
          <h2>Our<span> Pack</span></h2>
          <p>Best Prices in Town</p>          
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4"> 
        <div class="single-blog text-center">
          <div class="card">
            <img src="img/blog1.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Woman’s Haircut </h5>
              <p class="card-text">50$</p>
           <a href="#">discover More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4"> 
        <div class="single-blog text-center">
          <div class="card">
            <img src="img/blog2.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Treat Body as temple </h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum cumque iure sunt similique eius nihil</p>
           <a href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4"> 
        <div class="single-blog text-center">
          <div class="card">
            <img src="img/blog3.jpg" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Treat Body as temple </h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum cumque iure sunt similique eius nihil</p>
           <a href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>


<!-- quote -->
<div class="quote section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="single-quote text-center">
          <p>
            <i class="fa-solid fa-quote-left"></i>
            Beauty is incomplete without self-care, for every moment dedicated to nurturing yourself adds to your radiance and allure.
            <i class="fa-solid fa-quote-right"></i>
            <h5> Elise Joan</h5>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- contact -->
<div class="contact section-padding" id="contact">
 <div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="section-header text-center">
        <h2>Contact <span>US</span></h2>
        <p>For More informations</p>          
      </div>
    </div>
  </div>  

  <div class="row">
    <div class="col-lg-5 col-sm-12">
      <div class="left-contact">
        <h3>Location:</h3>
        <p >5193,Sidi Alouane<br>Mahdia, Tunisia</p>
        <h3>Email:</h3>
        <p>bellaglow@gmail.com</p>
        <h3>Call Us</h3>
        <p>93249635</p>
      </div>
    </div>
<div class="col-lg-6 offest-lg-1 col-sm-12">
  <form action="index.php" method="POST">
  <label for="name" class="form-label">Name</label>
  <input type="text" class="form-control" id="name" name="name">
    
    <label for="email">Your Email</label> 
    <input type=" text" class="form-control" name="email"id="email">
    <label for="password" class="form-label">Password</label>
   <input type="password" class="form-control" id="password" name="password">
    <button class="btn" type="submit">Submit Form</button>
  </form>
</div>
  </div>
 </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="footer-content text-center">
          <p>All Right Reserved</p>
          <p class="socials">
           <i class="fa fa-pinterest"></i>
           <i class="fa fa-youtube"></i>
           <i class="fa fa-facebook"></i>
           <i class="fa fa-Instagram"></i>
            <br><br>    
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
