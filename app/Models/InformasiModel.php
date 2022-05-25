<?php

namespace App\Models;

use CodeIgniter\Model;

class InformasiModel extends Model
{
   protected $table = 'tbl_informasi';
   protected $allowedFields = ['pengertian', 'informasi', 'jam_kerja', 'paket_reguler', 'paket_cepat', 'paket_kilat', 'harga'];
}