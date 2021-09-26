<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;


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
           ->select("products.*")
           ->get();

           return view("cartlist", ["products"=>$products]);
        
        
    }
}
