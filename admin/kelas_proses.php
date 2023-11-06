<?php
    include "../config/koneksi.php";
    if(isset($_POST['status']))
    {
        $status = $_POST ['status'];
    }

switch ($status){
    case 'tambah':
        $id_kelas = $_POST['id_kelas'];
        $kelas = $_POST['kelas'];
        $guru_tambah = mysqli_query($koneksi,"INSERT INTO tb_kelas VALUES ('$id_kelas','$kelas')");
        if ($guru_tambah==true){
            echo "<script>alert ('Tambah Data kelas Berhasil')</script>";
        } else {
            echo "<script>alert ('Tambah Data kelas Gagal')</script>";
        }
        break;
    case 'edit':
        $id_kelas = $_POST['id_kelas'];
        $kelas = $_POST['kelas'];
        $guru_edit = mysqli_query($koneksi,"UPDATE tb_kelas SET id_kelas = '$id_kelas', kelas = '$kelas' WHERE id_kelas='$id_kelas'");
        if ($guru_edit==true){
            echo "<script>alert ('Edit Data kelas Berhasil')</script>";
        } else {
            echo "<script>alert ('Edit Data kelas Gagal')</script>";
        }
        break;
        default:
            $id_kelas = $_GET['id_kelas'];
            $kelas_hapus = mysqli_query($koneksi,"DELETE FROM tb_kelas WHERE id_kelas='$id_kelas'");
            if ($kelas_hapus==true){
                echo "<script>alert ('Hapus Data kelas Berhasil')</script>";
            } else {
                echo "<script>alert ('Hapus Data kelas Gagal')</script>";
            }
            break;
    }
?>

<meta http-equiv= "refresh" content= "0;URL=kelas_tampil.php">