<body><h1 align="center">Add Offer</h1>
<form action="adminaddoffer" method="POST">
	@csrf
	<input type="text" name="offer" placeholder="Enter Offer"><br><br>
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
	h1{
		margin-top: 150px;
	}
	button{
		color: blue;
		margin-left: 830px;
		height: 30px;
	}
	body{
		background: black;
		color: red;
	}
</style>