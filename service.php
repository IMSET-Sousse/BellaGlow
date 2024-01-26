<?php 
  include_once("connect.php");
$search = '';
if (isset($_GET) && $_GET && $_GET['search']){
    $search = $_GET['search'];
    $sql = "SELECT * FROM centers WHERE titre LIKE '%" . $_GET['search'] . "%' or description LIKE '%" . $_GET['search'] . "%';";
}else {
    $sql = "SELECT * FROM centers";
}

  $result = $conn->query($sql);
  $conn->close();
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
              <a class="nav-link" href="index.php">Home</a>
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
              <a class="nav-link" href="login.php"> login</a>
            </li>
            

        </div>
        <form>
        <input type="text" name="search" id="search" placeholder="Search" value="<?= $search ?>">
        <input type="submit" value="Search"/>
    </form>
      </div>
    </nav>
 



    
<!--about-->


<div class="about section-padding" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-header text-center">
         <h2>  Welcome to  <span> BellaGlow</span></h2>
          <p> space for everyone</p>
        </div>
      </div>
    </div>
 
    <div class="row">
    <div class="col-md-4 mx-auto">
            <video controls class="img-fluid">
                <source src="Beauty Tutorial.mp4" type="video/mp4" width="320" height="240">
                Votre navigateur ne prend pas en charge la lecture de la vidéo.
            </video>
        </div>
     
      <div class="col-lg-5 col-sm-12">
        <div class="about-text"> <br><br> <br><br> 
        <h4>Welcome To BellaGlow</h4><br>
        <h2>better life with perfect body</h2>
          <p>our  Center is founded on the belief that beauty should be accessible to all,
            Peaceful spa treatments for deep relaxation of the mind, reducing stress and life changing services. Whether you want to feel better in yourself, are attending a work or family event or maybe have a wedding come around, we have the treatments you need to look your best and feel amazing
          </p><br>
          <a href="#">discover  More</a>
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
      <?php 
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
      <div class="col-lg-4">
        <div class="single-service text-center">
          <i class=></i>
          <img src="<?php echo $row["img"] ?>" alt=""  width="350" height="350">
          <h2><?php echo $row["titre"] ?></h2>
          <p><?php echo $row["description"] ?>.</p>
          <a href="service.php">View details</a> 
        </div>
      </div>
      <?php }
            } else {
                echo "0 results";
            }
        ?>
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
            <h5 class="card-title">Rania Fkih</h5>
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


<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: pink;

}
.h2{
  size: 25px;
 text-align: center;
}
</style>
</head>
<body>

<h2> Rating </h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

<br><br>

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
