<div class="card">
	<form action="" method="post">
		<div class="card-body">
			<h6 class="text-center font-weight-bold">BERITA ACARA<br>SERAH TERIMA BARANG
			</h6>
			<input type="text" name="beritaAcaraNama" class="form-control" placeholder="Nama Berita Acara" required>
			<hr style="border-top: 1px solid black">
			Pada hari ini,
			<u class="font-weight-bold"> tanggal bulan tahun (),</u> bertempat di
			<input type="text" class="form-control" name="beritaAcaraTempat" required>
			<b>,</b> yang bertanda tangan di bawah ini :<br><br>
			<table class="table table-borderless" style="width: 100%">
				<tr>
					<td style="width: 50px" class="text-right">1.</td>
					<td style="width: 150px">Nama</td>
					<td>
						<div class="form-group mb-n1">
							<select class="form-control select2" name="pihakSatuId" required>
								<option value="">--PILIH PIHAK PERTAMA--</option>
								<?php
								foreach ($pegawai as $p) { ?>
									<option data-pegawainama="<?= $p['pegawaiNama'] ?>" data-jabatannama="<?= $p['jabatanNama'] ?>" data-divisinama="<?= $p['divisiNama'] ?>" value="<?= $p['pegawaiId'] ?>"><?= $p['pegawaiNama'] ?></option>
									<?php
								} ?>
							</select>
							<input type="hidden" name="pihakSatuNama">
						</div>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Jabatan</td>
					<td>
						<div class="form-group mb-n1">
							<input class="form-control" type="text" name="pihakSatuJabatan" placeholder="Jabatan" readonly required>
						</div>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Divisi</td>
					<td>
						<div class="form-group mb-n1">
							<input class="form-control" type="text" name="pihakSatuDivisi" placeholder="Divisi" readonly required>
						</div>
					</td>
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
					<td>
						<div class="form-group mb-n1">
							<select class="form-control select2" name="pihakDuaId" required>
								<option value="">--PILIH PIHAK PERTAMA--</option>
								<?php
								foreach ($pegawai as $p) { ?>
									<option data-pegawainama="<?= $p['pegawaiNama'] ?>" data-jabatannama="<?= $p['jabatanNama'] ?>" data-divisinama="<?= $p['divisiNama'] ?>" value="<?= $p['pegawaiId'] ?>"><?= $p['pegawaiNama'] ?></option>
									<?php
								} ?>
							</select>
							<input type="hidden" name="pihakDuaNama">
						</div>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Jabatan</td>
					<td>
						<div class="form-group mb-n1">
							<input class="form-control" type="text" name="pihakDuaJabatan" placeholder="Jabatan" readonly required>
						</div>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Divisi</td>
					<td>
						<div class="form-group mb-n1">
							<input class="form-control" type="text" name="pihakDuaDivisi" placeholder="Divisi" readonly required>
						</div>
					</td>
				</tr>
				<tr>
					<td></td>
					<td colspan="2">Selanjutnya disebut pihak II (kedua)</td>
				</tr>
			</table>
			<br><br>
			<table class="table table-borderless" style="width: 100%">
				<tr>
					<td style="width: 20%">Pihak I (pertama) telah melakukan</td>
					<td>
						<input type="text" class="form-control" name="beritaAcaraBodySatu" required>
					</td>
				</tr>
			</table>
			<br>
			<table class="table table-borderless" style="width: 100%">
				<tr>
					<td style="width: 20%">Pihak I (pertama) telah melakukan</td>
					<td>
						<input type="text" class="form-control" name="beritaAcaraBodyDua" required>
					</td>
					<td style="width: 20%">
						dengan spesifikasi sebagai berikut :
					</td>
				</tr>
			</table>
			<br><br>
			<button class="btn btn-sm btn-outline-danger mb-1 float-right" onclick="tambahBarang()">Tambah Barang</button>
			<table id="tabelBarang" class="table table-sm table-bordered" style="width: 100%">
				<thead class="text-center">
				<tr>
					<th>NAMA BARANG</th>
					<th>MERK</th>
					<th>ALAT</th>
					<th>JUMLAH</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>
						<input type="text" class="form-control form-control-sm" placeholder="Nama Barang" name="beritaAcaraBarangNama[]">
					</td>
					<td>
						<input type="text" class="form-control form-control-sm" placeholder="Merk" name="beritaAcaraBarangMerk[]">
					</td>
					<td>
						<input type="text" class="form-control form-control-sm" placeholder="Alat" name="beritaAcaraBarangAlat[]">
					</td>
					<td>
						<input type="text" class="form-control form-control-sm" placeholder="Jumlah" name="beritaAcaraBarangJumlah[]">
					</td>
					<td class="text-center">
						<button class="btn btn-xs btn-danger hapus-barang">
							<i class="fas fa-times fa-fw"></i>
						</button>
					</td>
				</tr>
				</tbody>
			</table>
			<br>
			<b>Segala kehilangan perangkat dimaksud menjadi tanggun jawab Pihak Operasional.</b>
			<br>
			<br>
			<p>Demikian berita acara dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
			<br>
			<table class="table table-borderless">
				<tr>
					<td class="text-right">Banjarmasin,</td>
					<td style="width: 15%">
						<input type="date" class="form-control form-control-sm" name="beritaAcaraTanggal" required>
					</td>
				</tr>
			</table>
			<br>
			<table class="table table-bordered" style="width: 100%">
				<tr>
					<td style="width: 50%" class="text-center">Pihak Pertama</td>
					<td style="width: 50%" class="text-center">Pihak Kedua</td>
				</tr>
				<tr style="height: 100px">
					<td></td>
					<td></td>
				</tr>
				<tr class="text-center">
					<td>
						<u><b></b></u>
					</td>
					<td>
						<u><b></b></u>
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="2">Mengetahui,<br>Deputi Menajer Teknologi Informasi
					</td>
				</tr>
				<tr style="height: 100px">
					<td colspan="2"></td>
				</tr>
				<tr class="text-center">
					<td colspan="2">
						<u><b>Mulyo</b></u>
					</td>
				</tr>
			</table>
		</div>
		<div class="card-footer text-center">
			<a href="<?= base_url('berita-acara') ?>" role="button" class="btn btn-sm btn-danger">Kembali</a>
			<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
		</div>
	</form>
