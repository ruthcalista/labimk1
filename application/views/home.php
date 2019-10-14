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
	<center><button type="button" class="btn btn-primary"><a href="<?php echo base_url('index.php/views/v_tampil'); ?>">Tampilkan Data</a></button></center>
	<br><br>

</body>
</html>
