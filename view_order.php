<h3><center>
<?php
session_start();  //ถ้าต้องการล็อกหน้าไม่ให้เข้า หากไม่เข้าสู่ระบบ
if (empty($_SESSION['aid'])){  //ถ้า session ชื่อนี้มันว่างเปล่า
  echo "กรุณาเข้าสู่ระบบ";
  exit;
}
?></h3></center>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>รายการใบสั่งซื้อ</title>
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
            background-color: #007bff;
            color: #fff;
        }

        /* หัวข้อตารางแต่ละแถว */
        tr:nth-child(odd) {
            background: rgb(152, 117, 242);
            background: radial-gradient(circle, rgba(152, 117, 242, 1) 0%, rgba(232, 130, 195, 1) 100%);
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




            <h2>รายการใบสั่งซื้อ</h2>
            <table width="832" border="1" cellspacing="1" cellpadding="1">
                <tr>
                    <td width="153">รายละเอียดสินค้า</td>
                    <td width="153">เลขที่ใบสั่งซื้อ</td>
                    <td width="193">วันที่</td>
                    <td width="150">ราคารวม</td>
                    <td width="155">ลูกค้า</td>
                    <td width="155">ที่อยู่จัดส่ง</td>
                    <td width="155">ยกเลิกคำสั่งซื้อ</td>
                </tr>

                <?php
                include("connectdb.php");
                $sql = "select  *  from  `orders` left join `users` on `orders`.`m_id`=`users`.`u_id` order by `orders`.`oid`  desc  ";
                $rs = mysqli_query($conn, $sql); //ผลลัพธ์
                while ($data = mysqli_fetch_array($rs)) {
                ?>

                    <tr>
                        <td><a href="view_order_detail.php?a=<?= $data['oid']; ?>">ดูรายละเอียด</a></td>
                        <td><?= $data['oid']; ?></td>
                        <td><?= $data['odate']; ?></td>
                        <td><?= number_format($data['ototal'], 0); ?></td>
                        <td><?= $data['m_id']; ?> : <?= $data['u_fullname']; ?> </td>
                        <td><?= $data['u_address']; ?></td>
                        <td><a href="delete2.php?id=<?= $data['oid']; ?>&ext"><img src="images/trash.jpg" width="30" onClick="return confirm('ยืนยันการลบ?');"></a></td>
                    </tr>

                <?php  }  ?>

            </table>

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