<?php

namespace App\Models;

use CodeIgniter\Model;

class M_divisi extends Model
{
	protected $table = 'tb_divisi';
	protected $primaryKey = 'divisiId';
	protected $returnType = 'array';
	protected $allowedFields = ['divisiNama'];
}