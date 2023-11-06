<?php
    include "../config/koneksi.php";
    //untuk menampilkan data yang dipilih kedalam textbox
    if(isset($_GET['id_tempat'])){
        //mengambil data sesuai yang diklik oleh user
        $tempat_ambil = mysqli_query($koneksi,"SELECT * FROM tb_tempat WHERE id_tempat='$_GET[id_tempat]'")
        or die ();
        $tempat_edit = mysqli_fetch_array ($tempat_ambil);
    }
?>
<form action="tempat.proses.php" method="post">
    <?php
        if(isset($_GET['id_tempat']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA TEMPAT</H3>
            </td>
        </tr>     
        <tr>
            <td>Id Tempat</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_tempat" value="<?php echo @$tempat_edit['id_tempat'];?>"></td>
        </tr>    
        <tr>
            <td>jurusan</td>
            <td>:</td>
            <td><input type="text" maxlength="10" size="10" name="jurusan" value="<?php echo @$tempat_edit['jurusan'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>