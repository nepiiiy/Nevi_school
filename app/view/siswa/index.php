<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <?php Flasher::flashh(); ?>
                </div>
            </div>
            <div class="col-8">
                <h3>Data Siswa</h3>
                <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                    </svg>Tambah</button>
                <div class="table-responsive mt-3">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            $no = 1;
                            ?>

                            <?php foreach ($data['siswa'] as $siswa) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $siswa['nis']; ?></td>
                                    <td><?= $siswa['nama_siswa']; ?></td>
                                    <td>
                                    <span><a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="badge text-bg-primary" style="text-decoration: none;">Baca</a></span>
                                    <span><a href="<?= BASE_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="badge text-bg-warning tampilModalUbahSiswa" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?=$siswa['id']; ?>" style="text-decoration: none;">Ubah</a></span>
                                    <span><a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin ingin menghapus data ini?');" style="text-decoration: none;">Hapus</a></span>
                                </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel1">Tambah Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL; ?>/siswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis">
                        </div>    
                    <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                                <option selected>Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kompetensi Keahlian</label>
                            <select class="form-select" aria-label="Default select example" name="komli" id="komli">
                                <option selected>Pilih Kompetensi Keahlian</option>
                                <option value="Produktif">RPL</option>
                                <option value="DPIB">DPIB</option>
                                <option value="TPTU">TPTU</option>
                                <option value="TP">TP</option>
                                <option value="Tata Boga">Tata Boga</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="KGSP">KGSP</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Alamat</label>
                            <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
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