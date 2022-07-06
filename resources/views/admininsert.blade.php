<body><h1 align="center">Add Product</h1>
<form action="admininsert" method="POST">
	@csrf
	<input type="text" name="name" placeholder="name"><br><br>
	<input type="text" name="price" placeholder="price"><br><br>
	<input type="text" name="category" placeholder="category"><br><br>
	<input type="text" name="description" placeholder="description"><br><br>
	<input type="text" name="gallery" placeholder="gallery"><br><br>
	<button type="submit">Submit</button>
</form></body>
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