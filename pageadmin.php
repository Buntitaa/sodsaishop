<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

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
            background-color: #f5f5f5;
        }

        .container {
            margin-top: 20px;
        }

        /* หัวข้อตารางรายการคำสั่งซื้อ  */
        h2 {
            text-align: center;
            background-color: #a3c4f3;
            color: #582f0e;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ccc;
            background-color: #ffcfd2;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        /* หัวข้อตารางแต่ละแถว */
        tr:nth-child(odd) {
            background-color: #f1c0e8;

        }

        th {
            background-color: #f2a65a;
            color: #fff;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        a img {
            width: 30px;
        }

        .navbar {
            background-color: #f08080;
        }

        .navbar img {
            max-width: 70px;
            height: auto;
        }

        .navbar-toggler-icon {
            background-color: #f08080;
        }

        .navbar-nav .nav-link {
            color: #f08080 !important;
        }

        .navbar-nav .nav-link:hover {
            background-color: #f08080;
            color: #007bff !important;
        }

        .dropdown-menu {
            background-color: #007bff;
        }

        .dropdown-item {
            color: white !important;
            background-color: #ff9f1c;
        }

        .dropdown-item:hover {
            background-color: white;
            color: #ff9f1c !important;
        }

        .sidebar {
            background-color: #ffcfd2;
        }

        /* สีตัวอักษร คำว่า Admin */
        .sidebar-brand {
            color: #e85d04 !important;
        }

        .sidebar-divider {
            background-color: white !important;
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

        .sticky-footer {
            background-color: white !important;
        }

        .copyright {
            color: #007bff !important;
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
                        <a href="insert.php" class="btn btn-warning">เพิ่มสินค้า</a>
                    </li>
                </ul>
                <form method="post" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="kw" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" name="Submit" type="submit">ค้นหา</button>
                </form>
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
            <h2>ข้อมูลสินค้า</h2>
            <div class="container">
                <table width="832" border="1" cellspacing="1" cellpadding="1">
                    <tr>
                        <td width="7%">รหัสสินค้า</td>
                        <td width="20%">รูปภาพ</td>
                        <td width="15%">ชื่อสินค้า</td>
                        <td width="20%">รายละเอียด</td>
                        <td width="10%">ราคา</td>
                        <td width="10%">ประเภทสินค้า</td>
                        <td width="10%">แก้ไขข้อมูลสินค้า</td>
                        <td width="10%">ลบข้อมูลสินค้า</td>
                    </tr>
                    <?php
                    include("connectdb.php");
                    @$kw = $_POST['kw']; //การเชื่อมเชื่อมต่อฐานข้อมูล include เป็นคำสั่งรวมเอาไฟล์ไว้ในนี้
                    $sql = "SELECT * FROM `products` WHERE (`p_name` LIKE '%{$kw}%' OR `p_detail` LIKE '%{$kw}%')"; //sql การค้นหาข้อมูลโดยดึงจากฐานข้อมูล
                    $rs = mysqli_query($conn, $sql); //ผลลัพธ์
                    while ($data = mysqli_fetch_array($rs)) {
                    ?>

                        <tr>
                            <td><?= $data['p_id']; ?></td>
                            <td><img src="images/<?= $data['p_id']; ?>.<?= $data['p_picture']; ?>"></td>
                            <td>
                                <center><?= $data['p_name']; ?></center>
                            </td>
                            <td>
                                <center><?= $data['p_detail']; ?></center>
                            </td>
                            <td>
                                <center><?= $data['p_price']; ?></center>
                            </td>
                            <td>
                                <center><?= $data['p_type']; ?></center>
                            </td>
                            <td><a href="update.php?id=<?= $data['p_id']; ?>"><img src="images/edit2.jpg" width="30"></a></td>
                            <td><a href="delete.php?id=<?= $data['p_id']; ?>&ext<?= $data['p_picture']; ?>"><img src="images/trash.jpg" width="30" onClick="return confirm('ยืนยันการลบ?');"></a></td>
                        </tr>
                    <?php }
                    mysqli_close($conn);    //ปิดการเชื่อมต่อฐานข้อมูล
                    ?>

                </table>
            </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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