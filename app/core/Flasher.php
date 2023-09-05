<?php

class Flasher {
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' fade show" role="alert">
            Data Guru <strong> ' . $_SESSION['flash']['pesan'] . ' </strong> ' . $_SESSION['flash']['aksi'] . '
            </div>';
            unset($_SESSION['flash']);
        }
    }
    public static function setFlashh($pesan, $aksi, $tipe)
    {
        $_SESSION['flashh'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }
    public static function flashh()
    {
        if( isset($_SESSION['flashh']) ) {
            echo '<div class="alert alert-' . $_SESSION['flashh']['tipe'] . ' fade show" role="alert">
            Data Siswa <strong> ' . $_SESSION['flashh']['pesan'] . ' </strong> ' . $_SESSION['flashh']['aksi'] . '
            </div>';
            unset($_SESSION['flashh']);
        }
    }
}
// <button type="button" class="close" data-dismiss="alert" aria-label="Close" aria-hidden="true">
// <span aria-hidden="true">&times;</span>
// </button>