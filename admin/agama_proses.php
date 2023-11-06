<?php
    include "../config/koneksi.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_agama = $_POST['id_agama'];
        $agama = $_POST['agama'];
        $guru_tambah = mysqli_query($koneksi,"INSERT INTO tb_agama VALUES ('$id_agama','$agama')");
        if ($guru_tambah==true){
            echo "<script>alert ('Tambah Data Agama Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data Agama Gagal')</script>";
        }
        break;
    case 'edit':
        $id_agama = $_POST['id_agama'];
        $agama = $_POST['agama'];
        $guru_edit = mysqli_query($koneksi,"UPDATE tb_agama SET id_agama = '$id_agama', agama = '$agama' WHERE id_agama='$id_agama'");
        if ($guru_edit==true){
            echo "<script>alert ('Edit Data Agama Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data Agama Gagal')</script>";
        }
        break;
        default:
            $id_agama = $_GET['id_agama'];
            $agama_hapus = mysqli_query($koneksi,"DELETE FROM tb_agama WHERE id_agama='$id_agama'");
            if ($agama_hapus==true){
                echo "<script>alert ('Hapus Data Agama Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data Agama Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;URL=agama_tampil.php">