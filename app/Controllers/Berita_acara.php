<?php

namespace App\Controllers;

use App\Models\M_berita_acara;

class Berita_acara extends BaseController
{
	private $M_berita_acara;
	
	public function __construct()
	{
		$this->M_berita_acara = new M_berita_acara();
	}
	
	public function index()
	{
		$data['page'] = "berita_acara/index";
		$data['pageIcon'] = "fas fa-user fa-sm fa-fw mr-2";
		$data['pageTitle'] = "Berita Acara";
		$data['beritaAcara'] = $this->M_berita_acara->findAll();
		$this->render($data);
	}
}
