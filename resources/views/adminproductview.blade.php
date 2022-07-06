<body><h1>Products List</h1>
@foreach($products as $product)
@csrf
<img src="{{$product['gallery']}}" height="120px" width="120px">
<h4>Product Id : {{$product['id']}}</h4>
<h4>Product Name : {{$product['name']}}</h4>
<h4>Product Price : $ {{$product['price']}}</h4>
<h4>Product Category : {{$product['category']}}</h4>
<h4>Product Description : {{$product['description']}}</h4>
<h4><a href={{"productdelete/" .$product['id']}}>Delete</a></h4>
<h4><a href={{"productedit/" .$product['id']}}>Edit</a></h4>
@endforeach
</body>
 <style type="text/css">
  body{
  background:black;
  color: red;
  font-weight: bold;
  font-size: 25px;
  

</style>