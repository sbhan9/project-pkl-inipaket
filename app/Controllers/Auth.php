<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\OrderModel;
use App\Models\InformasiModel;
use CodeIgniter\Database\MySQLi\Connection;
use CodeIgniter\I18n\Time;
use Config\Services;

class Auth extends BaseController
{
	protected $orderModel;
	protected $informasiModel;
	public function __construct()
	{
		$this->orderModel = new OrderModel();
		$this->informasiModel = new InformasiModel();
	}

	public function index()
	{
		$informasi = $this->informasiModel->findAll();
		$data = [
			'title' => 'Inipaket Official',
			'informasi' =>  $informasi,
			'validasi' => \Config\Services::validation()
		];
		
		return view('auth/index', $data);
	}

	public function cekresi()
	{
		// validasi 
		if (!$this->validate([
			'kode_barang' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nomor resi tidak boleh kosong'
				]
			]
		])) {
			return redirect()->to('/')->withInput();
		}
		$informasi = $this->informasiModel->findAll();
		$kodeBarang = $this->request->getVar('kode_barang');
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM tbl_order WHERE kode_barang = '$kodeBarang'");
		$cekResi = $query->getResultArray();
		if (empty($cekResi)) {
			session()->setFlashdata('resiKosong', 'mohon maaf nomor resi yang anda masukan tidak terdaftar');
			return redirect()->to('/');
		}else {
			$data['result'] = $cekResi;
			$data['informasi'] = $informasi;
			$data['title'] = 'Cek Resi';
			return view('auth/cekresi', $data);
		}
	}

	public function order()
	{
		$data = [
			'title' => 'Order || Inipaket',
			'validasi' => \Config\Services::validation()
		];

		return view('auth/order', $data);
	}

	public function save()
	{
		// validasi order
		if (!$this->validate([
			'nama_order' => [
				'rules' => 'required|alpha_space',
				'errors' => [
					'required' => 'nama anda harus di isi',
					'alpha_space' => 'kolom nama harus berisi abjad bukan angka'
				]
			],
			'email_pengorder' => [
				'rules' => 'required|valid_emails',
				'errors' => [
					'required' => 'email anda harus di isi',
					'valid_emails' => 'penulisan email salah'
				]
			],
			'berat_barang' => [
				'rules' => 'required|alpha_numeric_space',
				'errors' => [
					'required' => 'kolom input berat barang harus di isi',
					'alpha_numeric_space' => 'tuliskan berat beserta satuannya'
				]
			],
			'jenis_paket' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'jenis paket harus di isi'
				]
			],
			'nama_penerima' => [
				'rules' => 'required|alpha_space',
				'errors' => [
					'required' => 'nama penerima paket harus di isi',
					'alpha_space' => 'kolom ini harus berisi abjad bukan angka'
				]
			],
			'email_penerima' => [
				'rules' => 'required|valid_emails',
				'errors' => [
					'required' => 'email penerima paket harus di isi',
					'valid_emails' => 'penulisan email salah'
				]
			],
			'alamat_penerima' => [
				'rules' => 'required|alpha_numeric_punct',
				'errors' => [
					'required' => 'alamat penerima paket harus di isi',
					'alpha_numeric_punct' => 'alamat penerima harus berisi alamat yang benar (rt/rw)'
				]
			],
			'nohp_pengorder' => [
				'rules' => 'required|numeric|min_length[11]|max_length[13]',
				'errors' => [
					'required' => 'no. hp anda harus di isi',
					'numeric' => 'no. hp anda harus berisi angka',
					'min_length' => 'no. hp anda kurang dari 12',
					'max_length' => 'no. hp anda lebih dari 12'
				]
			],
			'nohp_penerima' => [
				'rules' => 'required|numeric|min_length[11]|max_length[13]',
				'errors' => [
					'required' => 'no. hp penerima paket harus di isi',
					'numeric' => 'no. hp penerima paket harus berisi angka',
					'min_length' => 'no. hp penerima paket kurang dari 12',
					'max_length' => 'no. hp penerima paket lebih dari 12'
				]
			],
		])) {
			return redirect()->to('/auth/order')->withInput();
		}

		// membuat kode barang otomatis dengan menambah id terbesar
		$db = \Config\Database::connect();
		$query = $db->query("SELECT MAX(id) as maxid FROM tbl_order");
		$data = $query->getResultArray();
		// ambil array index ke nol
		$kodeBarang = $data[0];
		// ambil array index maxid
		$ambilMaxid = $kodeBarang['maxid'];
		$tambahMaxid = $ambilMaxid + 1;
		$huruf = "ipaket";
		$myTime = new Time('now', 'Asia/Jakarta');
		$tanggal = date('dm');
		$kodeBarang = $huruf . $tanggal . sprintf("%02s", $tambahMaxid);
		
		// simpan ke database
		$this->orderModel->save([
			'nama_order' => $this->request->getVar('nama_order'),
			'email_pengorder' => $this->request->getVar('email_pengorder'),
			'nohp_pengorder' => $this->request->getVar('nohp_pengorder'),
			'berat_barang' => $this->request->getVar('berat_barang'),
			'jenis_paket' => $this->request->getVar('jenis_paket'),
			'nama_penerima' => $this->request->getVar('nama_penerima'),
			'email_penerima' => $this->request->getVar('email_penerima'),
			'nohp_penerima' => $this->request->getVar('nohp_penerima'),
			'kode_barang' => $kodeBarang,
			'alamat_penerima' => $this->request->getVar('alamat_penerima')
		]);

		session()->setFlashdata('orderberhasil', 'Order Paket Berhasil');
		return redirect()->to('/');
	}	

	public function delete($id)
	{
		$this->orderModel->delete($id);
		session()->setFlashdata('terkirim', '<b>paket sudah diterima</b>');
		return redirect()->to('/dashboard');
	}
	
}