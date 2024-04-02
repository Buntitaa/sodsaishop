<h3>
  <center>
    <?php
    include('connectdb.php');
    session_start();  //ถ้าต้องการล็อกหน้าไม่ให้เข้า หากไม่เข้าสู่ระบบ
    echo $_SESSION['uname']; //ให้โชว์ชื่อผู้ที่เข้าระบบ
    ?>
</h3>
</center>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าหลัก</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: white;
    }

    .navbar {
      background: rgb(237, 150, 188);
      background: radial-gradient(circle, rgba(237, 150, 188, 1) 0%, rgba(148, 151, 233, 1) 100%);
      border-top: 2px solid black;
      /* Add a 2px blue border at the top */
      border-bottom: 2px solid black;
      /* Add a 2px blue border at the bottom */
    }

    .navbar a.navbar-brand,
    .navbar a.nav-link {
      color: black;
      /* Set text color to black */
    }

    .card:hover {
      /* Add your hover styles here */
      background-color: #ffafcc;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      transform: scale(1.05);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;

    }

    .card {
      margin-bottom: 20px;
      text-shadow: none;
    }

    /* Custom default button */
    .btn-light,
    .btn-light:hover,
    .btn-light:focus {
      color: #333;
      text-shadow: none;
      /* Prevent inheritance from `body` */
    }


    /*
 * Base structure
 */

    body {
      text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
      box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }

    .cover-container {
      max-width: 42em;
    }


    /*
 * Header
 */

    .nav-masthead .nav-link {
      color: rgba(255, 255, 255, .5);
      border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="images/logo.jpg" width="60"> <span>
        <a class="navbar-brand m-4" href="#">Sodsaishop</a></span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-4 mb-lg-0">
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0 m-4 " aria-current="page" href="index.php">Home</a>
            <a class="nav-link fw-bold py-1 px-0 m-4" href="home.php">Brand</a>

            <a class="nav-link fw-bold py-1 px-0 m-4" aria-current="page" href="contact.php">Contact</a>
            </li>

        </ul>
        <ul class="navbar-nav ms-auto"> <!-- This is for the right-aligned items -->
          <a class="nav-link fw-bold py-1 px-0 m-2" aria-current="page" href="login2.php">สำหรับ Admin</a>

          <!-- Add the shopping cart icon here -->
          <li class="nav-item m-2">
            <a class="nav-link" href="basket.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
              </svg> <!-- You may need to add the correct icon class -->
            </a>
          </li>
          <li class="nav-item dropdown m-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="login.php">เข้าสู่ระบบ</a></li>
              <li><a class="dropdown-item" href="register.php">สมัครสมาชิก</a></li>

            </ul>
          </li>
        </ul>
  </nav>
  </div>
  </div>
  </nav>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/p1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/p2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/p3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="home.php" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="home.php?pt=1" class="nav-link px-2 text-body-secondary">Adidas</a></li>
        <li class="nav-item"><a href="home.php?pt=2" class="nav-link px-2 text-body-secondary">Nike</a></li>
        <li class="nav-item"><a href="home.php?pt=3" class="nav-link px-2 text-body-secondary">Chompion</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-body-secondary">Contact</a></li>
      </ul>
      <p class="text-center text-body-secondary">© Sodsaishop</p>
    </footer>
  </div>
  </div>
  </footer>

  <!-- Your content goes here -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>