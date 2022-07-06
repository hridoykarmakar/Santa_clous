<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
    
</head>
<body>
	<form action="/admin" method="POST" id="hk">
      
      <input type="password" name="Pass" placeholder="Insert password">
      <button type="submit">Submit</button>
      @csrf
  </form>

</body>
</html>
<style type="text/css">
	body{
	background: url("https://password.kaspersky.com/content/themes/passchck/img/shared.png");
	height: 100vh;
	background-size: cover;
	background-position: center;
	margin-top: 220px;
}
input{
	height: 50px;
	width: 400px;
	background: white;
	
}
button{
  height: 40px;
  width: 80px;
  background: gray;
  color: black;
  font-size: 15px;
  margin-left: 50px;
  border-radius: 10px;
}
::placeholder {
  color: blue;
  font-size: 15px;
}

</style>
