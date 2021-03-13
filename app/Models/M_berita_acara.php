<?php

namespace App\Models;

use CodeIgniter\Model;

class M_berita_acara extends Model
{
	protected $table = 'tb_berita_acara';
	protected $primaryKey = 'beritaAcaraId';
	protected $returnType = 'array';
	protected $allowedFields = ['beritaAcaraNama', 'beritaAcaraTanggal', 'beritaAcaraTempat', 'pihakSatuId', 'pihakSatuNama', 'pihakSatuJabatan', 'pihakSatuDivisi', 'pihakDuaId', 'pihakDuaNama', 'pihakDuaJabatan', 'pihakDuaDivisi', 'beritaAcaraBodySatu', 'beritaAcaraBodyDua', 'ttd1', 'ttd2', 'ttd3', 'posting'];
}