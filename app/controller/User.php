<?php
// class User {
//     public function index() {
//         echo "User/index";
//     }

//     public function profile($nama = "Linux",
//     $pekerjaan = "Devs") {
//         echo "Salam kenal saya $nama, saya seorang $pekerjaan";
//     }
// }

class User extends Controller {
    public function index() {
        $data['judul'] = "User";
        $data['currentPage'] = 'blog';
        $this->view('templates/header', $data);
        $this->view("user/index");
        $this->view('templates/footer');
    }

    public function profile($nama = "Nevi Yuniawati", $pekerjaan = "Pelajar", $sekolah = "SMK Negeri 2 Trenggalek", $jurusan = "Rekayasa Perangkat Lunak") {
        $data['judul'] = "User";
        $data['currentPage'] = 'user';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['sekolah'] = $sekolah;
        $data['jurusan'] = $jurusan;
        $this->view('templates/header', $data);
        $this->view("user/profile", $data);
        $this->view('templates/footer');
    }
}