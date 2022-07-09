<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3><center>Laporan Data Anggota Perpustakaan Online</center></h3>
<br/>
<table table="1" class="table-data">
    <thead>
       <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Aktif Sejak</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $no = 1;
        foreach($anggota as $u) { ?>
    <tr>
        <th scope="row"><?= $no++; ?></th>
        <td><?= $u['nama']; ?></td>
        <td><?= $u['alamat']; ?></td>
        <td><?= $u['email']; ?></td>
        <td><?= date('d F Y', $u['tanggal_input']); ?></td>
    </tr>
    <?php } ?>
    <tbody>
</table>


        