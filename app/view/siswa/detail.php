<div class="container mt-5">
    <div class="card" style="width: 25rem;">
    <div class="card-header">
    Data Siswa
  </div>
        <div class="card-body">
            <h5 class="card-title">
                <?= $data['siswa']['nama_siswa']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted mt-2"><?= $data['siswa']['nis'] ?></h6>
            <p class="card-text"><?= $data['siswa']['jenis_kelamin'] ?></p>
            <p class="card-text"><?= $data['siswa']['komli'] ?></p>
            <p class="card-text"><?= $data['siswa']['alamat'] ?></p>
            <a href="<?= BASE_URL; ?>/siswa/index" class="btn btn-sm btn-warning">Kembali</a>
        </div>
    </div>
</div>