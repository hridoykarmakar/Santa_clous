@extends('master')
@section("content")
<div class="custom-product">
<div class="trending-wrapper">
  <div class="col-sm-4">
    <a href="a">Filter</a>
  </div>
  <div class="col-sm-4">
<h4>Result For Products</h4>
@foreach($products as $item)
 <div class="searched-item">
      <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}">
      <div class="">
        <h2>{{$item['name']}}</h2>
        <h5>{{$item['description']}}</h5>
        
      </div>
   </a>
    </div>

     @endforeach
  </div>
</div>  
	
  </div>
  
@endsection