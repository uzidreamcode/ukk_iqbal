<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Agroxa - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Background -->
    <div class="account-pages"></div>
    <!-- Begin page -->
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="30" alt="logo"></a>
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Selamat datang!</h4>
                    <p class="text-muted text-center">Silahkan Login ke Peduli Diri.</p>

                    <form class="form-horizontal m-t-30" method="post">

                        <div class="form-group">
                            <label for="username">NIK</label>
                            <input type="number" class="form-control" name="nik" id="username" >
                        </div>

                        <div class="form-group">
                            <label for="userpassword">Kata Sandi</label>
                            <input name="password" type="password" class="form-control" id="userpassword">
                        </div>

                        <div class="form-group row m-t-20">
                            
                            <div class="col-12 text-right">
                                <button name="submit" class="btn btn-primary w-md waves-effect waves-light" type="submit">Masuk</button>
                            </div>
                        </div>

                        <div style="margin-left: 10px" class="form-group m-t-10 mb-0 row">
                            <p class="text-black-50">Belum punya akun? <a href="daftar.php" class="text-black"> Daftar Disini </a> </p>
                        </div>
                    </form>
                    <?php
                    include 'koneksi.php';
                    if (isset($_POST['submit'])) 
                    {
                     $nik=$_POST['nik'];
                     $password=md5($_POST['password']);

                     $ambil=$koneksi->query("SELECT * FROM user WHERE nik='$nik' AND password='$password'");
                     $benar =$ambil->num_rows;
                     if ($benar > 0) 
                     {

                        echo "<script>alert ('Selamat datang')</script>";
                        echo "<script>location='index.php'</script>";
                        $_SESSION['admin']=$nik;
                    }
                    else
                    {
                        echo "<script>alert ('Username atau password salah')</script>"; 
                    }
                }
                ?>
            </div>

        </div>
    </div>



</div>

<!-- END wrapper -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/waves.min.js"></script>

<script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>