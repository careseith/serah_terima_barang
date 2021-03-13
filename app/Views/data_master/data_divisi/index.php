<div class="row">
	<div class="col-sm-12">
		<div class="card shadow-lg">
			<div class="card-body">
				<table class="table" style="width: 100%">
					<thead class="text-center">
					<tr>
						<th style="width: 10%">Id Divisi</th>
						<th>Nama Divisi</th>
						<th style="width: 10%">Menu</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($divisi as $d) { ?>
						<tr>
							<td class="text-center"><?= $d['divisiId'] ?></td>
							<td><?= $d['divisiNama'] ?></td>
							<td><?= $d['divisiId'] ?></td>
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