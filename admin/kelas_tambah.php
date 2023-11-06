<?php
    include "../config/koneksi.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_kelas'])){
        //mengambil data sesuai yang di klik oleh user
        $kelas_ambil = mysqli_query($koneksi,"SELECT * FROM tb_kelas WHERE id_kelas='$_GET[id_kelas]'")
        or die (mysqli_error());
        $kelas_edit = mysqli_fetch_array ($kelas_ambil);
    }

?>
<form action="kelas_proses.php" method="post">
    <?php
        if(isset($_GET['id_kelas']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA KELAS</H3>
            </td>
        </tr>     
        <tr>
            <td>Id kelas</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_kelas" value="<?php echo @$kelas_edit['id_kelas'];?>"></td>
        </tr>    
        <tr>
            <td>kelas</td>
            <td>:</td>
            <td><input type="text" maxlength="10" size="10" name="kelas" value="<?php echo @$kelas_edit['kelas'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>