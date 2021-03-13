<?php

namespace App\Models;

use CodeIgniter\Model;

class M_barang extends Model
{
	protected $table = 'tb_barang';
	protected $primaryKey = 'barangId';
	protected $returnType = 'array';
	protected $allowedFields = ['beritaAcaraId', 'barangNama', 'barangMerk', 'barangAlat', 'barangJumlah'];
}