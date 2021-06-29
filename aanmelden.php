<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Aanmelden</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css?h=ba16343c386b2f2e278c8ef223e3ab4b">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/fonts/fontawesome5-overrides.min.css?h=b077f3d66f4dd45a76529f02462151f3">

    <style>

    </style>
</head>

<body class="bg-gradient-primary" style="background-image: url(&quot;assets2/img/dogs/&quot;);">

<div class="container">

    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets2/img/dogs/blue-sea-foaming-water.jpg&quot;);"></div>
                </div>

                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Meld je aan!</h4>
                        </div>

                        <form method="post" action="aanmelden_verwerk.php" class="user" >
                            <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Voornaam" name="naam" required></div>
                            <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Achternaam" name="achternaam" required></div>
                            </div>

                            <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" name="email" required></div>

                            <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Wachtwoord" name="wachtwoord" required></div>
                            </div>

                            <button class="btn btn-primary btn-block text-white btn-user" name="submit" type="submit" style="background: rgb(23,86,129);">Aanmelden</button>

                            <hr>
                            <a class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i class="fab fa-google"></i>&nbsp; Meld aan met Google</a>
                            <a class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Meld aan met Facebook</a>
                            <hr>
                        </form>

                            <div class="text-center"><a class="small" href="#">Wachtwoord vergeten?</a></div>
                            <div class="text-center"><a class="small" href="logIn.php">Heb je al een account? Log in!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/script.min.js?h=823eb1733a0a81fa385a52d2e8e60900"></script>
</body>

</html>
