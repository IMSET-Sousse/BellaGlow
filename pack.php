
<?php 
  include_once("connect.php");
$search = '';
if (isset($_GET) && $_GET && $_GET['search']){
    $search = $_GET['search'];
    $sql = "SELECT * FROM pack WHERE titre LIKE '%" . $_GET['search'] . "%' or prix LIKE '%" . $_GET['search'] . "%';";
}else {
    $sql = "SELECT * FROM pack";
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
              <a class="nav-link" href="pack.php">Home</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#Blog">Pack</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="login.php"> login</a>
            </li>
            <form>
        <input type="text" name="search" id="search" placeholder="Search" value="<?= $search ?>">
        <input type="submit" value="Search"/>
    </form>
        </div>
      </div>
    </nav>
 





<!--about-->


<div class="about section-padding" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        
      </div>
    </div>
 
    <div class="row">
      <div class="col-lg-5 col-sm-12">
        <div class="ab-img">
          <img src="img\bt.jpg" alt=""  width="350px" height="550px"> 
        </div>
        </div>
     

      <div class="col-lg-5 col-sm-12">
        <div class="about-text">
        <h3><span class=" text-danger background ">Welcome To BellaGlow</span></h3>
        <h2>we offer to you a special pack</h2><br>
          <p>our  Center is founded on the belief that beauty should be accessible to all,
            Peaceful spa treatments for deep relaxation of the mind, reducing stress and life changing services. Whether you want to feel better in yourself, are attending a work or family event or maybe have a wedding come around, we have the treatments you need to look your best and feel amazing
          </p><br>
          <a href="#">discover  More</a>
        </div>
    </div>
  </div>
</div>
</div>


<!--stats-->






<!--pack-->

<div class="blog section-padding" id="blog">
  <div class="container">
    <div class="row">
 
      <div class="col-lg-12">
        <div class="section-header text-center">
          <h2>Our<span> Pack</span></h2>
          <p>Best Prices in Town</p>   
          <h1></h1>       
        </div>
    </div>
    <?php 
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
      <div class="col-lg-3"> 
        <div class="single-blog text-center">
 
          <div class="card">
            <img src="<?php echo $row["img"] ?>" alt="" class="card-img-top" width="100px" height="400px">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["titre"] ?> </h5>
              <p class="card-text"><?php echo $row["prix"] ?></p>
           <a href="#">discover More</a>
            </div>
          </div>
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




<!-- contact -->
<div class="contact section-padding" id="contact">
 <div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="section-header text-center">
        <h2>Reserve <span>Now</span></h2>
        <p>it's time for yoursself </p>          
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
  <form  action="resv.php" method="POST">
  <label for="first name" class="form-label">first name</label>
  <input type="text" class="form-control" id="first name" name="first name">
    
    <label for="last name">last name</label> 
    <input type=" text" class="form-control" name="last name"id="last name">
    <label for="massage" class="form-label">massage</label>
   <input type="massage" class="form-control" id="massage" name="massage">
   <label for="phone" class="form-label">Phone</label>
   <input type="number" class="form-control" id="Phone" name="Phone">
    <button class="btn" type="submit">Reserve nom</button>
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
