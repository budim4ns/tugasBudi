<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
<h2>Tambah Data Siswa</h2>

<form action="/siswa/store" method="POST">
	{{ csrf_field() }}
	<label>Nama : </label>
	<input type="text" name="nama" required="required">
	<br>
	<label>Alamat : </label>
	<input type="text" name="alamat" required="required">
	<br>
	<label>Agama : </label>
	<input type="text" name="agama" required="required">
	<br>
	<br>
	<input type="submit" name="simpan" value="simpan data">
</form>

</body>
</html>