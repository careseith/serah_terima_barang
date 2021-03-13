<?php

namespace App\Models;

use CodeIgniter\Model;

class M_jabatan extends Model
{
	protected $table = 'tb_jabatan';
	protected $primaryKey = 'jabatanId';
	protected $returnType = 'array';
	protected $allowedFields = ['jabatanNama'];
}