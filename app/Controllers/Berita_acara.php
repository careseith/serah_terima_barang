<?php

namespace App\Controllers;

use App\Models\M_berita_acara;
use App\Models\M_berita_acara_barang;

class Berita_acara extends BaseController
{
	private $M_berita_acara;
	private $M_berita_acara_barang;

	public function __construct()
	{
		$this->M_berita_acara = new M_berita_acara();
		$this->M_berita_acara_barang = new M_berita_acara_barang();
	}

	public function index()
	{
		$data['page'] = "berita_acara/index";
		$data['pageIcon'] = "fas fa-user fa-sm fa-fw mr-2";
		$data['pageTitle'] = "Berita Acara";
		$data['beritaAcara'] = $this->M_berita_acara->findAll();
		$this->render($data);
	}

	public function tambah()
	{
		$data['page'] = "berita_acara/tambah";
		$data['pageIcon'] = "fas fa-user fa-sm fa-fw mr-2";
		$data['pageTitle'] = "Tambah Berita Acara";
		$this->render($data);
	}

	public function preview()
	{
		$get = [
			'beritaAcaraId' => $this->request->getGet('beritaAcaraId')
		];
		$data['berita'] = $this->M_berita_acara->find($get['beritaAcaraId']);
		$data['barang'] = $this->M_berita_acara_barang->where($get)->findAll();
		echo view("berita_acara/preview", $data);
	}
}
