<?php
//Dit bestand heet config.inc.php
error_reporting(E_ALL);
ini_set('display_errors', '1');

//Database inloggegevens
$db_hostname = 'localhost'; //of '127.0.0.1'
$db_username = '84833_beroeps';
$db_password = 'Wolf18051';
$db_database = '84833_beroeps';

// maak de database-verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

// als de verbinding niet gemaakt kan worden: geef een foutmelding

if (!$mysqli) {
    echo "FOUT: geen connectie naar database. <br>";
    echo "Errno: " . mysqli_connect_errno() . "<br>";
    echo "Error: " . mysqli_connect_error() . "<br>";
    exit;
}
