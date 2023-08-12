<!DOCTYPE html>
<html><head>
    <title>Cetak Laporan Detail Penerima Barang</title>
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

        #barang-keluar tr, #barang-keluar td, #barang-keluar th {
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
    <hr size="3" align="left" color="black">
	<h2>Laporan Detail Penerima Barang</h2>
	</center>
        Tanggal di cetak: <?= date('d/m/Y'); ?>
    </div>
    <br>

                <table id="barang-keluar">
                    <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah Barang</th>
                    </tr>
                    <?php foreach ($detail as $dt) { ?>
                        <tr>
                            <td><?= $dt['nama_barang'] ?></td>
                            <td><?= $dt['jumlah_barang'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <table border="0" width="100%">
                    <tr>
                        <td></td>
                        <td width="100px">
                            <p>Tanah Laut, <?php echo date('d-m-Y'); ?><br />
                            </p>
                            <p>Ketua <?= $nama_bidang ?></p>
                            <br />
							<br />
							<br />
                            <p>_________________________</p>
                            <p><?= $nama_kasi ?></p>
                        </td>
                    </tr>
                </table>

</body></html>
