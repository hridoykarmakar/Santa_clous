<h1 align="center">Update Order</h1>
<body>
<form action="/edit" method="POST">
	@csrf
	<input type="hidden" name="id" value="{{$orders['id']}}">
	<input type="text" name="status" value="{{$orders['status']}}" placeholder="Enter delivery status"><br><br>
	<input type="text" name="payment_status" value="{{$orders['payment_status']}}" placeholder="payment status"><br><br>
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