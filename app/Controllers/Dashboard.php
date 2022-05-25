<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\InformasiModel;
use App\Models\OrderModel;

class Dashboard extends BaseController
{
	protected $orderModel;
	protected $adminModel;
	protected $informasiModel;
	public function __construct()
	{
		$this->orderModel = new OrderModel();
		$this->informasiModel = new InformasiModel();
		$this->adminModel = new AdminModel();
	}
	public function index()
	{
		$order = $this->orderModel->findAll();
		$data = [
			'title' => 'Dashboard',
			'order' => $order,
			'validasi' => \Config\Services::validation()
		];
		return view('dashboard/index', $data);
	}
	
	public function informasi()
	{
		$informasi = $this->informasiModel->findAll();
		$data = [
			'title' => 'Informasi',
			'informasi' => $informasi
		];
		return view('informasi/index', $data);
	}

	public function edit($id)
	{
		$informasi = $this->informasiModel->find($id);
		$data = [
			'title' => 'Edit Informasi',
			'informasi' => $informasi
		];
			
		return view('informasi/edit', $data);
	}

	public function update($id)
	{
		// dd($this->request->getVar());
		$this->informasiModel->save([
			'id' => $id,
			'pengertian' => $this->request->getVar('pengertian'),
			'jam_kerja' => $this->request->getVar('jam_kerja'),
			'paket_reguler' => $this->request->getVar('paket_reguler'),
			'paket_cepat' => $this->request->getVar('paket_cepat'),
			'paket_kilat' => $this->request->getVar('paket_kilat'),
			'harga' => $this->request->getVar('harga')
		]);
		
		session()->setFlashdata('teredit', 'Data informasi berhasil diedit');
		return redirect()->to('/dashboard/informasi');
	}

	public function editdata($id)
	{
		$dataOrder = $this->orderModel->find($id);
		$data = [
			'title' => 'Edit Data Order',
			'dataOrder' => $dataOrder
		];

		return view('dashboard/edit', $data);
	}

	public function editpengiriman()
	{
		$this->orderModel->save([
			'id' => $this->request->getVar('id'),
			'status_pengiriman' => $this->request->getVar('statusPengiriman')
		]);

		return redirect()->to('/dashboard');
	}

	public function tampilpaket()
	{
		// validasi
		if (!$this->validate([
			'cariPaket' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'tidak boleh kosong'
				]
			]
		])) {
			return redirect()->to('/dashboard')->withInput();
		}
		
		$cariBarang = $this->request->getVar('cariPaket');
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM tbl_order WHERE kode_barang = '$cariBarang'");
		$hasil = $query->getResultArray();
		if (empty($hasil)) {
			session()->setFlashdata('cariKosong', 'Kode barang tidak terdaftar');
			return redirect()->to('/dashboard');
		}else {
			$data = [
				'title' => 'Rincian Detail Barang',
				'cariBarang' => $hasil
			];
			return view('dashboard/informasibarang', $data);
		}
	}
	
}