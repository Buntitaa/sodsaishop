<?php
	include("connectdb.php");
?>


<!doctype html>
<html lang="en">

<head>
    <title>Contact Form 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style1.css">

</head>

<body>
    <section class="ftco-section img bg-hero" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Contact</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="wrapper">
                        <div class="row no-gutters justify-content-between">
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5">
                                    <h3 class="mb-4">Contact us</h3>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span>Address:</span> 59/1 Sodsai Building, 10th Floor, Bangkok Province</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span>Phone:</span>+66 567 7895</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span>Email:</span>buntita@gmil.com</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span>Website</span> <a href="#">sodsaishop.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <center><h3 class="mb-4">ติดต่อเรา</h3></center>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method="post" action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email"  placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="tel" class="form-control" name="tel"  placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control"  cols="30" rows="5" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12"><center>
                                                <div class="form-group">
                                                    <input type="submit" name="Submit" value="ส่งข้อมูล" class="btn btn-outline-success">
                                                    <a href="home.php" class="btn btn-outline-primary m-5" style="text-align: right;">ย้อนกลับ</a>
                                                </div></center>
                                            </div>
                                        </div>
                                    </form>

                                    <?php
                                    if (isset($_POST['Submit'])) {
                                        $sql2 = "INSERT INTO `contact` (`co_id`, `co_name`, `co_email`, `co_tel`,`co_mess`) VALUES (NULL,'{$_POST['name']}','{$_POST['email']}', '{$_POST['tel']}','{$_POST['message']}');";
                                        mysqli_query($conn, $sql2) or die("ส่งข้อมูลการติดต่อไม่ได้");
                                        $idd = mysqli_insert_id($conn);

                                        echo "<script>";
                                        echo "alert('ส่งข้อมูลการติดต่อสำเร็จ');";  //แสดงกล่องข้อความในการเพิ่มสำเร็จ
                                        echo "window.location='contact.php';";  // เมื่อเพิ่มข้อมูลสินค้าสำเร็จจะไปที่หน้าแรก
                                        echo "</script>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>