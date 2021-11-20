<?php

// untuk pastikan user masuk melalui jalan betul
if(isset($_POST[ 'tempah'])){
    //sekiranya butang tempah itu ditekan

    //bila nak proses, kita kena hubungkan database dengan php
    require_once 'database.connect.php';

    $Pnama = $_POST['nama'];
    $Pemail= $_POST['email'];
    $Palamat = $_POST['alamat'];

    //masuk (INSERT) data ke dalam database
    $query= "INSERT INTO tudungjerr_jadual (nama,email, alamat)
    VALUES ( '$Pname', '$Pmeail', '$Paddress')";

    if (mysqli_query($connection, $query)){
        echo "Rekod disimpan" ;
     }else{
         echo "Rekod TIDAK disimpan";
     }
     else{
         echo "Tidak berjaya";
     }





















}
