<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav>
		<a href="/home">Home</a>
		<a href="/about">About</a>
		<a href="/contact">Contact</a>
		<a href="/barang">Barang</a>
		<a href="/buku">Buku</a>
	</nav>
	{{-- Tempat Konten Dinamis --}}
	@yield('konten')
	{{-- Akhir Tempat Konten Dinamis --}}

	<footer>SMK ASSALAAM</footer>

</body>
</html>