<?php
    include "../config/koneksi.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_jurusan = $_POST['id_jurusan'];
        $jurusan = $_POST['jurusan'];
        $guru_tambah = mysqli_query($koneksi,"INSERT INTO tb_jurusan VALUES ('$id_jurusan','$jurusan')");
        if ($guru_tambah==true){
            echo "<script>alert ('Tambah Data jurusan Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data jurusan Gagal')</script>";
        }
        break;
    case 'edit':
        $id_jurusan = $_POST['id_jurusan'];
        $jurusan = $_POST['jurusan'];
        $guru_edit = mysqli_query($koneksi,"UPDATE tb_jurusan SET id_jurusan = '$id_jurusan', jurusan = '$jurusan' WHERE id_jurusan='$id_jurusan'");
        if ($guru_edit==true){
            echo "<script>alert ('Edit Data jurusan Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data jurusan Gagal')</script>";
        }
        break;
        default:
            $id_jurusan = $_GET['id_jurusan'];
            $jurusan_hapus = mysqli_query($koneksi,"DELETE FROM tb_jurusan WHERE id_jurusan='$id_jurusan'");
            if ($jurusan_hapus==true){
                echo "<script>alert ('Hapus Data jurusan Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data jurusan Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;URL=jurusan_tampil.php">