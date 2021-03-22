<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<title>Document</title>
	<style>
		body {
			font-size: 12pt
		}
		
		tr td {
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
</head>
<body>
<h6 class="text-center font-weight-bold">BERITA ACARA<br>SERAH TERIMA BARANG
</h6>
<hr style="border-top: 1px solid black">
Pada hari ini,
<u class="font-weight-bold"><?= getHari(date('l', strtotime($berita['beritaAcaraTanggal']))) ?> tanggal <?= terbilang(date('d', strtotime($berita['beritaAcaraTanggal']))) ?> bulan <?= getBulan(date('m', strtotime($berita['beritaAcaraTanggal']))) ?> tahun <?= terbilang(date('Y', strtotime($berita['beritaAcaraTanggal']))) ?> (<?= date('d-m-Y', strtotime($berita['beritaAcaraTanggal'])) ?>),</u> bertempat di
<b><?= $berita['beritaAcaraTempat'] ?>,</b> yang bertanda tangan di bawah ini :<br><br>
<table class="table table-borderless" style="width: 100%">
	<tr>
		<td style="width: 50px" class="text-right">1.</td>
		<td style="width: 150px">Nama</td>
		<td>: <?= $berita['pihakSatuNama'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Jabatan</td>
		<td>: <?= $berita['pihakSatuJabatan'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Divisi</td>
		<td>: <?= $berita['pihakSatuDivisi'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td colspan="2">Selanjutnya disebut pihak I (pertama)</td>
	</tr>
	<tr style="height: 30px">
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td class="text-right">2.</td>
		<td>Nama</td>
		<td>: <?= $berita['pihakDuaNama'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Jabatan</td>
		<td>: <?= $berita['pihakDuaJabatan'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Divisi</td>
		<td>: <?= $berita['pihakDuaDivisi'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td colspan="2">Selanjutnya disebut pihak II (kedua)</td>
	</tr>
</table>
<br><br>
Pihak I (pertama) telah melakukan
<u><b><?= $berita['beritaAcaraBodySatu'] ?></b></u>
<br>
Pihak I (pertama) telah melakukan
<u><b><?= $berita['beritaAcaraBodyDua'] ?></b></u> dengan spesifikasi sebagai berikut :
<br><br>
<table class="table table-borderless" style="width: 100%">
	<thead class="text-center">
	<tr>
		<th>No.</th>
		<th>NAMA BARANG</th>
		<th>MERK</th>
		<th>ALAT</th>
		<th>JUMLAH</th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ($barang as $i => $b) { ?>
		<tr class="text-center">
			<td><?= $i + 1 ?></td>
			<td><?= $b['beritaAcaraBarangNama'] ?></td>
			<td><?= $b['beritaAcaraBarangMerk'] ?></td>
			<td><?= $b['beritaAcaraBarangAlat'] ?></td>
			<td><?= $b['beritaAcaraBarangJumlah'] ?> Unit</td>
		</tr>
		<?php
	} ?>
	</tbody>
</table>
<br>
<b>Segala kehilangan perangkat dimaksud menjadi tanggun jawab Pihak Operasional.</b>
<br>
<br>
<p>Demikian berita acara dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
<br>
<p class="text-right">Banjarmasin, <?= date('d', strtotime($berita['beritaAcaraTanggal'])) ?> <?= getBulan(date('m', strtotime($berita['beritaAcaraTanggal']))) ?> <?= date('Y', strtotime($berita['beritaAcaraTanggal'])) ?></p>
<br>
<table class="table table-borderless" style="width: 100%">
	<tr>
		<td style="width: 50%" class="text-center">Pihak Pertama</td>
		<td style="width: 50%" class="text-center">Pihak Kedua</td>
	</tr>
	<tr style="height: 100px">
		<td class="text-center">
			<img src="<?= $berita['ttd1'] ?>" alt="">
		</td>
		<td>
			<img src="<?= $berita['ttd2'] ?>" alt="">
		</td>
	</tr>
	<tr class="text-center">
		<td>
			<u><b><?= $berita['pihakSatuNama'] ?></b></u>
		</td>
		<td>
			<u><b><?= $berita['pihakDuaNama'] ?></b></u>
		</td>
	</tr>
	<tr class="text-center">
		<td colspan="2">Mengetahui,<br>Deputi Menajer Teknologi Informasi
		</td>
	</tr>
	<tr style="height: 100px">
		<td colspan="2" class="text-center">
			<img src="<?= $berita['ttd3'] ?>" alt="">
		</td>
	</tr>
	<tr class="text-center">
		<td colspan="2">
			<u><b>Mulyo</b></u>
		</td>
	</tr>
</table>
<script>
	window.print()
</script>
</body>
</html>