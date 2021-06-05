<!DOCTYPE html>
<html>
<head>
    <title>Kegiatan 3</title>
    </head>
        <body>
            <h3>Kegiatan 3 Soal Ganjil</h3>
            <p>Kolom Pencarian</p>
            <form action="/barang/cari" method="GET">
                <p> Cari Barang <input type="text" name="lihat" placeholder="isikan disini" value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>

             <p><a href="/barang/tambah"> + Data Baru </a></p>
<table border="1">
<tr>
<th>Id</th>
<th>Nama</th>
<th>Harga</th>
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
