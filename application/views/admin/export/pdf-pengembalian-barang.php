<!DOCTYPE html>
<html><head>
    <title>Cetak Daftar Pengembalian</title>
    <style>
        body {
            font-family: arial, sans-serif;
            margin: 1cm 1cm 1cm 1cm;
        }

        

        table {
            border-collapse: collapse;
            width: 100%;
            padding: 4px;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head><body>
    <div class="cetak">
	<center>
    <hr size="3" align="left" color="black">
    
	<h2>Laporan Pengembalian Barang</h2>
	</center>
        Tanggal di cetak: <?= date('d/m/Y'); ?>
    </div>
    <br>

    <table>
        <tr>
			<th scope="col">No.</th>
			<th scope="col">Nama Barang</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Tanggal Peminjaman</th>
            <th scope="col">Tanggal Pengembalian</th>
            <th scope="col">Jumlah Hari</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">Tanggal Validasi</th>
        </tr>

        <?php if (!empty($barang_keluar)) : ?>
			<?php $i = 1; foreach ($barang_keluar as $bk) { 
                $tgl1 = strtotime($bk['tanggal_pengembalian']);
                $tgl2 = strtotime($bk['tanggal_peminjaman']); 
                
                $jarak = $tgl1-$tgl2;
                $hari = $jarak / 60 / 60 / 24;
                ?>
				<tr>
					<th scope="row"><?= $i; ?></th>
					<td><?= $bk['nama_barang']; ?></td>
					<td><?= $bk['nama_peminjam']; ?></td>
					<td><?= $bk['tanggal_peminjaman']; ?></td>
                    <td><?= $bk['tanggal_pengembalian']; ?></td>
					<td><?= $hari; ?></td>
					<td><?= $bk['jumlah_barang']; ?></td>
					<td><?= $bk['tgl_validation_pengembalian']; ?></td>
				</tr>
				<?php $i++; ?>
			<?php } ?>
        <?php else : ?>
            <h3>Tidak ada data!</h3>
        <?php endif; ?>
    </table>
	<br>
                <table border="0" width="100%">
                    <tr>
                        <td></td>
                        <td width="100px">
                            <p>Pekalongan, <?php echo date('d-m-Y'); ?><br />
                            </p>
                            <p>Ketua KOPINDO Pekalongan</p>
                            <br />
							<br />
							<br />
                            <p>_________________________</p>
                            <p>dr.H. Herlan Afandi</p>
                        </td>
                    </tr>
                </table>

</body></html>
