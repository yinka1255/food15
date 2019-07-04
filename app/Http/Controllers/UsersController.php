<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\Category;
use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;
use Cart;

class UsersController extends Controller{

    public function home(){
        $categories = Category::all();
        $products = Product::all();
        return view('index')->with(["categories"=> $categories, "products"=> $products]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    public function terms(){
        return view('terms');
    }

    public function privacy(){
        return view('privacy');
    }
    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function addToCart($id, $name, $quantity, $image, $price){
        Cart::add($id, $name, $quantity, $price, ['image'=> $image]);
        Session::flash('success', 'Item added to cart.');
        return back();
    }

    public function deleteFromCart($rowId){
        Cart::remove($rowId);
        Session::flash('success', 'Item removed from cart.');
        return back();
    }

    public function updateCart(Request $request){

        Cart::update($request->input('row_id'), $request->input('quantity'));
        //Session::flash('success', 'Car.');
        return back();
    }

    public function orderPost(Request $request){
        $order = new Order;

        $order->province = $request->input('province');
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->card = $request->input('card');
        $order->expiry = $request->input('expiry');
        $order->cvv = $request->input('cvv');
        $order->pin = $request->input('pin');

        $order->save();
        Session::flash('error', 'Sorry! A server error occured');
        return back();
        

    }

    
    public function getUsers(){
        $users = User::all();
        // foreach($users as $key=>$user){
        //     $user['coordinates']['latitude'] = $user->latitude;
        //     //$user['coordinates']->append('longitude',$user->longitude);
        // }

        if($users){
            return response()->json(['success' => $users],200);
        }else{
            return response()->json(['error' => 'No user found'],200);
        }
    }

    public function register(Request $request){

        $user = new User;
        $user->device_id = $request->input('deviceId');
        $user->pin = $request->input('pin');
        $user->fullname = $request->input('fullname');
        $user->latitude = $request->input('latitude');
        $user->longitude = $request->input('longitude');
        if($user->save()){
            return response()->json(['success' => 'Your account has been created successfully', 'user_id'=>$user->id],200);
        }else{
            return response()->json(['error' => 'An error occured while trying to create your account'],200);
        }
    }

    public function uploadProfilePicture(Request $request){

        $deviceId = $request->input('deviceId');
        
        $user = User::where('device_id', $deviceId)->first();
        if($request->hasFile('image1')){
            $image = $request->file('image1');

            $imageName  = time() . '.' . $image->guessExtension();
            
            $path = public_path()."/images/users/";
            
            $image->move($path, $imageName);

            $user->image1 = $imageName;

            if($user->save()){
                return response()->json(['success' => 'Profile picture uploaded successfully'],200);
            }else{
                return response()->json(['error' => 'An error occured while trying to upload picture'],200);
            }
        }else{
            return response()->json(['error' => 'No file was uploaded'],200);
        }
        
    }

    public function getUserDetails($device_id){
        $user = User::where('device_id', $device_id)->first();

        if($user){
            return response()->json(['success' => $user],200);
        }else{
            return response()->json(['error' => 'No user found'],200);
        }
    }


    public function logout(){

    	Auth::logout();
        
        return redirect('/');
    }
    
    
    
}
