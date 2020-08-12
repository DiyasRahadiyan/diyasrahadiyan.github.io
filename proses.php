<?php 
	include('koneksi.php');
	$koneksi = new database();

	$action = $_GET['action'];
	if($action == "add")
	{
		$koneksi->tambah_data($_POST[''],$_POST['nim'],$_POST['nama_mahasiswa']);
		header('location:index.php');
	}
	elseif($action=="update")
	{
		$koneksi->update_data($_POST['id_mahasiswa'],$_POST['nim'],$_POST['nama_mahasiswa']);
		header('location:index.php');
	}
	elseif($action=="delete")
	{
		$id_mahasiswa = $_GET['id'];
		$koneksi->delete_data($id_mahasiswa);
		header('location:index.php');
	}
?>