<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "db_pelajar";

    $koneksi = mysqli_connect("$server", "$username", "$password", "$database") or die ("KONEKSI GAGAL");
?>