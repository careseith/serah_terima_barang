<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Starter</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="<?= base_url('public/template') ?>/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url('public/template') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('public/template') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('public/template') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('public/template') ?>/dist/css/adminlte.min.css">
	<script src="<?= base_url('public/template') ?>/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
					<i class="fas fa-th-large"></i>
				</a>
			</li>
		</ul>
	</nav>
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<a href="index3.html" class="brand-link">
			<img src="<?= base_url('public/template') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
			<span class="brand-text font-weight-light">AdminLTE 3</span>
		</a>
		<div class="sidebar">
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="<?= base_url('public/template') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block">Alexander Pierce</a>
				</div>
			</div>
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<?= view('template/sidebar') ?>
				</ul>
			</nav>
		</div>
	</aside>
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">
							<i class="<?= $pageIcon ?>"></i><?= $pageTitle ?>
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="container-fluid">
				<?= view($page) ?>
			</div>
		</div>
	</div>
	<footer class="main-footer">
		<div class="float-right d-none d-sm-inline">
			Anything you want
		</div>
		<strong>Copyright &copy; 2014-2020
			<a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
	</footer>
</div>
<script src="<?= base_url('public/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('public/template') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('public/template') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('public/template') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('public/template') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('public/template') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('public/template') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('public/template') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('public/template') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('public/template') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url('public/template') ?>/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
	$(document).ready(function () {
		$('select.select2').select2({
			theme: 'bootstrap4',
		});
	});
</script>
</body>
</html>
