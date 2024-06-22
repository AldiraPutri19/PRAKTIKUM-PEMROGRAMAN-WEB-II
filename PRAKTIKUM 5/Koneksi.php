<?php

$servername = "localhost";
$database = "perpus";
$username = "root";
$password = "";
$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "";
?>