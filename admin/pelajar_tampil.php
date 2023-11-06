<h3 align="center">DATA PELAJAR</h3>
<br></br>
<?php
echo "<td align='center'><a href='pelajar_tambah.php'><input type='submit' name='input' value= 'TAMBAH DATA'></a>";
?>
<br></br>
<table border="1" align="center" width="90%">
<tr bgcolor = "#ffeea8">
        <td width ="5%" align = "center">NO.</td>
        <td width = "10%" align = "center">AGAMA</td>
        <td width = "10%" align = "center">TEMPATLAHIR</td>
        <td width = "10%" align = "center">JURUSAN</td>
        <td width = "10%" align = "center">KELAS</td>
        <td width = "20%" align = "center">NIS</td>
        <td width = "20%" align = "center">NAMA</td>
        <td width = "20%" align = "center">TANGGALLAHIR</td>
        <td width = "20%" align = "center">NO TELPON</td>
        <td width = "20%" align = "center">FOTO</td>
        <td width = "10%" align = "center" COLSPAN="2">AKSI</td>
    </tr>

    <?php
        include "../config/koneksi.php";
        $no="1";
        $tampil_pelajar = mysqli_query ($koneksi,"SELECT tb_pelajar.*, tb_agama.agama, tb_tempat.tempat, tb_jurusan.jurusan, tb_kelas.kelas FROM tb_pelajar, tb_tempat, tb_agama, tb_jurusan, tb_kelas
        WHERE tb_pelajar.id_agama = tb_agama.id_agama AND tb_pelajar.id_tempatlahir = tb_tempat.id_tempat AND tb_pelajar.id_jurusan = tb_jurusan.id_jurusan AND tb_pelajar.id_kelas = tb_kelas.id_kelas ORDER by NIS");
        while ($hasil=mysqli_fetch_array($tampil_pelajar))
        {
            echo "<tr>";
            echo "<td align = 'center'>$no</td>";
            echo "<td>$hasil[agama]</td>";
            echo "<td>$hasil[tempat]</td>";
            echo "<td>$hasil[jurusan]</td>";
            echo "<td>$hasil[kelas]</td>";
            echo "<td>$hasil[NIS]</td>";
            echo "<td>$hasil[Nama]</td>";
            echo "<td>$hasil[TanggalLahir]</td>";
            echo "<td>$hasil[no_telp]</td>";
            echo "<td>$hasil[foto]</td>";
            echo  "<td align='center'><a href='pelajar_tambah.php?NIS=$hasil[NIS]'>EDIT</a></td>";
        echo  "<td align='center'><a href='#' onclick=\"if(confirm('apakah data yakin dihapus?'))
        {window.location.href='pelajar_proses.php?status=hapus&NIS=$hasil[NIS]';}\">HAPUS</a></td>";
            echo "</tr>";
            $no++;
        }
    ?>
</table>