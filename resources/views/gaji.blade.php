<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initia">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<center>Data Pegawai</center>
	@foreach ($data as $val)
	@if ($val['jabatan'] == "Manager")
	@php $jab = 500000; @endphp
	@elseif ($val['jabatan'] == "Sekretaris")
	@php $jab = 350000; @endphp
	@elseif ($val['jabatan'] == "Staff")
	@php $jab = 250000; @endphp
	@endif

	@if ($val['jam_kerja'] > 250)
	@php $bonus = 0.10 * $jab; @endphp
	@elseif ($val['jam_kerja'] > 200)
	@php $bonus = 0.5 * $jab; @endphp
	@else
	@php $bonus = 0; @endphp
	@endif

	@php $ppn = 0.025 * $jab; @endphp
	@php $gaber = ($jab + $bonus) - $ppn; @endphp
	Nama              : {{$val['nama']}} <br>
	Agama             : {{$val['agama']}} <br>
	Jabatan           : {{$val['jabatan']}} <br>
	Jam Bekerja       : {{$val['jam_kerja']}} <br>
	Gaji              : {{$jab}} <br>
    Bonus             : {{$bonus}} <br>
    PPN               : {{$ppn}} <br>
    Gaji Besih        : {{$gaber}} <br>
    <hr>
@endforeach
</body>
</html>