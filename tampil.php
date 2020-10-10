<?php
include 'database.php';
include 'crud.php';
$crud = new crud();
$data = $crud->getsiswa();
?>
<h1>Crud OOP PHP</h1>
<h3>Data User</h3>

<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Email</th>
	</tr>
	<?php
	$no = 1;
	foreach ($data as $tampil){
	 ?>
	<tr>
		<td><<?php echo $no++; ?></td>
		<td><?php echo $tampil['nama'];?></td>
		<td><?php echo $tampil['alamat']; ?></td>
		<td><?php echo $tampil['email']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $tampil['id']; ?>&aksi=edit">Edit</a>
			<a href="hapus.php?id=<?php echo $tampil['id']; ?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php } ?>
</table>
