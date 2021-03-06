<style>
	#sig-canvas {
		border: 2px dotted #CCCCCC;
		border-radius: 15px;
		cursor: crosshair;
	}
</style>
<div class="row">
	<div class="col-sm-12">
		<div class="card shadow-lg">
			<div class="card-header">
				<a href="<?= base_url('berita-acara/tambah') ?>" role="button" class="btn btn-sm btn-outline-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<div class="table-responsive">
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
						<?php
						foreach ($beritaAcara as $b) { ?>
							<tr>
								<td class="text-center"><?= $b['beritaAcaraId'] ?></td>
								<td><?= $b['beritaAcaraNama'] ?></td>
								<td class="text-center"><?= $b['beritaAcaraTanggal'] ?></td>
								<td class="text-center">
									<?php
									if ($b['posting']) { ?>
										<span class="badge badge-success">Diposting</span>
										<?php
									} else { ?>
										<a href="" role="button" class="btn btn-sm btn-outline-danger">Posting</a>
										<?php
									} ?>
								</td>
								<td class="text-center">
									<div class="btn-group text-nowrap" role="group" aria-label="Basic example">
										<a href="<?= base_url('berita-acara/preview?beritaAcaraId=' . $b['beritaAcaraId']) ?>" role="button" class="btn btn-sm btn-outline-danger" target="_blank">Lihat Surat</a>
										<a href="javascript:void(0)" data-beritaacaraid="<?= $b['beritaAcaraId'] ?>" data-toggle="modal" data-target="#tambahSignature" class="btn btn-sm btn-outline-primary tambah-signature">Buat TTD</a>
									</div>
								</td>
							</tr>
							<?php
						} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="tambahSignature" tabindex="-1" aria-labelledby="tambahSignatureLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahSignatureLabel">Atur Tdan Tangan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('berita-acara/tambah-ttd') ?>" id="form-signature" method="post">
				<div class="modal-body text-center">
					<div class="mb-2">
						<select name="spotTtd" class="form-control" required>
							<option value="ttd1">TTD 1</option>
							<option value="ttd2">TTD 2</option>
							<option value="ttd3">TTD 3</option>
						</select>
					</div>
					<canvas id="sig-canvas" width="620" height="160">
						Get a better browser, bro.
					</canvas>
					<input type="text" name="signature" required>
					<input type="text" name="beritaAcaraId" required>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary btn-sm" id="sig-submitBtn">Simpan</button>
					<button type="button" class="btn btn-warning btn-sm" id="sig-clearBtn">Hapus</button>
					<button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	document.addEventListener("DOMContentLoaded", () => {
		let table = $("table").DataTable();

		$("a.tambah-signature").on('click', function () {
			let beritaacaraid = $(this).data('beritaacaraid')
			$("form#form-signature input[name=beritaAcaraId]").val(beritaacaraid)
		})

		window.requestAnimFrame = (function (callback) {
			return window.requestAnimationFrame ||
				window.webkitRequestAnimationFrame ||
				window.mozRequestAnimationFrame ||
				window.oRequestAnimationFrame ||
				window.msRequestAnimaitonFrame ||
				function (callback) {
					window.setTimeout(callback, 1000 / 60);
				};
		})();

		let canvas = document.getElementById("sig-canvas");
		let ctx = canvas.getContext("2d");
		ctx.strokeStyle = "#222222";
		ctx.lineWidth = 4;

		let drawing = false;
		let mousePos = {
			x: 0,
			y: 0
		};
		let lastPos = mousePos;

		canvas.addEventListener("mousedown", function (e) {
			drawing = true;
			lastPos = getMousePos(canvas, e);
		}, false);

		canvas.addEventListener("mouseup", function (e) {
			drawing = false;
		}, false);

		canvas.addEventListener("mousemove", function (e) {
			mousePos = getMousePos(canvas, e);
		}, false);

		// Add touch event support for mobile
		canvas.addEventListener("touchstart", function (e) {

		}, false);

		canvas.addEventListener("touchmove", function (e) {
			let touch = e.touches[0];
			let me = new MouseEvent("mousemove", {
				clientX: touch.clientX,
				clientY: touch.clientY
			});
			canvas.dispatchEvent(me);
		}, false);

		canvas.addEventListener("touchstart", function (e) {
			mousePos = getTouchPos(canvas, e);
			let touch = e.touches[0];
			let me = new MouseEvent("mousedown", {
				clientX: touch.clientX,
				clientY: touch.clientY
			});
			canvas.dispatchEvent(me);
		}, false);

		canvas.addEventListener("touchend", function (e) {
			let me = new MouseEvent("mouseup", {});
			canvas.dispatchEvent(me);
		}, false);

		function getMousePos(canvasDom, mouseEvent) {
			let rect = canvasDom.getBoundingClientRect();
			return {
				x: mouseEvent.clientX - rect.left,
				y: mouseEvent.clientY - rect.top
			}
		}

		function getTouchPos(canvasDom, touchEvent) {
			let rect = canvasDom.getBoundingClientRect();
			return {
				x: touchEvent.touches[0].clientX - rect.left,
				y: touchEvent.touches[0].clientY - rect.top
			}
		}

		function renderCanvas() {
			if (drawing) {
				ctx.moveTo(lastPos.x, lastPos.y);
				ctx.lineTo(mousePos.x, mousePos.y);
				ctx.stroke();
				lastPos = mousePos;
			}
		}

		// Prevent scrolling when touching the canvas
		document.body.addEventListener("touchstart", function (e) {
			if (e.target == canvas) {
				e.preventDefault();
			}
		}, false);
		document.body.addEventListener("touchend", function (e) {
			if (e.target == canvas) {
				e.preventDefault();
			}
		}, false);
		document.body.addEventListener("touchmove", function (e) {
			if (e.target == canvas) {
				e.preventDefault();
			}
		}, false);

		(function drawLoop() {
			requestAnimFrame(drawLoop);
			renderCanvas();
		})();

		function clearCanvas() {
			canvas.width = canvas.width;
		}

		// Set up the UI
		let sigText = document.getElementById("sig-dataUrl");
		let sigImage = document.getElementById("sig-image");
		let clearBtn = document.getElementById("sig-clearBtn");
		let submitBtn = document.getElementById("sig-submitBtn");
		clearBtn.addEventListener("click", function (e) {
			clearCanvas();
			sigText.innerHTML = "Data URL for your signature will go here!";
			sigImage.setAttribute("src", "");
		}, false);
		submitBtn.addEventListener("click", function (e) {
			let dataUrl = canvas.toDataURL();
			$("form#form-signature input[name=signature]").val(dataUrl)
		}, false);
	})
</script>