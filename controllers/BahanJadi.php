<?php

class BahanJadi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard Inventory Resto';
        $data['dbd'] = $this->model('BahanJadi_model')->getAllBahanJadi();
        $this->view('templates/header', $data);
        $this->view('bahanjadi/index', $data);
        $this->view('templates/footer');
    }

    public function detail($idBahan)
    {
        $data['judul'] = 'Detail Inventory Resto';
        $data['dbd'] = $this->model('BahanJadi_model')->getBahanById($idBahan);
        $this->view('templates/header', $data);
        $this->view('bahanjadi/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('BahanJadi_model')->tambahDataBahan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/bahanjadi');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/bahanjadi');
            exit;
        }
    }

    public function hapus($idBahan)
    {
        if ($this->model('BahanJadi_model')->hapusDataBahan($idBahan) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/bahanjadi');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/bahanjadi');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Dashboard Inventory Resto';
        $data['dbd'] = $this->model('BahanJadi_model')->getFindBahan();
        $this->view('templates/header', $data);
        $this->view('bahanjadi/index', $data);
        $this->view('templates/footer');
    }
}
