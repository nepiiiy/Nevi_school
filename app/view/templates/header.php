<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= BASE_URL; ?>">
                <img src="<?= BASE_URL; ?>/img/icon.png" alt="Logo Sekolah" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only" style="display: none;">(current)</span></a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Kompetensi Keahlian</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/komli/kuliner">Kuliner</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/komli/dpib">Design Pemodelan dan Informasi Bangunan</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/komli/rpl">Rekayasa Perangkat Lunak</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/komli/tptu">Teknik Pemanasan, Tata Udara dan Pendinginan</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/komli/akl">Akuntansi</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/komli/kgsp">Teknik Konstruksi dan Perumahan</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL; ?>/komli/tp">Teknik Pengelasan</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/guru/index">Data Guru</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa/index">Data Siswa</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user/profile">About Me</a>
                </div>
            </div>
            <form class="d-flex justify-content-end" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Cari</button>
            </form>
        </div>
    </nav>