<!DOCTYPE html>
<html><head><title></title></head><body>
<style type="text/css">
.table-data{
width: 100%;
border-collapse;
}
.table-data tr th,
.table-data tr td{
border:1px solid black;
font-size: 11pt;
padding: 10px 10px 10px 10px;
}
</style>
<h3><center>LAPORAN DATA PEMINJAMAN BUKU</center></h3><br/><table class="table-data">
        <tr>
            <th>No</th>
            <th>Nama Anggota</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Tanggal Pengembalian</th>
            <th>Total Denda</th>
            <th>Status</th>
        </tr>
    <?php
    $no = 1;
    foreach($laporan as $b){
        ?>
        <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $b['nama']; ?></td>
            <td><?= $b['judul_buku']; ?></td>
            <td><?= $b['tgl_pinjam']; ?></td>
            <td><?= $b['tgl_kembali']; ?></td>
            <td><?= $b['tgl_pengembalian']; ?></td>
            <td><?= $b['total_denda']; ?></td>
            <td><?= $b['status']; ?></td>
        </tr>
        <?php
    }
    ?>
</table></body></html>