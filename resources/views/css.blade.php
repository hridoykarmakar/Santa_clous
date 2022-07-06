<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
<style>
	*{
	margin : 0;
	padding : 0;
	font-family : Century Gothic;
}
.main{
	background: url("https://i.giphy.com/media/bMD6oknoBQm4Al4A0w/giphy.webp");
	height: 100vh;
	background-size: cover;
	
	transition: 5s;
	background-repeat: no-repeat;
	
}

ul{
	float: right;
	list-style-type: none;
	margin-top: 25px;
}
ul li{
	display: inline-block;
}
ul li a{
	border-radius: 25px;
	background-color: black;
	text-decoration: none;
	color: #fff;
	font-weight: 700;
	padding: 5px 20px;
	border: 1px solid #fff;
	transition: 0.6s ease;
}

ul li a:hover{
	background-color: red;
	color: #fff;
}

.offer {
    position: absolute;
    white-space: nowrap;
    -webkit-animation: rightThenLeft 10s linear;
     animation-iteration-count: infinite;
     background-color: black;
     width: 1500px;
     font-weight: 700;
     color: white;

}

@-webkit-keyframes rightThenLeft {
    0%   {left: 0%;}
    50%  {left: 100%;}



    
	
</style>
</html>