<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pegawai extends Model
{
	protected $table = 'tb_pegawai';
	protected $primaryKey = 'pegawaiId';
	protected $returnType = 'array';
	protected $allowedFields = [
		'pegawaiNama',
		'divisiId',
		'jabatanId'
	];
}