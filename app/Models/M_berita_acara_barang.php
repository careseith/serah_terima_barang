<?php

namespace App\Models;

use CodeIgniter\Model;

class M_berita_acara_barang extends Model
{
	protected $table = 'tb_berita_acara_barang';
	protected $primaryKey = 'beritaAcaraBarangId';
	protected $returnType = 'array';
	protected $allowedFields = [
		'beritaAcaraId',
		'beritaAcaraBarangNama',
		'beritaAcaraBarangMerk',
		'beritaAcaraBarangAlat',
		'beritaAcaraBarangJumlah'
	];
}