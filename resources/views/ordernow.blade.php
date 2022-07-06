@extends('master')
@section("content")
    

  <div class="custom-product">
    
    <div class="col-sm-10">
    

      
        <table class="table">
   
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
       
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
        
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
       
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
       
      </tr> 
    </tbody>
  </table>
  <div>
    <form action="/orderplace" method="POST">
      @csrf
  <div class="form-group">
    <label for="ik"> Want Cake?</label><br><br>
    <input type="radio" value="Yes" name="ck"><span>Yes, Price = $ {{$cprice=5}}</span><br><br>
    <input type="radio"  value="No" name="ck"><span>No,  Price = $ {{$cprice=0}} </span><br><br>

    <label for="dg"> Decoration Gift with rappping and flower </label><br><br>
    <input type="radio" value="Yes" name="rap"><span>Yes, Price = $ {{$rprice=1}}</span><br><br>
    <input type="radio" value="No" name="rap"><span>No,  Price = $ {{$rprice=0}} </span><br><br>

    Delivery Date : <input type="text" name="dt"/><br><br>
    Delivery Time : <input type="text" name="ti"/><br><br>
    <textarea name="address" class="form-control" placeholder="enter your address"></textarea>  
  </div>
  <div class="form-group">

    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value="cash" name="payment"><span>Bkash</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Roket</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Cash on delivery</span><br><br>
  </div>
  <h1>$ {{$total+10+$cprice+$rprice}}</h1>
  
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
  </div>
   
</div>  
  
  </div>
  
@endsection