<!DOCTYPE html>
<html>
<head>
	<title>USER INTERFACE DATA MAHASISWA</title>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>

<body>
	<center><h1>USER INTERFACE DATA MAHASISWA</h1></center>
	<br>
	<center><button type="button" class="btn btn-info"><a href="<?php echo base_url('index.php/crud/input'); ?>">Input Data</a></button></center>
	<br><br>

	<table id="customers">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>Gender</th>
			<th>Lakukan</th>
		</tr>
		<?php
		$no = 1;
		foreach($mahasiswa as $u) {
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->gender ?></td>
			<td><button type="button" class="btn btn-info"><?php echo anchor('crud/edit/'.$u->nim,'Edit');?></button>
				<button type="button" class="btn btn-info"><?php echo anchor('crud/delete/'.$u->nim,'Delete');?></button></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
