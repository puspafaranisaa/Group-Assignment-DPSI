<?php

class BahanJadi_model
{
    private $table = 'bahan_jadi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBahanJadi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBahanById($idBahanJadi)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idBahanJadi=:idBahanJadi');
        $this->db->bind('idBahanJadi', $idBahanJadi);
        return $this->db->single();
    }

    public function tambahDataBahan($data)
    {
        $query = "INSERT INTO bahan_jadi
					VALUES
				  (:idBahanJadi, :namaBahanJadi, :jumlahPorsiStok, :tanggalReStok)";

        $this->db->query($query);
        $this->db->bind('idBahanJadi', $data['idBahanJadi']);
        $this->db->bind('namaBahanJadi', $data['namaBahanJadi']);
        $this->db->bind('jumlahPorsiStok', $data['jumlahPorsiStok']);
        $this->db->bind('tanggalReStok', $data['tanggalReStok']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBahan($idBahanJadi)
    {
        $query = "DELETE FROM bahan_jadi WHERE idBahanJadi = :idBahanJadi";

        $this->db->query($query);
        $this->db->bind('idBahanJadi', $idBahanJadi);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getFindBahan()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM bahan_jadi WHERE namaBahanJadi LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}
