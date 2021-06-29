<?php

?>

<!--Start HTML-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Foto Upload Site</title>
    <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css?h=ba16343c386b2f2e278c8ef223e3ab4b">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets1/fonts/fontawesome5-overrides.min.css?h=b077f3d66f4dd45a76529f02462151f3">
<!--    Recaptcha link-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image" style="background-image: url(assets1/img/dogs/foto-selfie-app.jpg);"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Welkom terug!</h4>
                                </div>
                                <!--Form action-->
                                <form action="login_verwerk.php" method="post" enctype="multipart/form-data" class="user">
                                    <div class="form-group"><input class="form-control form-control-user" type="username" id="username" aria-describedby="emailHelp" placeholder="Gebruikersnaam" name="username"></div>
                                    <div class="form-group"><input class="form-control form-control-user" type="password" id="password" placeholder="Wachtwoord" name="password"></div>
                                    <div class="form-group">
                                        <!--Recaptcha div-->
                                        <div class="captcha_wrapper">
                                            <div class="g-recaptcha" data-sitekey="6LftT-EZAAAAAIFXWPYB4NyLaHLdTsomnqeQswW_"></div>
                                        </div>

                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Herinner mij</label></div>
                                        </div>
                                    </div><button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit" id="submit" value="Inloggen">Login</button>
                                    <hr><a class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i class="fab fa-google"></i>&nbsp; Login met Google</a><a class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Login met Facebook</a>
                                    <hr>
                                </form>
                                <div class="text-center"><a class="small" href="forgot-password.html">Wachtwoord vergeten?</a></div>
                                <div class="text-center"><a class="small" href="register.html">Creëer een Account!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets1/js/script.min.js?h=823eb1733a0a81fa385a52d2e8e60900"></script>
</body>

</html>