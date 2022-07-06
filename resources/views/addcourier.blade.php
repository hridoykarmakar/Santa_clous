<h1 align="center">Courier Something</h1>
<body>
<form action="addcourier" method="POST">
	@csrf
	<input type="text" name="sender_name" placeholder="Enter Sender Name"><br><br>
	<input type="text" name="sender_phone" placeholder="Enter Sender Phone"><br><br>
	<input type="text" name="sender_address" placeholder="Enter Sender Address"><br><br>
	<input type="text" name="recevier_name" placeholder="Enter Recevier Name"><br><br>
	<input type="text" name="recevier_phone" placeholder="Enter Recevier Phone"><br><br>
	<input type="text" name="recevier_address" placeholder="Enter Recevier Address"><br><br>
	<input type="text" name="date" placeholder="Enter Recevied Date"><br><br>
	<input type="text" name="time" placeholder="Enter Recevied Time"><br><br>
	<label for="ik"> Include Cake</label><br><br>
    <input type="radio" value="Yes" name="cake"><span>Yes, Price = $ 5</span><br><br>
    <input type="radio"  value="No" name="cake"><span>No,  Price = $ 0</span><br><br>

    <label for="dg"> Decoration Gift with rappping and flower </label><br><br>
    <input type="radio" value="Yes" name="rapping"><span>Yes, Price = $ 1</span><br><br>
    <input type="radio" value="No" name="rapping"><span>No,  Price = $ 0</span><br><br>
    <button type="submit">Submit</button>
	
</form>
</body>

<style type="text/css">
	input{
		height: 40px;
		width: 250px;
		margin-top: 50px;
		margin-left: 550px;
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