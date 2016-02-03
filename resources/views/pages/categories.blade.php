<html>
<head>
<title>View Categories</title>
</head>
<body>
<ul>
	@foreach($categories as $category)
		<li>Name : {{ $category->book_category_name }} 
		|  Description : {{ $category->book_category_description }}  
		|  Created Date : {{ $category->created_at }}</li>
	@endforeach
</ul>
</body>
</html>