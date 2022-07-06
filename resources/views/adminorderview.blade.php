<body>
 <div class="custom-product">
    
    <div class="col-sm-10">
      <div class="trending-wrapper">
        <h1>Orders</h1>
        
    @foreach($orders as $item)
    <div class="row searched-item cart-list-devider">
    
     <div class="col-sm-4">
      <div class="col-sm-3">
      
    </div>
      
      <div class="">
        
        
        <h5>Order ID : {{$item->id}}</h5>
        <h5>Product ID : {{$item->product_id}}</h5>
        <h5>Uuser/Customer ID : {{$item->user_id}}</h5>
        <h5>Delivery Status: {{$item->status}}</h5>
        <h5>Addresss: {{$item->address}}</h5>
        <h5>Payment Status: {{$item->payment_status}}</h5>
        <h5>Payment Method: {{$item->payment_method}}</h5>
        <h5>Date: {{$item->date}}</h5>
        <h5>Time: {{$item->time}}</h5>
        <h5>Cake: {{$item->cake}}</h5>
        <h5>Decoration Gift with rappping and flower: {{$item->rapping}}</h5>
        <a href={{"delete/" .$item->id}}>cencel</a>
        <a href={{"edit/" .$item->id}}>edit</a>
   
      </div>
   
    </div>
     
</div>

     @endforeach
  </div>
</div>  
  
  </div>
  </body>
  <style type="text/css">
  body{
  background:black;
  color: red;
  font-weight: bold;
  font-size: 25px;
  

</style>
  