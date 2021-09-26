<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;


class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view("product", ['products' => $data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view("detail", ['product' => $data]);
    }
    
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart();
            $cart->user_id = $req->session()->get('user')["id"];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    
    function removeCart($id)
    {
       Cart::destroy($id);
       return redirect("cart_list");
        
    }
    static function cartItem()
    {
        
        
            $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
        
        
    }
    static function cartList()
    {
        
            $userId = Session::get('user')['id'];
           $products = DB::table('cart')
           ->join("products", "cart.product_id","=","products.id")
           ->where("cart.user_id",$userId)
           ->select("products.*", "cart.id as cart_id")
           ->get();

           return view("cartlist", ["products"=>$products]);
        
        
    }
    
    function orderNow()
    {
        $userId = Session::get('user')['id'];
           $total = DB::table('cart')
           ->join("products", "cart.product_id","=","products.id")
           ->where("cart.user_id",$userId)
           ->select("products.*", "cart.id as cart_id")
           ->sum("products.price");

           return view("ordernow", ["total"=>$total]);
     
    }
    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where("user_id",$userId)->get();
        foreach ($allCart as $key) {
            $order = new Order;
            $order->product_id = $key["product_id"];
            $order->user_id = $key["user_id"];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where("user_id",$userId)->delete();
        }
        return redirect('/');
    }
}
