<?php

class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "kampus";
	var $koneksi = "";

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()) {
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"SELECT * from mahasiswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	
	function tambah_data($id_mahasiswa,$nim,$nama_mahasiswa)
	{
		mysqli_query($this->koneksi,"INSERT INTO mahasiswa values ('','$nim','$nama_mahasiswa')");
	}

	function tampil_prodi($kode_prodi)
	{
		$data = mysqli_query($this->koneksi,"SELECT prodi from prodi where kode_prodi=$kode_prodi");
		return $data;
	}

	function tampil_kelas($kode_kelas)
	{
		$data = mysqli_query($this->koneksi,"SELECT kelas from kelas where kode_kelas=$kode_kelas");
		return $data;
	}

	function tampil_jenjang($kode_jenjang)
	{
		$data = mysqli_query($this->koneksi,"SELECT jenjang from jenjang where kode_jenjang=$kode_jenjang");
		return $data;
	}

	function get_by_id($id_mahasiswa)
	{
		$query = mysqli_query($this->koneksi,"SELECT * FROM mahasiswa where id_mahasiswa=$id_mahasiswa");
		return $query->fetch_array();
	}

	function update_data($id_mahasiswa,$nim,$nama_mahasiswa)
	{
		$query = mysqli_query($this->koneksi,"UPDATE mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa' where id_mahasiswa=$id_mahasiswa");
	}

	function delete_data($id_mahasiswa)
	{
		$query = mysqli_query($this->koneksi,"DELETE FROM mahasiswa where id_mahasiswa='$id_mahasiswa'");
	}
}

?>