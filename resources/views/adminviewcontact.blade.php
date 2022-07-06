<h1>Contact List</h1>
<body>
<table border="1">
	<tr align="center">
		<td>Name</td>
		<td>Email</td>
		<td>Message</td>
		
	</tr>
	@foreach($contacts as $contact)
	<tr align="center">
		<td>{{$contact['name']}}</td>
		<td>{{$contact['email']}}</td>
		<td>{{$contact['message']}}</td>
		
	</tr>
	@endforeach
</table>
</body>
<style type="text/css">
	td{
		height: 40px;
		width: 250px;
		margin-top: 80px;
		margin-left: 600px;
		background-color: black;
		
	}
	h1{
		margin-top: 150px;
		margin-left: 300px;
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