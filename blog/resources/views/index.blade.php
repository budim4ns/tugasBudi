<!DOCTYPE html>
<html>
<head>
	<title>Latihan Buat CRUD</title>
	<link rel="stylesheet" type="text/css" href="{{'/css/app.css'}}">
</head>
<body>

<a href="/siswa/tambah">Tambah Siswa</a>
<br>
<br>

<table class="table">
<thead class="thead-dark">
	<tr>
		<th scope="col">Nama</th>
		<th scope="col">Alamat</th>
		<th scope="col">Agama</th>
		<th scope="col">Edit/Hapus</th>
	</tr>
	</thead>
	<tbody >
	@foreach($siswa as $sis)
	<tr>
		
		<td>{{$sis->nama_siswa}}</td>
		<td>{{$sis->alamat_siswa}}</td>
		<td>{{$sis->agama_siswa}}</td>
		<td><a href="/siswa/edit/{{$sis->id_siswa}}" type="button" btn btn-warning>Edit</a>
			
			<a href="/siswa/hapus/{{$sis->id_siswa}}">Hapus</a>
			</td>
	</tr>
	@endforeach
	</tbody>
</table>

</body>
</html>