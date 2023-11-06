<?php
    include "../config/koneksi.php";
    //untuk menampilkan data yang dipilih kedlm textbox
    if(isset($_GET['id_agama'])){
        //mengambil data sesuai yang di klik oleh user
        $agama_ambil = mysqli_query($koneksi,"SELECT * FROM tb_agama WHERE id_agama='$_GET[id_agama]'")
        or die (mysqli_error());
        $agama_edit = mysqli_fetch_array ($agama_ambil);
    }

?>
<form action="agama_proses.php" method="post">
    <?php
        if(isset($_GET['id_agama']))
        {
            echo "<input type='hidden' name='status' value='edit'>";
        }else{
            echo "<input type='hidden' name='status' value='tambah'>";
        }
    ?>
    <table>
        <tr>
            <td colspan="3" align="center">
                <h3>TAMBAH DATA AGAMA</H3>
            </td>
        </tr>     
        <tr>
            <td>Id Agama</td>
            <td>:</td>
            <td><input type="text" maxlength="11" size="11" name="id_agama" value="<?php echo @$agama_edit['id_agama'];?>"></td>
        </tr>    
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><input type="text" maxlength="10" size="10" name="agama" value="<?php echo @$agama_edit['agama'];?>"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="SIMPAN">
                <input type="submit" value="BATAL">
            </td>
        </tr>      
    </table>
</form>