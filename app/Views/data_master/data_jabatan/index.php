<div class="row">
	<div class="col-sm-12">
		<div class="card shadow-lg">
			<div class="card-body">
				<table class="table" style="width: 100%">
					<thead class="text-center">
					<tr>
						<th style="width: 10%">Id Jabatan</th>
						<th>Nama Jabatan</th>
						<th style="width: 10%">Menu</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($jabatan as $j) { ?>
						<tr>
							<td class="text-center"><?= $j['jabatanId'] ?></td>
							<td><?= $j['jabatanNama'] ?></td>
							<td><?= $j['jabatanId'] ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	document.addEventListener("DOMContentLoaded", () => {
		let table = $("table").DataTable();
	})
</script>