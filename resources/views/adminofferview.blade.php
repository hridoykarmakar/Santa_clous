<body><h1>Offers</h1>
@foreach($offers as $offer)
<ul>
	<li>{{$offer['offer']}}</li>
	<a href={{"offerdelete/" .$offer['id']}}>Delete</a>
</ul>
@endforeach</body>
 <style type="text/css">
  body{
  background:black;
  color: red;
  font-weight: bold;
  font-size: 25px;}
  h1{
		margin-top: 150px;
		margin-left: 400px;
	}
	

</style>