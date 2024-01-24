<?php
   if (isset($_POST) && $_POST){
    include_once("connect.php");
    $sql = "SELECT `email`,'password' FROM `contact2  ` WHERE `email` = '" . $_POST['email']. "' and `password` = '" . $_POST['password'] . "';";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) == 0){
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
    <meta charset="UTF-8" />
    <title>login</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
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
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="loginn.jpg"
                alt="login form" class="img-fluid" width="500px" height="500px"  />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form  action="login.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0" text="center">Login</span>
                  </div> <br><br> <br>


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
