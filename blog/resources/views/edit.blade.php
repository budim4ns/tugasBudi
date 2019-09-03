<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<h3>Edit Data Siswa</h3>

@foreach($siswa as $sis)
<form action="/siswa/datbar" method="POST">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$sis->id_siswa}}">
<label>Nama : </label>
<input type="text" name="nama" value="{{$sis->nama_siswa}}">
<br>
<label>Alamat : </label>
<input type="text" name="alamat" value="{{$sis->alamat_siswa}}">
<br>
<label>Agama : </label>
<input type="text" name="agama" value="{{$sis->agama_siswa}}">
<br>
<input type="submit" name="edit" value="editdata">
</form>
@endforeach

</body>
</html>