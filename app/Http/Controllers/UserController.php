<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Type;
use App\Models\Country;
use App\Models\CartItem;
use Session;

class UserController extends Controller
{
    public function index(){
        return view('User.index');
    }
    public function showItems(){
        $item = Item::all();
        $type = Type::all();
        $country = Country::all();
        return view("User.index", ['item'=>$item,'type'=>$type, 'country'=>$country ]);
    }
    public function loginPage(){
        return view("login");
    }
    public function productPage(){
        return view("User.product-details");
    }
    public function blockPage(){
        return view("User.404");
    }
    public function blog_singlePage(){
        return view("User.blog-single");
    }
    public function checkoutPage(){
        return view("User.checkout");
    }
    public function blogPage(){
        return view("User.blog");
    }
    public function shopPage(){
        return view("User.shop");
    }
    public function showShop(){
        $items = Item::all();
        return view('User.shop', compact('items'));
    }
    public function contactPage(){
        return view("User.contact-us");
    }
    public function cartPage(){
        return view("User.cart");
    }


    //trial
    public function newPage(){
        return view("User.new");
    }
    public function newItems(){
        $item = Item::all();
        $type = Type::all();
        $country = Country::all();
        return view("User.new", ['item'=>$item,'type'=>$type, 'country'=>$country ]);
    }
    public function addToCart(Request $request){
        $cart = new CartItem;
        $cart->product_id = $request->product_id;
        $cart->save();
        return redirect()->back();
    }
   //static function cartItems(){
    //   $userId = Session::get('user')['id'];
        //return CartItem::where('user_id',$userId)->count();
    //    return CartItem::all()->count();
    //}
    //public function muti(){
    //    if($request->Session()->has('user')){
    //        $cart = new CartItem;
            //$cart->user_id = $request->Session()->get('user')['id'];
    //        $cart->product_id = $request->product_id;
    //        $cart->save();
    //        return redirect("/userdashboard");
    //
    //        }
    //        else{
    //            return redirect('/userdashboard');
    //        }
    //}
    public function itemDetails($id){
        $data = Item::find($id);
        return view('User.itemdetail',['product'=>$data]);
    }

    public function search(Request $request){
       $data = Item::
       where('type','like', '%'.$request->input('query').'%')
       ->get();
       if(!$data){
           return "Item type not found";
       }
       else{
       return view('User.search',['products'=>$data]);
       }
    }
}
