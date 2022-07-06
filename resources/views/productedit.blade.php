<h1 align="center">Edit Product</h1>
<body>
<form action="/productedit" method="POST">
	@csrf
	<input type="hidden" name="id" value="{{$products['id']}}">
	<input type="text" name="name" value="{{$products['name']}}"><br><br>
	<input type="text" name="price" value="{{$products['price']}}"><br><br>
	<input type="text" name="category" value="{{$products['category']}}"><br><br>
	<input type="text" name="description" value="{{$products['description']}}"><br><br>
	<input type="text" name="gallery" value="{{$products['gallery']}}"><br><br>
	<button type="submit">Submit</button>
</form>
</body>
<style type="text/css">
	input{
		height: 40px;
		width: 250px;
		margin-top: 50px;
		margin-left: 600px;
		background-color: black;
		color : red;
		
	}
	
	
	button{
		border-radius: 10px;
		color: black;
		background: red;
		margin-left: 830px;
		height: 30px;
	}
	body{
		background: black;
		color: red;
	}
</style>