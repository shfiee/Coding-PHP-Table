<h3 align = "center">DATA JURUSAN</h3>
<br></br>
<?php
echo "<a href='jurusan_tambah.php'><input ttype='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border = "1" align = "center" width ="90%">
    <tr bgcolor = "#7AACEB">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">ID JURUSAN</td>
        <td width = "20%" align = "center">JURUSAN</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr
    <tr>
    <?php
        include "../config/koneksi.php";
        $no = "1";
        $tampil_jurusan = mysqli_query($koneksi, "SELECT * FROM tb_jurusan ORDER by id_jurusan");
        while ($hasil = mysqli_fetch_array ($tampil_jurusan))
        {
           echo "<tr>";
           echo "<td align = 'center'>$no</td>";
           echo "<td>$hasil[id_jurusan]</td>";
           echo "<td>$hasil[jurusan]</td>";
           echo "<td align='center'><a href='jurusan_tambah.php?id_jurusan=$hasil[id_jurusan]'>EDIT</td>";
           echo "<td align='center'><a href='#' onclick=\"if(confirm('Apakah data yakin dihapus?'))
           {window.location.href='jurusan_proses.php?status=hapus&id_jurusan=$hasil[id_jurusan]';}\">DELETE</td>";
           echo "</tr>";
           $no++;
        }
    ?>
    </tr>
</table>
