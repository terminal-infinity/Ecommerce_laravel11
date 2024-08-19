<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Stripe;
use Session;


class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('usertype','user')->get()->count();
        $order = Order::all()->count();
        $deliverd = Order::where('status','delivered')->get()->count();
        return view('admin.home',compact('user','order','deliverd'));
    }
    public function home()
    {
        $product=Product::all();

        if(Auth::id()){
            $user=Auth::user();
            $user_id=$user->id;
            $count=Cart::where('user_id',$user_id)->count();
        }
        else{
            $count='';
        }

        return view('home.index',compact('product','count'));
    }

    public function about(){
        if(Auth::id()){
            $user=Auth::user();
            $user_id=$user->id;
            $count=Cart::where('user_id',$user_id)->count();
        }
        else{
            $count='';
        }
        return view('home.about',compact('count'));
    }

    public function contact(){
        if(Auth::id()){
            $user=Auth::user();
            $user_id=$user->id;
            $count=Cart::where('user_id',$user_id)->count();
        }
        else{
            $count='';
        }
        return view('home.contact',compact('count'));
    }

    public function blog(){
        if(Auth::id()){
            $user=Auth::user();
            $user_id=$user->id;
            $count=Cart::where('user_id',$user_id)->count();
        }
        else{
            $count='';
        }
        return view('home.blog',compact('count'));
    }

    public function shop(){
        $product=Product::all();

        if(Auth::id()){
            $user=Auth::user();
            $user_id=$user->id;
            $count=Cart::where('user_id',$user_id)->count();
        }
        else{
            $count='';
        }
        
        return view('home.shop',compact('product','count'));
    }
    public function login_home(){
        $product=Product::all();
        if(Auth::id()){
            $user=Auth::user();
            $user_id=$user->id;
            $count=Cart::where('user_id',$user_id)->count();
        }
        else{
            $count='';
        }
        return view('home.index',compact('product','count'));
    }

    public function product_details($id){

        $data=Product::find($id);
        if(Auth::id()){
            $user=Auth::user();
            $user_id=$user->id;
            $count=Cart::where('user_id',$user_id)->count();
        }
        else{
            $count='';
        }
        return view('home.product_details',compact('data','count'));
    }
    public function add_cart($id){
        $product_id=$id;
        $user=Auth::user();
        $user_id=$user->id;

        $data=new Cart;
        $data->user_id=$user_id;
        $data->product_id=$product_id;

        $data->save();

        toastr()->timeOut(5000)->closeButton()->success('Product Added To The Cart Successfully');
        return redirect()->back();
    }
    public function mycart(){
        if(Auth::id()){
            $user=Auth::user();
            $userid=$user->id;
            $count=Cart::where('user_id',$userid)->count();

            $cart=Cart::where('user_id',$userid)->get();
        }
        else{
            $count='';
        }
        return view('home.mycart',compact('count','cart'));
    }
    public function remove_cart($id){
        $data = Cart::find($id);
        
        $data->delete();

        toastr()->timeOut(5000)->closeButton()->success('Product Remove From The Cart Successfully');

        return redirect()->back();
        
    }


    public function comfirm_order(Request $request){
        $name=Auth::user()->name;
        $address=Auth::user()->address;
        $phone=Auth::user()->phone;

        $userid=Auth::user()->id;
        $cart=Cart::where('user_id',$userid)->get();

        foreach($cart as $carts){
            $order=new Order();
            $order->name=$name;
            $order->rec_address=$address;
            $order->phone=$phone;
            $order->user_id=$userid;
            $order->product_id=$carts->product_id;

            $order->save();
            
        }
        $cart_remove=Cart::where('user_id',$userid)->get();

        foreach($cart_remove as $remove){
            $data=Cart::find($remove->id);

            $data->delete();
            
        }
        toastr()->timeOut(5000)->closeButton()->success('Order Place Successfully');
        return redirect('/');
        
    }

    public function myorders(){

            $user=Auth::user()->id;
            $count=Cart::where('user_id',$user)->get()->count();

            $order=Order::where('user_id',$user)->get();

        return view('home.myorders',compact('count','order'));
    }

    public function stripe($value)
    {
        $user=Auth::user()->id;
        $count=Cart::where('user_id',$user)->get()->count();
        $cart=Cart::where('user_id',$user)->get();
        return view('home.stripe',compact('count','value','cart'));
    }

    public function stripePost(Request $request,$value)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $value * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);

        $name=Auth::user()->name;
        $address=Auth::user()->address;
        $phone=Auth::user()->phone;

        $userid=Auth::user()->id;
        $cart=Cart::where('user_id',$userid)->get();

        foreach($cart as $carts){
            $order=new Order();
            $order->name=$name;
            $order->rec_address=$address;
            $order->phone=$phone;
            $order->user_id=$userid;
            $order->product_id=$carts->product_id;

            $order->payment_status = "paid";

            $order->save();
            
        }
        $cart_remove=Cart::where('user_id',$userid)->get();

        foreach($cart_remove as $remove){
            $data=Cart::find($remove->id);

            $data->delete();
            
        }
        toastr()->timeOut(5000)->closeButton()->success('Order Place Successfully');
        return redirect('/');
      
        /* Session::flash('success', 'Payment successful!');
              
        return back(); */
    }
}
