<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>
            <div class="col-8">
                <h3>Data Guru</h3>
                <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                    </svg>Tambah</button>
                <div class="table-responsive mt-3">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            $no = 1;
                            ?>

                            <?php foreach ($data['guru'] as $guru) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $guru['nama_guru']; ?></td>
                                    <td>
                                    <span><a href="<?= BASE_URL; ?>/guru/detail/<?= $guru['id']; ?>" class="badge text-bg-primary" style="text-decoration: none;">Baca</a></span>
                                    <span><a href="<?= BASE_URL; ?>/guru/ubah/<?= $guru['id']; ?>" class="badge text-bg-warning tampilModalUbah" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?=$guru['id']; ?>" style="text-decoration: none;">Ubah</a></span>
                                    <span><a href="<?= BASE_URL; ?>/guru/hapus/<?= $guru['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin ingin menghapus data ini?');" style="text-decoration: none;">Hapus</a></span>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- modal tambah guru -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL; ?>/guru/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_guru" name="nama_guru">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Mata Pelajaran</label>
                            <select class="form-select" aria-label="Default select example" name="mapel" id="mapel">
                                <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Pemrograman Web dan Perangkat Bergerak">Pemrograman Web dan Perangkat Bergerak</option>
                                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                <option value="Matematika">Matematika</option>
                                <option value="PPKn">PPKn</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Golongan Mapel</label>
                            <select class="form-select" aria-label="Default select example" name="prod_nonprod" id="prod_nonprod">
                                <option value="Produktif">Produktif</option>
                                <option value="Non-Produktif">Non-Produktif</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>
</body>