<body><h1>Offers</h1>
@foreach($offers as $offer)
<ul>
	<li>{{$offer['offer']}}</li>
	
</ul>
@endforeach
<img src="https://spillburgvacation.com/wp-content/uploads/2021/11/specialoffer.gif" alt="">
</body>
<style type="text/css">
  body{
  background:black;
  color: red;
  font-weight: bold;
  font-size: 25px;}
  h1{
		margin-top: 100px;
		margin-left: 400px;
	}
img{
	margin-left: 700px;
	height: 200px;
	width: 300px;
}
	

</style>