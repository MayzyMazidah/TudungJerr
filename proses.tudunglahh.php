<?php

// untuk pastikan user masuk melalui jalan betul
if(isset($_POST[ 'Hantar'])){
    //sekiranya butang Hantar itu ditekan

    //bila nak proses, kita kena hubungkan database dengan php
    require_once "database.connect.php";

    $Pnama = $_POST['nama'];
    $Pemail= $_POST['email'];
    $Palamat = $_POST['alamat'];

    //masuk (INSERT) data ke dalam database
    $query= "INSERT INTO tudunglahh_jadual (nama, email, alamat)
    VALUES ( '$Pnama', '$Pemail', '$Palamat')";

    if (mysqli_query($connection, $query)){
        echo "Rekod disimpan" ;
     }else{
         echo "Rekod TIDAK disimpan";
     }
     else{
         echo "Tidak berjaya";
     }





















}
