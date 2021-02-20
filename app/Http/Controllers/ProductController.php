<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//using Models
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
// getting session
use Session;
//using database DB
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view("product",['productData'=>$data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('detail',['itemData'=>$data]);
    }

    function search (Request $req){
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view ("search",["productData"=>$data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart();
            $cart->product_id=$req->product_id;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->save();
            return redirect("/");
        }else{
            return redirect("/login");
        }
    }
    
    // below function has static as the return is not static (ie dynamic ) so inorder to make it sattic we use keyword static
    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartlist(){
        $userId = Session::get('user')['id'];
        //using join to get info from other tables
        //-.join(tableName,another table name)
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['products_item'=>$products]);
    }

    function delete_cart_item($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow(){
        $userId = Session::get('user')['id'];
        //using join to get info from other tables
        //-.join(tableName,another table name)
        $itemCost = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('ordernow',['total_cost'=>$itemCost]);
    }

    function orderPlace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart= Cart::where('user_id',$userId)->get();
        foreach ($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect("/");
    }

    function orderList(){
        $userId = Session::get('user')['id'];
        $order = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view("orderlist",['orderItem'=>$order]);
    }
}
