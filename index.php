<?php 	
include('koneksi.php');
$db = new database();
$data_mahasiswa = $db->tampil_data();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Mahasiswa</title>
</head>
<body>
<a href="tambah_mahasiswa.php">Tambah Data Mahasiswa</a>
<table border="1" width="100%">
		<tr>
			<th width="30px">NO</th>
			<th width="90px">NIM</th>
			<th width="250px">NAMA</th>
			<th width="150px">TAHUN MASUK</th>
			<th>PROGRAM STUDI</th>
			<th>KELAS</th>
			<th width="100px">JENJANG</th>
			<th>ACTION</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_mahasiswa as $row){
			?>
			<tr>
				<td align="center"><?php echo $no++; ?></td>
				<td><?php echo $nim=$row['nim']; ?></td>
				<td><?php echo $row['nama_mahasiswa']; ?></td>
				<td align="center"><?php echo "20" . substr($nim,0,2); ?></td>
				<td><?php $prodi=substr($nim,3,2); 
						$data_prodi = $db->tampil_prodi($prodi)->fetch_object()->prodi;
						echo $data_prodi;
						?></td>
				<td align="center"><?php $kelas=substr($nim,5,1); 
						$data_kelas = $db->tampil_kelas($kelas)->fetch_object()->kelas;
						echo $data_kelas;
						?>
				</td>
				<td align="center"><?php $jenjang=substr($nim,2,1); 
						$data_jenjang = $db->tampil_jenjang($jenjang)->fetch_object()->jenjang;
						echo $data_jenjang;
						?>
				</td>
				<td align="center">
					<a href="edit_mahasiswa.php?id=<?php echo $row['id_mahasiswa']; ?>">Update</a>
					<a href="proses.php?action=delete&id=<?php echo $row['id_mahasiswa']; ?>" onclick="return confirm('Anda yakin akan menghapus Mahasiswa ini ?')">Delete</a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>