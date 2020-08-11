<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nim'],$_POST['nama_mahasiswa']);
	header('location:tampil_mahasiswa.php');
}
?>