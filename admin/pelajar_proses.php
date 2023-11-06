<?php
include "../config/koneksi.php";
if(isset($_POST['status']))
{
    $status = $_POST ['status'];
}

switch ($status){
    case 'tambah':
        $NIS = $_POST['NIS'];
        $id_agama = $_POST['id_agama'];
        $id_kelas = $_POST['id_kelas'];
        $id_jurusan = $_POST['id_jurusan'];
        $id_tempat = $_POST['id_tempatlahir'];
        $Nama = $_POST['Nama'];
        $TanggalLahir = $_POST['TanggalLahir'];
        $no_telp = $_POST['no_telp'];
        $foto = $_POST['foto'];

        $guru_tambah = mysqli_query($koneksi, "INSERT INTO tb_pelajar VALUES ('$NIS','$id_agama','$id_kelas','$id_jurusan',
        '$id_tempat','$Nama','$TanggalLahir','$no_telp','$foto')");

        if ($guru_tambah ==true){
            echo "<script>alert ('Tambah Data Pelajar Berhasil') </script>";
        } else {
            echo "<script>alert ('Tambah Data Pelajar Gagal') </script>";
        }
        break;

        case 'edit':
            $NIS = $_POST['NIS'];
            $id_agama = $_POST['id_agama'];
            $id_kelas = $_POST['id_kelas'];
            $id_jurusan = $_POST['id_jurusan'];
            $id_tempat= $_POST['id_tempatlahir'];
            $Nama = $_POST['Nama'];
            $TanggalLahir = $_POST['TanggalLahir'];
            $no_telp = $_POST['no_telp'];
            $foto = $_POST['foto'];

            $pelajar_edit = mysqli_query($koneksi, "UPDATE tb_pelajar SET NIS = '$NIS', id_agama = '$id_agama', id_kelas = '$id_kelas',
            id_jurusan = '$id_jurusan', id_tempatlahir = '$id_tempat', Nama='$Nama', TanggalLahir='$TanggalLahir', no_telp='$no_telp', foto='$foto'
            WHERE NIS = '$NIS'");

            if ($pelajar_edit ==true){
                echo "<script>alert ('Edit Data Pelajar Berhasil') </script>";
            } else {
                echo "<script>alert ('Edit Data Pelajar Gagal') </script>";
            }
        break;

        default:
        $NIS = $_GET['NIS'];
        $pelajar_hapus = mysqli_query($koneksi, "DELETE FROM tb_pelajar WHERE NIS = '$NIS'");
        if ($pelajar_hapus ==true){
            echo "<script>alert ('Hapus Data Pelajar Berhasil') </script>";
        } else {
            echo "<script>alert ('Hapus Data Pelajar Gagal') </script>";
        }
         break;
}
?>

<meta http-equiv= "refresh" content= "0;URL=pelajar_tampil.php">