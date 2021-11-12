<?php

$servername = "localhost";
$dBusername = "root";
$dbpassword = "";
$db_name = "tudungjerrdatabase";

$connection = mysqli_connect($servername, $dBusername, $dBpassword, $db_name);

if(!$connection) {
    die("Gagal berhubung; " . mysqli_connect_error());
}
echo"Berjaya berhubung <br> ";
