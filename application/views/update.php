<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button[type=button] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
	<button type="button" class="btn btn-info"><a href="<?php echo base_url('index.php/crud/index'); ?>">Kembali</a></button>
	<div>
	<?php foreach($mahasiswa as $u){?>
<form action="<?php echo base_url('index.php/crud/update'); ?>" method="POST">

	<h3>Edit Data Mahasiswa</h3>

	<label for="fname">Nama</label>
    <input type="text" id="fname" name="nama" value="<?php echo $u->nama ?>">
    <label for="lname">NIM</label>
    <input type="hidden" id="nim" name="nim" value="<?php echo $u->nim ?>">
    <input type="text" id="nim" name="nim" value="<?php echo $u->nim ?>">
     <label for="lname">Alamat</label>
    <input type="text" id="nim" name="alamat" value="<?php echo $u->alamat ?>">
		<label for="lname">Gender</label>
		<br>
    <input type="radio" id="lname" name="gender" value="Lakilaki"> Laki-Laki <br>
		<input type="radio" id="lname" name="gender" value="Perempuan"> Perempuan <br>

	<input type="submit" value="update">

	<?php }?>
 </form>
</div>
</body>
</html>
