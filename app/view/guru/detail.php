<div class="container mt-5">
    <div class="card" style="width: 25rem;">
    <div class="card-header">
    Data Guru
  </div>
        <div class="card-body">
            <h5 class="card-title">
                <?= $data['guru']['nama_guru']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted mt-2"><?= $data['guru']['mapel'] ?></h6>
            <p class="card-text"><?= $data['guru']['prod_nonprod'] ?></p>
            <a href="<?= BASE_URL; ?>/guru/index" class="btn btn-sm btn-warning">Kembali</a>
        </div>
    </div>
</div>