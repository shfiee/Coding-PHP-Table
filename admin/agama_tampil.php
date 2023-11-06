<h3 align = "center">DATA AGAMA</h3>
<br></br>
<?php
echo "<a href='agama_tambah.php'><input ttype='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#E981A4">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID AGAMA</td>
        <td width = "20%" align = "center">AGAMA</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksi.php";
        $no = "1";
        $tampil_agama = mysqli_query($koneksi, "SELECT * FROM tb_agama ORDER by id_agama");
        while ($hasil = mysqli_fetch_array ($tampil_agama))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_agama]</td>";
           echo "<td>$hasil[agama]</td>";
           echo "<td align='center'><a href='agama_tambah.php?id_agama=$hasil[id_agama]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='agama_proses.php?status=hapus&id_agama=$hasil[id_agama]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>
