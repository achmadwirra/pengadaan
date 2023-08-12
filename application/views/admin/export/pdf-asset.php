<!DOCTYPE html>
<html><head>
    <title>Cetak Laporan Data Asset</title>
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
    <div class="rangkasurat">
        <table width="100%">
        <tr>
            <td><img src="<?= site_url('assets/assets/images/logo-tanahlautkop.png') ?>" width="120px"></td>
            <td class="tengah">
                    <h2>PEMERINTAH KABUPATEN TANAH LAUT</h2>
                    <h2>DINAS PARIWISATA</h2>
                    <p class="small">
                    Alamat : Jl. Datu Insad Komplek Perkantoran Pelaihari Kode Pos 70814<br>
                    Telp/Fax. (0512)-21178<br>
                    Email : dispar.kabtala@gmail.com Web : www.dispar.tanahlautkab.go.id</p>
            </td>
        </tr>
        </table>
    <div class="cetak">
	<center>
	<h2>Laporan Data Asset</h2>
	</center>
        Tanggal di cetak: <?= date('d/m/Y'); ?>
    </div>
    <br>

    <table id="table-barang">
        <tr>
			<th scope="col">No.</th>
			<th scope="col">Nama Asset</th>
			<th scope="col">Tempat</th>
        </tr>

        <?php if (!empty($data_asset)) : ?>
			<?php $i = 1; foreach ($data_asset as $su) : ?>
				<tr>
					<th scope="row"><?= $i; ?></th>
					<td><?= $su['nama_asset']; ?></td>
					<td><?= $su['tempat']; ?></td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
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
