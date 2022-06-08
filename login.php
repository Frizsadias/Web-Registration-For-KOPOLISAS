<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login KOPOLISAS</title>
    <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="assets/images/kopolisas.png" />
    <style>
        body{
            background-image: url("assets/images/background.png");
            background-repeat: no-repeat;
            background-size:cover
        }
        img{
            max-width: 150px;
            margin-bottom: 13px;
        }
        .mr9{
            margin: 75px auto;
        }
        .round{
            border-radius: 30px;
        }
        .alert-login{
            margin-bottom: 15px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-8 mr9">
                <form action="cek-login.php" method="POST" class="text-center">
                    <h2>Welcome To Koperasi POLISAS Kuantan Berhad</h2>
                    <img src="assets/images/kopolisas.png">
                    <hr>
                    <?php 
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan']=="gagal"){
                            echo "<div class='alert-login'>Your username or password is incorrect. Please try again.</div>";
                        }
                        if($_GET['pesan']=="logout"){
                            echo "<div class='alert-login'>Log out successfully!</div>";
                        }
                        if($_GET['pesan']=="belum_login"){
                            echo "<div class='alert-login'>You have to login first!</div>";
                        }
                    }
                    ?>
                    <div class="mb-3">
                        <input type="text" class="form-control round" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control round" name="password" placeholder="Password">
                    </div>
                    <button class="w-100 btn btn btn-primary round" type="submit">Log In</button>
                    <br><br>
                    <p>Don't have an account yet? Please sign up.</p>
                    <a href="form_signup.php">Sign Up</a>
                    <p class="mt-5 mb-3 text-muted">&copy; KOPOLISAS - 2022</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>