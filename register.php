<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style3.css">
</head>

<body>
    <center>
        <div class="col-md-6 col-lg-4 py-3">
            <div class="login-wrap py-5 card-body text-center">
                <div class="img d-flex align-items-center justify-content-center"><img src="images/logo.jpg" width="100"></div>
                <p class="text-center">Please register as a member before logging in</p>
                <form action="regsuc.php" method="post" class="login-form">
                <?php if (isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?></div>
                    <?php } ?>
                    <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                        <input type="text" name="fullname" class="form-control" placeholder="Fullname" required autofocus>
                    </div>

                    <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></div>
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                        <input type="password" name="pass1" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                        <input type="password" name="pass2" class="form-control" placeholder="Confirm Password" required>
                    </div>

                    <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
                        <input type="tel" name="tel" class="form-control" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-map marker"></span></div>
                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                    </div>
                    <div class="form-group d-md-flex">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="Submit" class="btn form-control btn-primary rounded submit px-3">Sing up</button>
                    </div>
                </form>
                <div class="w-100 text-center mt-4 text">
                    <p class="mb-0">หากมีบัญชีอยู่แล้ว คลิกที่นี้</p>
                    <a href="login.php">Sign in</a>
                </div>
            </div>
        </div>
    </center>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>