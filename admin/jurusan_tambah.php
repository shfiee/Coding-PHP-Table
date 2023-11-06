<?php
    include "../config/koneksi.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_jurusan'])){
        //mengambil data sesuai yang di klik oleh user
        $jurusan_ambil = mysqli_query($koneksi,"SELECT * FROM tb_jurusan WHERE id_jurusan='$_GET[id_jurusan]'")
        or die (mysqli_error());
        $jurusan_edit = mysqli_fetch_array ($jurusan_ambil);
    }

?>
<form action="jurusan_proses.php" method="post">
    <?php
        if(isset($_GET['id_jurusan']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA JURUSAN</H3>
            </td>
        </tr>     
        <tr>
            <td>Id jurusan</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_jurusan" value="<?php echo @$jurusan_edit['id_jurusan'];?>"></td>
        </tr>    
        <tr>
            <td>jurusan</td>
            <td>:</td>
            <td><input type="text" maxlength="10" size="10" name="jurusan" value="<?php echo @$jurusan_edit['jurusan'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>