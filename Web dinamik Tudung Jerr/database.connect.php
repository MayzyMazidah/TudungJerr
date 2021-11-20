<?php

$servername = "localhost"; //hostname
$dBusername = "root"; //database username
$dBpassword = ""; //database password
$db_name = "tudungjerrdatabase"; //nama database

//create connection (Kaedah : MySQLi Procedural)
$connection = mysqli_connect($servername, $dBusername, $dBpassword, $db_name);

//mesej dirujukkan jika connection gagal
     if(!$connection) {
         die("Gagal berhubung; " . mysqli_connect_error());
     }
echo "Berjaya berhubung <br> ";
