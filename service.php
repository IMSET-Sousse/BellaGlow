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
              <a class="nav-link" href="#Contact">Contact</a>
            </li>
            

        </div>
        <form>
        <input type="text" name="search" id="search" placeholder="Search" value="<?= $search ?>">
        <input type="submit" value="Search"/>
    </form>
      </div>
    </nav>
 


<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\service.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img\service1.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img\service3.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

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



<!--services-->

<div class="services section-padding" id="services">

<div class="container">
<div class="row">
<?php 
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
      <div class="col-lg-12">
   
        <div class="section-header text-center">
          <h2>Our <span> Services</span></h2>
          <p>Exprience the best beauty services  </p>          
        </div>
       
      </div>
     
      
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
