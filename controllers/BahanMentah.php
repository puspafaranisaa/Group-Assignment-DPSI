<?php

class BahanMentah extends Controller
{
	public function index()
	{
		$data['judul'] = 'Dashboard Inventory Resto';
		$data['dbd'] = $this->model('BahanMentah_model')->getAllData();
		$this->view('templates/header', $data);
		$this->view('bahanmentah/index', $data);
		$this->view('templates/footer');
	}

	public function detail($idBahan)
	{
		$data['judul'] = 'Detail Inventory Resto';
		$data['dbd'] = $this->model('BahanMentah_model')->getDataById($idBahan);
		$this->view('templates/header', $data);
		$this->view('bahanmentah/detail', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if ($this->model('BahanMentah_model')->tambahDataDashboard($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/bahanmentah');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/bahanmentah');
			exit;
		}
	}

	public function hapus($idBahan)
	{
		if ($this->model('BahanMentah_model')->hapusDataDashboard($idBahan) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASEURL . '/bahanmentah');
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASEURL . '/bahanmentah');
			exit;
		}
	}

	public function cari()
	{
		$data['judul'] = 'bahanmentah Inventory Resto';
		$data['dbd'] = $this->model('BahanMentah_model')->getFindData();
		$this->view('templates/header', $data);
		$this->view('bahanmentah/index', $data);
		$this->view('templates/footer');
	}
}
