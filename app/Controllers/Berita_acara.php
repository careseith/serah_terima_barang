<?php

namespace App\Controllers;

use App\Models\M_berita_acara;
use App\Models\M_berita_acara_barang;
use App\Models\M_pegawai;
use Exception;

class Berita_acara extends BaseController
{
	private $M_berita_acara;
	private $M_berita_acara_barang;
	private $M_pegawai;

	public function __construct()
	{
		$this->M_berita_acara = new M_berita_acara();
		$this->M_berita_acara_barang = new M_berita_acara_barang();
		$this->M_pegawai = new M_pegawai();
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
		if ($this->request->getMethod() == 'get') {
			$data['page'] = "berita_acara/tambah";
			$data['pageIcon'] = "fas fa-user fa-sm fa-fw mr-2";
			$data['pageTitle'] = "Tambah Berita Acara";
			$data['pegawai'] = $this->M_pegawai->builder()->join("tb_jabatan AS b", "tb_pegawai.jabatanId = b.jabatanId")->join("tb_divisi AS c", "tb_pegawai.divisiId = c.divisiId")->get()->getResultArray();
			$this->render($data);
		} else {
			$this->_tambah();
		}
	}

	private function _tambah()
	{
		try {
			$this->db->transStart();
			$beritaAcaraId = $this->M_berita_acara->insert($this->request->getPost());
			$beritaAcaraBarangNama = $this->request->getPost('beritaAcaraBarangNama');
			$beritaAcaraBarangMerk = $this->request->getPost('beritaAcaraBarangMerk');
			$beritaAcaraBarangAlat = $this->request->getPost('beritaAcaraBarangAlat');
			$beritaAcaraBarangJumlah = $this->request->getPost('beritaAcaraBarangJumlah');
			foreach ($beritaAcaraBarangNama as $i => $item) {
				$ins = [
					'beritaAcaraId'           => $beritaAcaraId,
					'beritaAcaraBarangNama'   => $beritaAcaraBarangNama[$i],
					'beritaAcaraBarangMerk'   => $beritaAcaraBarangMerk[$i],
					'beritaAcaraBarangAlat'   => $beritaAcaraBarangAlat[$i],
					'beritaAcaraBarangJumlah' => $beritaAcaraBarangJumlah[$i],
				];
				$this->M_berita_acara_barang->insert($ins);
			}
			$this->db->transComplete();
		} catch (Exception $error) {
			echo $error->getMessage();
		}
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

	public function tambahTtd()
	{
		$data = $this->request->getPost();
		$update[$data['spotTtd']] = $data['signature'];
		try {
			$this->db->transStart();
			$this->M_berita_acara->update($data['beritaAcaraId'], $update);
			$this->db->transComplete();
		} catch (Exception $error) {
			echo $error->getMessage();
		}
	}
}
