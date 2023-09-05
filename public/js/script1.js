$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#staticBackdropLabel1').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nis').val('');
        $('#nama_siswa').val('');
        $('#jenis_kelamin').val('');
        $('#komli').val('');
        $('#alamat').val('');
        $('#id').val('');
    });
    $('.tampilModalUbahSiswa').on('click', function () {
        $('#staticBackdropLabel1').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/ubah');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpmvc/public/siswa/getubah',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nis').val(data.nis);
                $('#nama_siswa').val(data.nama_siswa);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#komli').val(data.komli);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }
        });
    });
});