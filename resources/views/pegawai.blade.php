<!DOCTYPE html>
<html>
<head>
	<title>Praktikum Pemrograman Web Lanjut 04 : Eloquent Laravel</title>
</head>
<body>

<h1>Data Pegawai</h1>
<h3>Akhmad Ramadani/ TI-2B/ 20417200002</h3>

<ul>
	@foreach($pegawai as $p)
		<li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>
	@endforeach
</ul>

</body>
</html>