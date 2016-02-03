<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Category</title>
</head>
<body>
<h1>Add Category</h1>

{!! Form::open(array('url'=>'category')) !!}
 	
 	{!! Form::label('book_category_name','Name:') !!}
  	{!! Form::text('book_category_name') !!} </br>
	{!! Form::label('book_category_description','Description:') !!}
	{!! Form::text('book_category_description') !!} </br>

	{!! Form::submit('Them moi')!!}
{!! Form::close() !!}

@if ($errors->any())
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

</body>
</html>