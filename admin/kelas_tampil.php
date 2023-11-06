<h3 align = "center">DATA KELAS</h3>
<br></br>
<?php
echo "<a href='kelas_tambah.php'><input ttype='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#ABDEE6">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID KELAS</td>
        <td width = "20%" align = "center">KELAS</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksi.php";
        $no = "1";
        $tampil_kelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas ORDER by id_kelas");
        while ($hasil = mysqli_fetch_array ($tampil_kelas))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_kelas]</td>";
           echo "<td>$hasil[kelas]</td>";
           echo "<td align='center'><a href='kelas_tambah.php?id_kelas=$hasil[id_kelas]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='kelas_proses.php?status=hapus&id_kelas=$hasil[id_kelas]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>
