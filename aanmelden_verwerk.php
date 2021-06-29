<?php
// databasekoppeling e.d.
require 'config.php';

// is het formulier verstuurd?
if (isset($_POST['submit'])) {
    //formuliervelden uitlezen
    $naam       = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $email      = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $query = "INSERT INTO upload_leden
                  VALUES (NULL, '$naam', '$achternaam', '$email', '$wachtwoord')";

    if (mysqli_query($mysqli, $query)) {
        header('Location: https://72406.ict-lab.nl/aanmelden_finish.php');
    } else {
        echo "Er is een fout opgetreden bij het registreren, probeer het <a href='aanmelden.php'>opnieuw</a>.<br/>";
    }
}

echo "<p><a href='index.php'>TERUG</a></p>";

?>