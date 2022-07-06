<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
	Session::forget('user');
    return redirect('login');
});
Route::view('/register','register');
Route::view('/','homepage');
Route::view('contact','contact');
Route::post('contact',[UserController::class,'addcontact']);
Route::get("adminviewcontact",[UserController::class,'showcontact']);
Route::view('addcourier','addcourier');
Route::view('adminpass','admincheck');
Route::view('admininsert','admininsert');
Route::view('adminaddoffer','adminaddoffer');
Route::view('admin','admin');
Route::get("/",[UserController::class,'offerview']);
Route::get("deletecourier/{id}",[ProductController::class,'deleteCourier']);
Route::get("adminviewcourier",[ProductController::class,'viewCourier']);
Route::post("addcourier",[ProductController::class,'addCourier']);
Route::get("adminofferview",[UserController::class,'adminviewoffer']);
Route::get("offer",[UserController::class,'viewoffer']);
Route::post("adminaddoffer",[UserController::class,'addOffer']);
Route::get("adminuserview",[UserController::class,'usershow']);
Route::get("adminorderview",[ProductController::class,'show']);
Route::get("adminproductview",[ProductController::class,'productview']);
Route::post("admininsert",[ProductController::class,'addproduct']);
Route::get("userdelete/{id}",[UserController::class,'userdelete']);
Route::get("delete/{id}",[ProductController::class,'delete']);
Route::get("offerdelete/{id}",[UserController::class,'offerdelete']);
Route::get("productdelete/{id}",[ProductController::class,'productdelete']);
Route::get("productedit/{id}",[ProductController::class,'productedit']);
Route::get("edit/{id}",[ProductController::class,'edit']);
Route::post("edit",[ProductController::class,'update']);
Route::post("productedit",[ProductController::class,'updateproduct']);
Route::post("/register",[UserController::class,'register']);
Route::post("/login",[UserController::class,'login']);
Route::get("/product",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("/add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::post("admin",[UserController::class,'admin']);
