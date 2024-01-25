
<?php
// Inclure le fichier de connexion à la base de données
include 'connect.php';

// Processus d'ajout d'un nouveau produit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $img = $_POST['img'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
  

    $query = "INSERT INTO centers (img, titre, description) VALUES ('$img', '$titre', '$description')";
    mysqli_query($conn, $query);
}

// Processus de suppression d'un produit
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM centers WHERE id = '$delete_id'";
    mysqli_query($conn, $delete_query);
}

// Récupérer et afficher la liste des produits
$result = mysqli_query($conn, "SELECT * FROM centers");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>BelleGlow</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="assets\img\logo.jpg" rel="icon" />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="indexx.php" class="logo d-flex align-items-center">
          <img src="assets\img\logo.jpg" alt="" />
          <span class="d-none d-lg-block">BelleGlow</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

      <div class="search-bar">
        <form
          class="search-form d-flex align-items-center"
          method="POST"
          action="#"
        >
          <input
            type="text"
            name="query"
            placeholder="Search"
            title="Enter search keyword"
          />
          <button type="submit" title="Search">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number"></span>
            </a>

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications"
            >
              <li class="dropdown-header">You have new notifications</li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">1</span> </a
            ><!-- End Messages Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages"
            >
              <li class="dropdown-header">
                You have 1 new messages
                <a href="#"
                  ><span class="badge rounded-pill bg-primary p-2 ms-2"></span
                ></a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li class="message-item">
                <a href="#">
                  <img
                    src="assets/img/messages-1.jpg"
                    alt=""
                    class="rounded-circle"
                  />
                  <div>
                    <h4>Houda Imen</h4>
                    <p>bonjour</p>
                    <p>4</p>
                  </div>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown pe-3">
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
              <img
                src="assets/img/profile-img.jpg"
                alt="Profile"
                class="rounded-circle"
              />
              <span class="d-none d-md-block dropdown-toggle ps-2">Admine</span>
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
                <h6>Amira Imen</h6>
                <span>Esthetician</span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="users-profile.html"
                >
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link" href="indexx.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#components-nav"
            data-bs-toggle="collapse"
            href="catego.php"
          >
            <i class="bi bi-menu-button-wide"></i><span>Categorie</span>
          </a>
        </li>

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#forms-nav"
            data-bs-toggle="collapse"
            href="serv.php"
          >
            <i class="bi bi-journal-text"></i><span>Service</span>
          </a>
        </li>

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#tables-nav"
            data-bs-toggle="collapse"
            href="userr.php"
          >
            <i class="bi bi-layout-text-window-reverse"></i><span>User</span>
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#tables-nav"
            data-bs-toggle="collapse"
            href="userr.php"
          >
            <i class="bi bi-gem"></i><span>Contact</span>
          </a>
        </li>
      </ul>
    </aside>
    <!-- End Sidebar-->

    <main class="py-6 bg-surface-secondary">
          <div class="container-fluid">
            <!-- Card stats -->
            
           
            <div class="card shadow border-0 mb-7">
              <div class="card-header">
                <h5 class="mb-0">Pack</h5>
              </div>
        <table class="table">
            <thead>
                <tr>
                <form action="" method="post">
           <th>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="text" class="form-control" name="text" required>
            </div>
            </th>
            <th>
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" name="titre" required>
            </div>
            </th>
            <th>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" required>
            </div>
             </th>
             <th>
             <div class="form-group">
             <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
            </th>
        </form>

              
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                  
                    echo "<td><img src='{$row['img']}' alt='Product Image' style='max-width: 100px;'></td>";
                    echo "<td>{$row['titre']}</td>";
                    echo "<td>{$row['description']}</td>";
                    echo "<td>";
                    echo "<a href='edit_catego.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>";
                    echo "<a href='catego.php?delete_id={$row['id']}' class='btn btn-danger btn-sm ml-1'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    // Fermer la connexion à la base de données
    mysqli_close($conn);
    ?>
          </div>
        </main>
      </div>
    </div>

        </main>
    <!-- End #main -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>
