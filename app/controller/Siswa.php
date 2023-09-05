<?php
class Siswa extends Controller
{
    public function index() {
        $data['judul'] = "Data siswa";
        $data['siswa'] = $this->model("Siswa_model")->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail Guru";
        $data['siswa'] = $this->model("Siswa_model")->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Siswa_model')->tambahSiswa($_POST) > 0) {
            Flasher::setFlashh('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/siswa/index');
            exit;
        } else {
            Flasher::setFlashh('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/siswa/index');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Siswa_model')->hapusSiswa($id) > 0) {
            Flasher::setFlashh('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/siswa/index');
            exit;
        } else {
            Flasher::setFlashh('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/siswa/index');
            exit;
        }
    }
    public function getubah()
    {
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }
    public function ubah()
    {
        if ($this->model('Siswa_model')->ubahSiswa($_POST) > 0) {
            Flasher::setFlashh('berhasil', ' diubah', 'success');
            header('Location: ' . BASE_URL . '/siswa/index');
            exit;
        } else {
            Flasher::setFlashh('gagal', ' diubah', 'danger');
            header('Location: ' . BASE_URL . '/siswa/index');
            exit;
        }
    }
}