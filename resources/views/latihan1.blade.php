<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initia">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	@foreach($siswa as $data)
	    Nama : {{$data['nama']}} <br>
	    Kelas : {{$data['kelas']}}
	    <hr>
	    @endforeach


</body>
</html>