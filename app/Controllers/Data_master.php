<?php

namespace App\Controllers;

use App\Models\M_divisi;
use App\Models\M_jabatan;

class Data_master extends BaseController
{
	private $M_divisi;
	private $M_jabatan;
	
	public function __construct()
	{
		$this->M_divisi = new M_divisi();
		$this->M_jabatan = new M_jabatan();
	}
	
	public function divisi()
	{
		$data['page'] = "data_master/data_divisi/index";
		$data['pageIcon'] = "fas fa-user fa-sm fa-fw mr-2";
		$data['pageTitle'] = "Data Divisi";
		$data['divisi'] = $this->M_divisi->findAll();
		$this->render($data);
	}
	
	public function jabatan()
	{
		$data['page'] = "data_master/data_jabatan/index";
		$data['pageIcon'] = "fas fa-user fa-sm fa-fw mr-2";
		$data['pageTitle'] = "Data Jabatan";
		$data['jabatan'] = $this->M_jabatan->findAll();
		$this->render($data);
	}
}
