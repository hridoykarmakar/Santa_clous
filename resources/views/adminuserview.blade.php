<h1>User List</h1>
<body>
<table border="1">
	<tr align="center">
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Delete</td>
	</tr>
	@foreach($users as $user)
	<tr align="center">
		<td>{{$user['id']}}</td>
		<td>{{$user['name']}}</td>
		<td>{{$user['email']}}</td>
		<td><a href={{"userdelete/" .$user['id']}}>Delete</a></td>
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
		margin-left: 400px;
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