<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Offer;
use App\Models\Contact;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
    	$user= User::where(['email'=>$req->email])->first();
    	if (!$user || !Hash::check($req->password,$user->password)) {
    		# code..
    		return "username or password does not match";
    	}
    	else{
    		$req->session()->put('user',$user);
    		return redirect('/');
    	}

    }
    function register(Request $req)
    {
       //eturn $req->input();
        $user= New User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');

    }
      function admin(Request $req)
    {
        if ($req->Pass=="12345"){
            return redirect('admin');
        }
        else{
            return "wrong pass";
        }
    }
    function usershow(){
        $user= User::all();
        return view('adminuserview',['users'=>$user]);
    }
    function userdelete($id){
      $user= User::find($id);
      $user->delete();
      return redirect('adminuserview');
    }
    function addOffer(Request $req){
        $of = new Offer;
        $of->offer=$req->offer;
        $of->save();
        return redirect('adminaddoffer');
        //return view('adminofferview');
        

    }
    function adminviewoffer(){
        //return view('adminofferview');
        $of = Offer::all();
        return view('adminofferview',['offers'=>$of]);
    }
    function offerdelete($id){
      $of= Offer::find($id);
      $of->delete();
      return redirect('adminofferview');
    }
     function viewoffer(){
        //return view('adminofferview');
        $of = Offer::all();
        return view('offer',['offers'=>$of]);
    }
     function offerview(){
       // return view('homepage');
        $of = Offer::all();
        return view('homepage',['offers'=>$of]);
    }
    function addcontact(Request $req){
        $contact = new Contact;
        $contact->name=$req->name;
        $contact->email=$req->email;
        $contact->message=$req->message;
        $contact->save();
        //return "successful";
        return redirect('contact');
        
    }
    function showcontact(){
        $contact = Contact::all();
        return view('adminviewcontact',['contacts'=>$contact]);
    }


   
}
