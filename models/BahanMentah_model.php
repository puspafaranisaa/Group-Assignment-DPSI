<?php

class BahanMentah_model
{
	private $table = 'barang_masuk';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllData()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getDataById($idBahan)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE idBahan=:idBahan');
		$this->db->bind('idBahan', $idBahan);
		return $this->db->single();
	}

	public function tambahDataDashboard($data)
	{
		$query = "INSERT INTO barang_masuk
					VALUES
				  ('', :namaBahan, :idPengadaan, :tanggalPengadaan, :jumlahPengadaan)";

		$this->db->query($query);
		$this->db->bind('namaBahan', $data['namaBahan']);
		$this->db->bind('idPengadaan', $data['idPengadaan']);
		$this->db->bind('tanggalPengadaan', $data['tanggalPengadaan']);
		$this->db->bind('jumlahPengadaan', $data['jumlahPengadaan']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataDashboard($idBahan)
	{
		$query = "DELETE FROM barang_masuk WHERE idBahan = :idBahan";

		$this->db->query($query);
		$this->db->bind('idBahan', $idBahan);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function getFindData()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM barang_masuk WHERE namaBahan LIKE :keyword";

		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");

		return $this->db->resultSet();
	}
}
