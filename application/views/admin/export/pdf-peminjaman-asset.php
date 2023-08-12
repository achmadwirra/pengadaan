<!DOCTYPE html>
<html><head>
    <title>Cetak Daftar Data Peminjaman Asset</title>
        <style>
            body {
                font-family: arial, sans-serif;
            }

            p.small {
            line-height: 0.9;
            }

            .rangkasurat {
                width: 980px;
                margin: 0 auto;
                background-color: #fff;
                height: 500px;
                padding: 20px;
            }

            .tengah {
                text-align: center;
                line-height: 5px;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                padding: 4px;
                text-align: center;
            }

            table#table-barang {
                border-collapse: collapse;
                width:100%;
            }

            table#table-barang td {
                padding:6px;
            }

            table#table-barang th {
                border-collapse: collapse;
                /* width: 100%;
                padding: 4px; */
                text-align: center;
            }

            table#table-barang,
            #table-barang th,
            #table-barang td {
                border: 1px solid black;
            }
        </style>
</head><body>
    <div class="cetak">
	<center>
    <hr size="3" align="left" color="black">
	<h2>Laporan Peminjaman Asset</h2>
	</center>
        Tanggal di cetak: <?= date('d/m/Y'); ?>
    </div>
    <br>
    <table id="table-barang">
        <tr>
			<th scope="col">No.</th>
			<th scope="col">Nama Asset</th>
            <th scope="col">Tempat</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Tanggal Peminjaman</th>
            <th scope="col">Tanggal Berakhir</th>
            <th scope="col">Jumlah Hari</th>
        </tr>

        <?php if (!empty($peminjaman_asset)) : ?>
			<?php $i = 1; foreach ($peminjaman_asset as $pa) { 
                $tgl1 = strtotime($pa['tanggal_pengembalian']);
                $tgl2 = strtotime($pa['tanggal_peminjaman']); 
                
                $jarak = $tgl1-$tgl2;
                $hari = $jarak / 60 / 60 / 24;
                ?>
				<tr>
					<th scope="row"><?= $i; ?></th>
					<td><?= $pa['nama_asset']; ?></td>
					<td><?= $pa['tempat']; ?></td>
					<td><?= $pa['nama_peminjam']; ?></td>
					<td><?= $pa['tanggal_peminjaman']; ?></td>
                    <td><?= $pa['tanggal_pengembalian']; ?></td>
					<td><?= $hari; ?></td>
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
                            <p>Pelaihari, <?php echo date('d-m-Y'); ?><br />
                            </p>
                            <p>Ketua Dinas Pariwisata</p>
                            <br />
							<br />
							<br />
                            <p>_________________________</p>
                            <p>Drs. H.M. Rafiki Effendi, M.Si</p>
                        </td>
                    </tr>
                </table>

</body></html>
