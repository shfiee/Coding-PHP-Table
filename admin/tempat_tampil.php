<h3 align="center">DATA TEMPAT LAHIR</h3>
<br></br>
<?php
echo "<td align='center'><a href='tempat_tambah.php'><input ttype='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border="1" align="center" width="90%">
    <tr bgcolor="B8D591">
        <td width="5%" align="center">NO.</td>
        <td width="10%" align="center">ID TEMPAT</td>
        <td width="20%" align="center">TEMPAT</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr>
    <tr>
    <?php
        include "../config/koneksi.php";
        $no="1";
        $tampil_tempat = mysqli_query ($koneksi,"SELECT * FROM tb_tempat ORDER by id_tempat");
        while ($hasil=mysqli_fetch_array($tampil_tempat))
        {
            echo "<tr>";
            echo "<td align= 'center'>$no</td>";
            echo "<td>$hasil[id_tempat]</td>";
            echo "<td>$hasil[jurusan]</td>";
            echo "<td align='center'><a href='tempat_tambah.php?id_tempat=$hasil[id_tempat]'>EDIT</td>";
            echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
            {window.location.href='tempat.proses.php?status=hapus&id_tempat=$hasil[id_tempat]';}\">DELETE</td>";
            echo "</tr>";
            $no++;
        }
    ?>
    </tr>
</table>