</div>
<script>
	document.addEventListener("DOMContentLoaded", () => {
		$("select[name=pihakSatuId]").on('change', function () {
			if ($(this).val() != "") {
				let data = $(this).find(':selected').data()
				$("input[name=pihakSatuNama]").val(data.pegawainama)
				$("input[name=pihakSatuJabatan]").val(data.jabatannama)
				$("input[name=pihakSatuDivisi]").val(data.divisinama)
			} else {
				$("input[name=pihakSatuNama]").val("")
				$("input[name=pihakSatuJabatan]").val("")
				$("input[name=pihakSatuDivisi]").val("")
			}
		})

		$("select[name=pihakDuaId]").on('change', function () {
			if ($(this).val() != "") {
				let data = $(this).find(':selected').data()
				$("input[name=pihakDuaNama]").val(data.pegawainama)
				$("input[name=pihakDuaJabatan]").val(data.jabatannama)
				$("input[name=pihakDuaDivisi]").val(data.divisinama)
			} else {
				$("input[name=pihakDuaNama]").val("")
				$("input[name=pihakDuaJabatan]").val("")
				$("input[name=pihakDuaDivisi]").val("")
			}
		})

		tambahBarang = () => {
			const html = '<tr>' +
				'<td>' +
				'<input type="text" class="form-control form-control-sm" placeholder="Nama Barang" name="beritaAcaraBarangNama[]">' +
				'</td>' +
				'<td>' +
				'<input type="text" class="form-control form-control-sm" placeholder="Merk" name="beritaAcaraBarangMerk[]">' +
				'</td>' +
				'<td>' +
				'<input type="text" class="form-control form-control-sm" placeholder="Alat" name="beritaAcaraBarangAlat[]">' +
				'</td>' +
				'<td>' +
				'<input type="text" class="form-control form-control-sm" placeholder="Jumlah" name="beritaAcaraBarangJumlah[]">' +
				'</td>' +
				'<td class="text-center">' +
				'<button class="btn btn-xs btn-danger hapus-barang">' +
				'<i class="fas fa-times fa-fw"></i>' +
				'</button>' +
				'</td>' +
				'</tr>'
			$("table#tabelBarang tbody").append(html)
		}

		$("table#tabelBarang").on("click", ".hapus-barang", function () {
			$(this).closest("tr").remove();
		});
	})
</script>