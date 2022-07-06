@extends('css')
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		
		<section class="main">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="offer">Offer</a></li>
				<li><a href="product">E-Commerce Page</a></li>
				<li><a href="contact">Contact</a></li>
				<li><a href="addcourier">Courier Gift</a></li>
				<li><a href="adminpass">Admin</a></li>
				<li><a href="#About">About Us</a></li>
			</ul><br><br><br><br>
			
			<div class="offer">
				@foreach($offers as $offer)
         
	           {{$offer['offer']}}
	
         
                @endforeach
				
			</div>
			

			
		</section>
		
		<section>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://www.paperfly.com.bd/img/courier-cargo/top_banner.png" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="https://img.freepik.com/free-vector/funny-delivery-character-man-movers-carry-sofa-detailed-illustration-isolated-white-background_253349-947.jpg?w=2000" alt="Chicago">
    </div>

    <div class="item">
      <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_168325476_349217.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</section>

		<section  id="About">
			
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
    
   
        <div class="section">
            <div class="container">
                <div class="content-section">
                    <div class="title">
                        <h1>About Us</h1>
                    </div>
                    <div class="content">
                        <h3>We are a e-commerce side and gift receiver in customer given time</h3>
                        <p>Santa Claus, legendary figure who is the traditional patron of Christmas in the United States and other countries, bringing gifts to children. His popular image is based on traditions associated with Saint Nicholas, a 4th-century Christian saint. Father Christmas fills the role in many European countries</p>
                        <p>We are as Santa Claus.Those who can not reach there spacial person in spacial time, we always ready to reach happiness in time.We surprises in birthday,anniversary etc.Incudes Our products we also decorate gift, give cake to make the moment more spacial.We also courier your gift.</p>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/Unique-One-114147836789539"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    </div>
                    <h4>Note : Must order products or courier before two days otherwise it can be cancelled.</h4>
                </div>
                <div class="image-section">
                    <img src="https://www.gifs.cc/christmas/santa-pulled-by-reindeer.gif" alt="">
                </div>
            </div>
        </div>
    
		</section>
		
	</header>
	<style>
		*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.section
{
    width: 100%;
    min-height: 100vh;
    background: rgb(0, 0, 0);
}
.container
{
    width: 80%;
    display: block;
    margin: auto;
    padding-top: 100px;
}
.container-section
{
    float: left;
    width: 40%;
}
.image-section
{
    float: right;
    width: 40%;
}
.image-section img
{
    width: 100%;
    height: auto;
}
.content-section .title
{
    text-transform: uppercase;
    font-size: 28px;
}
.content-section .content h3
{
    margin-top: 20px;
    color: rgb(114, 117, 117);
}
.content-section .content p
{
    margin-top: 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 1.5;
}
.content-section .content .button 
{
    margin-top: 30px;
}

.content-section .content .button a
{
    background-color: rgb(75, 72, 75);
    padding: 12px 40px;
    text-decoration: none;
    color: white;
    font-size: 25px;
    letter-spacing: 1.5px;
}
.content-section .content .button a:hover
{
    background-color: turquoise;
    color: white;
}
.content-section .social
{
    margin-top: 40px;
}
.content-section .social i
{
    color: rgb(44, 30, 28);
    font-size: 30px;
    padding: 0px 10px;
}
.content-section .social i:hover
{
    color: rgb(241, 88, 68);
}
@media screen and(max-width:768px)
{
    .container
    {
        width: 80%;
        display: block;
        margin: auto;
        padding-top: 50px;
    }
    .content-section
    {
        float: none;
        width: 80%;
        display: block;
        margin: auto;
    }
    .image-section
    {
        float: none;
        width: 80%;
    }
    .image-section img
    {
        width: 100%;
        height: auto;
        display: block;
        margin: auto;
    }
    .content-section .title
    {
        text-align: center;
        font-size: 19px;
    }
    .content-section .content .button
    {
        text-align: center;
    }
    .content-section .content .button a
    {
        padding: 9px 30px;
    }
    .content-section .social
    {
        text-align: center;
    }

}
h1{
    color: red;
    width: bold;
}
p{
    color: gray;
}
h4{
    color: red;
}


	</style>

</body>
</html>