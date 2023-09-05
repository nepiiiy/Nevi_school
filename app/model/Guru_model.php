<?php
class Guru_model{
    private $table = 'guru';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllData()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function getGuruById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahGuru($data)
    {
        $query = " INSERT INTO guru VALUES
        ('', :nama_guru, :mapel, :prod_nonprod ) ";
        $this->db->query($query);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('prod_nonprod', $data['prod_nonprod']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusGuru($id)
    {
        $query = "DELETE FROM guru WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahGuru($data)
    {
        $query = "UPDATE guru SET
        nama_guru = :nama_guru,
        mapel = :mapel,
        prod_nonprod = :prod_nonprod
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('prod_nonprod', $data['prod_nonprod']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}