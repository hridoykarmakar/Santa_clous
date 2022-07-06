<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Courier;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
    	$data= Product::all();
    	return view('product',['products'=>$data]);
    }
    function detail($id)
    {
    	$data= Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
       
         $data= Product::where('name', 'like', '%'.$req->input('query').'%')->get();
         return view('search',['products'=>$data]);

    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/product');
        }
        else
        {
            return redirect('/login');
        }
    }
   static function cartItem()
   {
    $userId=Session::get('user')['id'];
    return Cart::where('user_id' ,$userId)->count();

   }
   function cartList()
   {



      $userId= Session::get('user')['id'];  
      $products= DB::table('cart')
      ->join('products','cart.product_id','=','products.id')
      ->select('products.*','cart.id as cart_id')
      ->where('cart.user_id',$userId)
      
      ->get();

      return view('cartlist',['products'=>$products]);


   }
   function removeCart($id)
   {
      Cart::destroy($id);
      return redirect('cartlist');
   }
   function orderNow()
   {
     $userId= Session::get('user')['id'];  
     $total= $products= DB::table('cart')
      ->join('products','cart.product_id','=','products.id')
      
      ->where('cart.user_id',$userId)
      
      ->sum('products.price');

      return view('ordernow',['total'=>$total]);
   }
   function orderPlace(Request $req)
   {
    $userId= Session::get('user')['id']; 
    $allCart= Cart::where('user_id',$userId)->get();
    foreach($allCart as $cart) {
      $order= new Order;
      $order->product_id=$cart['product_id'];
      $order->user_id=$cart['user_id'];
      $order->status="pending";
      $order->payment_method=$req->payment;
      $order->rapping=$req->rap;
      $order->cake=$req->ck;
      $order->date=$req->dt;
      $order->time=$req->ti;
      $order->payment_status="pending";
      $order->address=$req->address;
      $order->save();
      Cart::where('user_id',$userId)->delete();
    }
    $req->input();
    return redirect('/');
   
   }
   function myOrders()
   {
     $userId= Session::get('user')['id'];  
     $orders= DB::table('orders')
      ->join('products','orders.product_id','=','products.id')
      
      ->where('orders.user_id',$userId)
      
      ->get();

     return view('myorders',['orders'=>$orders]);
   }
    function show(){
       $orders= DB::table('orders')
      //->join('products','orders.product_id','=','products.id')
      
      //->join('users','orders.user_id','=','users.id')
      
      ->get();

        return view('adminorderview',['orders'=>$orders]);
    }
    function delete($id){
      $orders= Order::find($id);
      $orders->delete();
      return redirect('adminorderview');
    }
    function edit($id){
      $orders = Order::find($id);
      return view('edit',['orders'=>$orders]);
    }
    function update(Request $req){
      $orders = Order::find($req->id);
      $orders->status=$req->status;
      $orders->payment_status=$req->payment_status;
      $orders->save();
      return redirect('adminorderview');
    }
    function addproduct(Request $req){
      $pro = new Product;
      $pro->name=$req->name;
      $pro->price=$req->price;
      $pro->category=$req->category;
      $pro->description=$req->description;
      $pro->gallery=$req->gallery;
      $pro->save();
      return redirect('adminproductview');

    }
    function productview(){
     // return view('adminproductview');
      $product= Product::all();
      return view('adminproductview',['products'=>$product]);
    }
     function productdelete($id){
      $product= Product::find($id);
      $product->delete();
      return redirect('adminproductview');
    }
    function productedit($id){
      $product= Product::find($id);
      return view('productedit',['products'=>$product]);
    }
     function updateproduct(Request $req){
      $product = Product::find($req->id);
      $product->name=$req->name;
      $product->price=$req->price;
      $product->category=$req->category;
      $product->description=$req->description;
      $product->gallery=$req->gallery;
      $product->save();
      return redirect('adminproductview');
    }
    function addCourier(Request $req){
      $courier= new Courier;
      $courier->sender_name=$req->sender_name;
      $courier->sender_phone=$req->sender_phone;
      $courier->sender_address=$req->sender_address;
      $courier->recevier_name=$req->recevier_name;
      $courier->recevier_phone=$req->recevier_phone;
      $courier->recevier_address=$req->recevier_address;
      $courier->date=$req->date;
      $courier->time=$req->time;
      $courier->cake=$req->cake;
      $courier->rapping=$req->rapping;
      $courier->save();
      return redirect('addcourier');

    }
    function viewCourier(){
      //return view('adminviewcourier');
      $courier= Courier::all();
      return view('adminviewcourier',['couriers'=>$courier]);
    }
     function deleteCourier($id){
      $courier= Courier::find($id);
      $courier->delete();
      return redirect('adminviewcourier');
    }

    
 
}
