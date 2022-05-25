<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
   protected $table = 'tbl_order';
   protected $allowedFields = ['nama_order', 'email_pengorder', 'nohp_pengorder', 'berat_barang', 'jenis_paket', 'nama_penerima', 'email_penerima', 'alamat_penerima', 'nohp_penerima', 'kode_barang', 'status_pengiriman'];
   protected $useTimestamps = true;
   protected $createdField  = 'tanggal_order';
   protected $updatedField = '';
}