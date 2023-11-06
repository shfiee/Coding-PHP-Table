<?php
    include "../config/koneksi.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_tempat = $_POST['id_tempat'];
        $jurusan = $_POST['jurusan'];
        $guru_tambah = mysqli_query($koneksi,"INSERT INTO tb_tempat VALUES ('$id_tempat','$jurusan')");
        if ($guru_tambah==true){
            echo "<script>alert ('Tambah Data Tempat Lahir Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data Tempat Lahir Gagal')</script>";
        }
        break;
    case 'edit':
        $id_tempat = $_POST['id_tempat'];
        $jurusan = $_POST['jurusan'];
        $guru_edit = mysqli_query($koneksi,"UPDATE tb_tempat SET id_tempat = '$id_tempat', jurusan = '$jurusan' WHERE id_tempat='$id_tempat'");
        if ($guru_edit==true){
            echo "<script>alert ('Edit Data Tempat Lahir Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data Tempat Lahir Gagal')</script>";
        }
        break;
        default:
            $id_tempat = $_GET['id_tempat'];
            $tempat_delete = mysqli_query($koneksi,"DELETE FROM tb_tempat WHERE id_tempat='$id_tempat'");
            if ($tempat_delete==true){
                echo "<script>alert ('Delete Data Tempat Lahir Berhasil')</script>";
            } else {
                echo "<script>alert ('Delete Data Tempat Lahir Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;URL=tempat_tampil.php">