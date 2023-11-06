<?php
   include "../config/koneksi.php";
   //
   if(isset($_GET['NIS'])){
    //
    $pelajar_ambil = mysqli_query($koneksi,"SELECT * FROM tb_pelajar WHERE NIS ='$_GET[NIS]'")
    or die (mysqli_error());
    $pelajar_edit = mysqli_fetch_array ($pelajar_ambil);
   }
?>

<form action = "pelajar_proses.php" method= "post">
    <?php
    if(isset($_GET['NIS']))
    {
        echo "<input type = 'hidden' name= 'status' value='edit'>";
    } else {
        echo "<input type = 'hidden' name= 'status' value='tambah'>";
    }
    ?>

  <table>
  <tr>
        <td colspan="3" align = "center">
           <h3>TAMBAH DATA PELAJAR</h3>
        </td>
    </tr>
    <tr>
        <td>NIS</td>
        <td>:</td>
        <td> <input type = "text" maxlength="11" size="11" name= "NIS" value = "<?php echo @$pelajar_edit['NIS'];?>"> </td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td> 
            <select name="agama">
                <?php
                    $ambil_agama = mysqli_query($koneksi, "SELECT * FROM tb_agama");
                    WHILE ($agama = mysqli_fetch_array($ambil_agama))
                    {
                        echo "<option value='$agama[id_agama]'>$agama[agama]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td> 
            <select name="kelas">
                <?php
                    $ambil_kelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                    WHILE ($kelas = mysqli_fetch_array($ambil_kelas))
                    {
                        echo "<option value='$kelas[id_kelas]'>$kelas[kelas]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>jurusan</td>
        <td>:</td>
        <td> 
            <select name="jurusan">
                <?php
                    $ambil_jurusan = mysqli_query($koneksi, "SELECT * FROM tb_jurusan");
                    WHILE ($jurusan = mysqli_fetch_array($ambil_jurusan))
                    {
                        echo "<option value='$jurusan[id_jurusan]'>$jurusan[jurusan]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Tempat</td>
        <td>:</td>
        <td> 
            <select name="tempat">
                <?php
                    $ambil_tempat = mysqli_query($koneksi, "SELECT * FROM tb_tempat");
                    WHILE ($tempat = mysqli_fetch_array($ambil_tempat))
                    {
                        echo "<option value='$jurusan[id_tempat]'>$tempat[tempat]</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td> <input type = "text" maxlength="10" size="10" name= "Nama" value = "<?php echo @$pelajar_edit['Nama'];?>"> </td>
    </tr>
    <tr>
        <td>tanggal Lahir</td>
        <td>:</td>
        <td> <input type = "date" maxlength="30" size="30" name= "TanggalLahir" value = "<?php echo @$pelajar_edit['TanggalLahir'];?>"> </td>
    <tr>
        <td>No Telpon</td>
        <td>:</td>
        <td> <input type = "text" maxlength="50" size="50" name= "no_telp" value = "<?php echo @$pelajar_edit['no_telp'];?>"> </td>
    </tr>
    <tr>
        <td>Foto</td>
        <td>:</td>
        <td> <input type = "file" name= "image" value = "<?php echo @$pelajar_edit['foto'];?>"> </td>
    </tr>

    <tr>
        <td colspan="3" align = "center">
            <input type = "submit" value="SIMPAN">
            <input type = "submit" value="BATAL">
        </td>
    </tr>

  </table>
</form>