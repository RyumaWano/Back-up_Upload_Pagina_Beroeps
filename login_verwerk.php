<?php
//Require de config bestand
require_once 'config.inc.php';

//lees alle formuliervelden
$username = $_POST['username'];
$password = $_POST['password'];
$submit   = $_POST['submit'];

//Recaptcha url
$response = $_POST["g-recaptcha-response"];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6LftT-EZAAAAAIFXWPYB4NyLaHLdTsomnqeQswW_',
    'response' => $_POST["g-recaptcha-response"]
);
$options = array(
    'http' => array (
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);

if ($captcha_success->success==false) {
    echo "<p>Je bent een robot, ga weg!!</p>";
} else if ($captcha_success->success==true) {
    echo "<p>Welkom <b>$username.</b> </p>";
}


//controleer of alle formuliervelden waren ingevuld
if (strlen($username) > 0 && strlen($password) > 0 && strlen($response) > 0 )
{
    //versleutel het wachtwoord
//    $password = sha1($password);

    //maak de controle-query
    $query = "SELECT * FROM upload_users WHERE username = '$username' AND password = '$password'";


    //voer de query uit
    $result = mysqli_query($mysqli, $query);

    //Controleer of de login correct was
    if (mysqli_num_rows($result) == 1)
    {
        //login correct start de sessie
        session_start();

        //sla de username op in de sessie
        $_SESSION['username'] = $username;


        //stuur door naar homepage
        header("Location:index.html");
    } else{
        //login incorrect, terug naar het login formulier
        header("Location:login.php");
        exit;
    }
} else{
    echo "Niet alle velden zijn ingevuld!";
    exit;
}

?>
