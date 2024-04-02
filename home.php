<h3><center>
<?php
include ('connectdb.php');
session_start();  //ถ้าต้องการล็อกหน้าไม่ให้เข้า หากไม่เข้าสู่ระบบ
  echo $_SESSION['uname']; //ให้โชว์ชื่อผู้ที่เข้าระบบ
?></h3></center>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้ารายการสินค้า</title>
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
        /* Style for the footer container */
.container {
  background-color: #f4f4f4;
  padding: 20px;
}

/* Style for the columns within the row */
.col-6 {
  padding: 15px;
}

/* Style for the Section headings */
h5 {
  font-size: 18px;
  margin-bottom: 10px;
  color: #333;
}

/* Style for the navigation links */
.nav-item {
  list-style: none;
}

.nav-link {
  color: #666;
  text-decoration: none;
}

/* Style for the newsletter form */
form {
  margin-top: 20px;
}

/* Style for the newsletter heading and description */
form h5 {
  font-size: 18px;
  margin-bottom: 10px;
  color: #333;
}

form p {
  color: #666;
}

/* Style for the input field and subscribe button */
.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: #0056b3;
}

/* Style for the bottom border */
.border-top {
  border-top: 1px solid #ddd;
  margin-top: 20px;
}

/* Style for the copyright text and social media links */
p {
  color: #666;
}

.list-unstyled {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.link-body-emphasis {
  color: #007bff;
  text-decoration: none;
  font-size: 20px;
}

.link-body-emphasis:hover {
  color: #0056b3;
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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link fw-bold py-1 px-0 m-4 " aria-current="page" href="index.php">Home</a>
                    
                   
                    <?php
                    $sql2 = "select  *  from category ";
                    $rs2 = mysqli_query($conn, $sql2);
                    while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) {
                    ?>

                                <a href="home.php?pt=<?= $data2['c_id']; ?>" class="nav-link fw-bold py-1 px-0 m-4"><?= $data2['c_name']; ?></a>
                                
                            <?php } ?>
                            
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

    

    <!-- Card -->
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <form class="form-inline" method="post" action="home.php">
                <fieldset>
                    <!-- Text input-->
                    <center>
                        <div class="form-group">
                            <div class="col-md-4">
                                <input name="kw" type="text" placeholder="กรอกคำค้น" class="form-control input-md"><br>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div iv class="col-md-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-success">ค้นหา</button>
                            </div>
                        </div>
                    </center>
                </fieldset>
            </form>

            <div class="row cols md-4 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                @$kw = $_POST['kw'];
                @$pt = $_GET['pt'];
                if (isset($_GET['pt'])) {
                    $s = "and (p_type = '$pt')";
                } else {
                    $s = "";
                }
                $sql = "select * from products where ( p_name like '%$kw%' or p_detail like '%$kw%' ) $s ";
                $rs = mysqli_query($conn, $sql);
                $i = 0;
                while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                    $i++;
                    if (($i % 3) == 1) {
                        echo "<div class='row' align='center' style='width:100%;'>";
                    }
                ?>
                    <div class="card m-3" style="width: 20rem;">
                    
                        <img src="images/<?= $data['p_id']; ?>.<?= $data['p_picture']; ?>" class="card-img-top" onClick="window.location='detail.php?id=<?= $data['p_id']; ?>';">
                        <div class="card-body">
                            <h5 class="card-title" onClick="window.location='detail.php?id=<?= $data['p_id']; ?>';"> <?= $data['p_name']; ?> <br> ราคา <?= $data['p_price']; ?> บาท </p>
                            </h5>
                            <a href="basket.php?id=<?= $data['p_id']; ?>" class="btn btn-outline-danger">เพิ่มลงรถเข็น</a>
                        </div>
                    </div>
                <?php
                    if (($i % 3) == 0) {
                        echo "</div>";
                    }
                } // end while

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
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
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</html>