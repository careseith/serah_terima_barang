<div class="row">
	<div class="col-sm-12">
		<div class="card shadow-lg">
			<div class="card-body">
				<table class="table" style="width: 100%">
					<thead class="text-center">
					<tr>
						<th style="width: 10%">Id Berita Acara</th>
						<th>Berita Acara</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th style="width: 10%">Menu</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($beritaAcara as $b) { ?>
						<tr>
							<td class="text-center"><?= $b['beritaAcaraId'] ?></td>
							<td><?= $b['beritaAcaraNama'] ?></td>
							<td class="text-center"><?= $b['beritaAcaraTanggal'] ?></td>
							<td class="text-center">
								<?php if ($b['posting']) { ?>
									<span class="badge badge-success">Diposting</span>
								<?php } else { ?>
									<a href="" role="button" class="btn btn-sm btn-outline-danger">Posting</a>
								<?php } ?>
							</td>
							<td><?= $b['beritaAcaraId'] ?></td>
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