<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
</head>
<body> 
	<fieldset>
		<legend>Show Data</legend>
		Title : <b>{{$book->title}}</b><br>
		Publisher: <b> {{$book->publisher}}</b><br>
		Price : <b>{{$book->price}}</b><br>
		Pages : <b>{{$book->pages}}</b><br>
		Synopsis : <b>{{$book->synopsis}}</b><br>
		Status : @if($book->status == 1)
		premium<br> 
		@else
		pirated
		@endif
		Date : {{$book->date}}

	</fieldset>

</body>
</html>