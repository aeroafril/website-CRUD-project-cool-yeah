<?php
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'crud';

    $koneksi = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if($koneksi->connect_error){
        die('Koneksi Gagal: '.$koneksi->connect_error).'';
    }
?>