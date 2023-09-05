<?php
class Siswa_model{

    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllSiswa()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function getSiswaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahSiswa($data)
    {
        $query = " INSERT INTO siswa VALUES
        ('', :nis, :nama_siswa, :jenis_kelamin, :komli, :alamat ) ";
        $this->db->query($query);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama_siswa', $data['nama_siswa']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('komli', $data['komli']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusSiswa($id)
    {
        $query = "DELETE FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahSiswa($data)
    {
        $query = "UPDATE siswa SET
        nis = :nis,
        nama_siswa = :nama_siswa,
        jenis_kelamin = :jenis_kelamin,
        komli = :komli,
        alamat = :alamat
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama_siswa', $data['nama_siswa']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('komli', $data['komli']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    
}