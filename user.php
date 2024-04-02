<h3>
    <center>
        <?php
        session_start();  //ถ้าต้องการล็อกหน้าไม่ให้เข้า หากไม่เข้าสู่ระบบ
        if (empty($_SESSION['aid'])) {  //ถ้า session ชื่อนี้มันว่างเปล่า
            echo "กรุณาเข้าสู่ระบบ";
            exit;
        }
        ?>
</h3>
</center>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* หัวข้อตารางรายการคำสั่งซื้อ  */
        h2 {
            text-align: center;
            background-color: #a3c4f3;
            color: #582f0e;
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #9d0208;
            color: #fff;
        }

        /* หัวข้อตารางแต่ละแถว */
        tr:nth-child(odd) {
            background: rgb(195, 153, 34);
            background: linear-gradient(0deg, rgba(195, 153, 34, 1) 0%, rgba(253, 51, 45, 1) 100%);
        }

        a {
            text-decoration: none;
            color: black;
        }

        /* สีตัวอักษร ของ Sidebar และ Navbar */
        .nav-item .nav-link {
            color: black !important;
        }

        /* สีของ hover ตัวอักษรทั้งหมด */
        .nav-item .nav-link:hover {
            background-color: white;
            color: #fb8b24 !important;
        }

        /* สีตัวอักษร คำว่า Admin */
        .sidebar-brand {
            color: #e85d04 !important;
        }
    </style>
</head>

<body id="page-top">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="images/logo.jpg" width="70">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                    </li>
                    <center>
                        <form method="post" class="d-flex" role="search">
                            <input class="form-control me-3" type="search" name="kw" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" name="Submit" type="submit">Search</button>
                        </form>
                    </center>
            </div>
        </div>
    </nav>
    <!-- End navbar -->
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="pageadmin.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>จัดข้อมูลสินค้า</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="view_order.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>รายการสั่งซื้อสินค้า</span></a>
            </li>



            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>จัดการข้อมูลสมาชิก</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>จัดการข้อมูลผู้ดูแลระบบ</span></a>
            </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="logout2.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>ออกจากระบบ</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- แก้ไขข้อมูล -->
            <h2>ข้อมูลสมาชิก</h2>

            <table width="832" border="1" cellspacing="1" cellpadding="1">
                <tr>

                    <td width=7%>รหัสสมาชิก</td>
                    <td width=15%>ชื่อสมาชิก</td>
                    <td width=20%>อีเมล</td>
                    <td width=10%>รหัสผ่าน</td>
                    <td width=10%>เบอร์โทรศัพท์</td>
                    <td width=10%>ที่อยู่</td>
                    <td width=10%>แก้ไขข้อมูลสมาชิก</td>
                    <td width=10%>ลบข้อมูลสมาชิก</td>
                </tr>
                <?php
                include("connectdb.php"); //การเชื่อมเชื่อมต่อฐานข้อมูล include เป็นคำสั่งรวมเอาไฟล์ไว้ในนี้
                @$kw = $_POST['kw']; //การเชื่อมเชื่อมต่อฐานข้อมูล include เป็นคำสั่งรวมเอาไฟล์ไว้ในนี้
                $sql = "SELECT * FROM `users` WHERE (`u_id` LIKE '%{$kw}%' OR `u_fullname` LIKE '%{$kw}%')"; //sql การค้นหาข้อมูลโดยดึงจากฐานข้อมูล
                $rs = mysqli_query($conn, $sql); //ผลลัพธ์
                while ($data = mysqli_fetch_array($rs)) {
                ?>
                    <tr>
                        <td>
                            <?= $data['u_id']; ?>
                        </td>
                        <td>
                            <center><?= $data['u_fullname']; ?></center>
                        </td>
                        <td>
                            <center><?= $data['u_email']; ?></center>
                        </td>
                        <td>
                            <center><?= $data['u_password']; ?></center>
                        </td>
                        <td>
                            <center><?= $data['u_tel']; ?></center>
                        </td>
                        <td>
                            <center><?= $data['u_address']; ?></center>
                        </td>
                        <td><a href="up.php?id=<?= $data['u_id']; ?>"><img src="images/edit2.jpg" width="30"></a></td>
                        <td><a href="de.php?id=<?= $data['u_id']; ?>&ext"><img src="images/trash.jpg" width="30" onClick="return confirm('ยืนยันการลบสมาชิก?');"></a></td>
                    </tr>
                    <?php
                    ?>
                <?php }
                mysqli_close($conn);    //ปิดการเชื่อมต่อฐานข้อมูล
                ?>
            </table>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- Bootstap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>

</html>