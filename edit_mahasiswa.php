<?php
	include('koneksi.php');
	$db = new database();
	$id_mahasiswa = $_GET['id'];
	if(! is_null($id_mahasiswa)){
		$data_mahasiswa = $db->get_by_id($id_mahasiswa);
	}
	else
	{
		header('location:index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data Mahasiswa</title>
</head>
<body>
	<h3>Update Data Mahasiswa</h3>
	<hr/>
	<form method="post" action="proses.php?action=update">
	<input type="hidden" name="id_mahasiswa" value="<?php echo $data_mahasiswa['id_mahasiswa']; ?>"/>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" value="<?php echo $data_mahasiswa['nim']; ?>"/></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td><input type="text" name="nama_mahasiswa" value="<?php echo $data_mahasiswa['nama_mahasiswa']; ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="tombol" value="Update"/></td>
		</tr>
	</table>
	</form>
</body>
</html>