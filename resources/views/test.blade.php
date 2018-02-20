<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{route('test')}}" method="POST">
		{{csrf_field()}}
		<input type="text" name="slug" value="tours">
		<input type="text" name="image" value="tours/January2018/D2axQ92psfvXhNPFJTCK.jpg">
		<input type="number" name="id" value="21">
		<input type="text" name="field" value="multiple_images">
		<button type="submit">OK</button>
	<form>
</body>
</html>