<?php
   if (isset($_POST) && $_POST){
    include_once("connect.php");
    $sql = "SELECT `email`,'password' FROM `contact2  ` WHERE `email` = '" . $_POST['email']. "' and `password` = '" . $_POST['password'] . "';";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) ==6){
        echo "User not found: Check your credentail";
    }else{
        $user = mysqli_fetch_assoc($result);

        session_start();
        // Set session variables
       
        $_SESSION["email"] = $user['email'];
        $_SESSION["password"] = $user['password'];
       

        header('home.php');
        die;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>


  <!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-12">
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
              <a class="nav-link" href="#Blog">Pack</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="login.php"> login</a>
            </li>

        </div>
      </div>
    </nav>

    <title>login</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css"
    />
   <link rel="stylesheet" href="stylee.css">
  </head>
  <body>

  <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-8 col-lg-5 d-none d-md-block">
              <img src="loginn.jpg"
                alt="login form" class="img-fluid" width="700px" height="900px"  />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form  action="login.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                   <h5> <span class="text-danger background">LogIn</span></h5>
                  </div> <br>

                  <div class="form-outline mb-4">
                   
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" name="email" class="form-control"/>
                  </div>

                  <div class="form-outline mb-4">
                   
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" class="form-control"  />
                  </div><br><br>

                  <div class="pt-1 mb-4">
                  <button class="btn btn-class" type="submit" >Login</button>
                  </div>

    
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></script>
 
   
  </body>
</html>
