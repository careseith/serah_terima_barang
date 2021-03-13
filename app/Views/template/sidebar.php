<?php
$request = \Config\Services::request();
$url1 = $request->uri->getSegment(1);
$url2 = $request->uri->getSegment(2);
?>
<li class="nav-item">
	<a href="<?= base_url('/berita-acara') ?>" class="nav-link <?= $url1 == 'berita-acara' ? 'active' : '' ?>">
		<i class="nav-icon fas fa-th"></i>
		<p>
			Berita Acara
		</p>
	</a>
</li>
<li class="nav-item <?= $url1 == 'data-master' ? 'menu-open' : '' ?>">
	<a href="#" class="nav-link <?= $url1 == 'data-master' ? 'active' : '' ?>">
		<i class="nav-icon fas fa-tachometer-alt"></i>
		<p>
			Data Master
			<i class="right fas fa-angle-left"></i>
		</p>
	</a>
	<ul class="nav nav-treeview">
		<li class="nav-item">
			<a href="<?= base_url('/data-master/data-divisi') ?>" class="nav-link <?= $url1 . '/' . $url2 == 'data-master/data-divisi' ? 'active' : '' ?>">
				<i class="far fa-circle nav-icon"></i>
				<p>Data Divisi</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= base_url('/data-master/data-jabatan') ?>" class="nav-link <?= $url1 . '/' . $url2 == 'data-master/data-jabatan' ? 'active' : '' ?>">
				<i class="far fa-circle nav-icon"></i>
				<p>Data Jabatan</p>
			</a>
		</li>
	</ul>
</li>