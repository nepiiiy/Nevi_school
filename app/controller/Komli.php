<?php
class Komli extends Controller
{
    public function kuliner(){
        $data['judul'] = "Kuliner";
        $this->view('templates/header', $data);
        $this->view('komli/kuliner');
        $this->view('templates/footer');
    }
    public function dpib()
    {
        $data['judul'] = "Design Pemodelan dan Informasi Bangunan";
        $this->view('templates/header', $data);
        $this->view('komli/dpib');
        $this->view('templates/footer');
    }
    public function rpl()
    {
        $data['judul'] = "Rekayasa Perangkat Lunak";
        $this->view('templates/header', $data);
        $this->view('komli/rpl');
        $this->view('templates/footer');
    }
    public function tptu()
    {
        $data['judul'] = "Teknik Pemanasan, Tata Udara dan Pendinginan";
        $this->view('templates/header', $data);
        $this->view('komli/tptu');
        $this->view('templates/footer');
    }
    public function akl()
    {
        $data['judul'] = "Akuntansi";
        $this->view('templates/header', $data);
        $this->view('komli/akl');
        $this->view('templates/footer');
    }
    public function kgsp()
    {
        $data['judul'] = "Teknik Konstruksi dan Perumahan";
        $this->view('templates/header', $data);
        $this->view('komli/kgsp');
        $this->view('templates/footer');
    }
    public function tp()
    {
        $data['judul'] = "Teknik Pengelasan";
        $this->view('templates/header', $data);
        $this->view('komli/tp');
        $this->view('templates/footer');
    }
}