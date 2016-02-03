<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form edit trong Laravel 5</title>
</head>
<body>
<h1>Ma so category : {!! $categories->book_category_id !!}</h1>

{!! Form::model($categories,[ 'method' => 'PATCH', 'action' => ['CategoryController@update', $categories->book_category_id] ]) !!}
 	
 	{!! Form::label('book_category_name','Name:') !!}
  	{!! Form::text('book_category_name') !!} </br>
	{!! Form::label('book_category_description','Description:') !!}
	{!! Form::text('book_category_description') !!} </br>
	 
	{!! Form::submit('Cap Nhat')!!}
{!! Form::close() !!}
</body>
</html>