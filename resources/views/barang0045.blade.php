<!DOCTYPE html>
<html>
<head>
<title>1461900045</title>
</head>
<body>
<h3>Data User</h3>
<a href="/barang/tambah"> TAMBAH BARANG </a>
<br/>
<br/>
<table border="1">
<tr>
<th>Id</th>
<th>Nama</th>
<th>Alamat</th>
</tr>
@foreach($barang as $p)
<tr>
<td>{{ $p->id }}</td>
<td>{{ $p->nama }}</td>
<td>{{ $p->harga }}</td>
<td>
<a href="/barang/edit/{{ $p->id }}">Edit</a>
|
<a href="/barang/hapus/{{ $p->id }}">Hapus</a>
</td>
</tr>
@endforeach
</table>
</body>
</html>
