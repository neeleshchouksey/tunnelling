<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<center>
		{!! Form::open(['url' => 'admin/dashboard','method' => 'post']) !!}
   		{{Form::text('username')}} 
   		{{Form::password('username')}}
   		{{Form::submit('Submit')}}
		{!! Form::close() !!}
	</center>
</body>
</html>