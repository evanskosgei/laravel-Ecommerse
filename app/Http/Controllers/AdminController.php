<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Type;
use App\Models\Category;
use App\Models\Item;
use Session;

class AdminController extends Controller
{
    public function index(){
        return view("Admin.admindashboard");
    }
    public function itemBlade(){
        return view("Admin.items");
    }
    public function addItem(){
        return view("Admin.additems");
    }
    public function addCategory(){
        return view("Admin.AddCategory");
    }
    public function addCountry(){
        return view("Admin.addcountry");
    }
    public function addtype(){
        return view("Admin.addType");
    }
    public function storeCountry(Request $request){
        $countryCode = $request->countryCode;
        $countryName = $request->countryName;

        $country = new Country();
        $country->countryCode = $countryCode;
        $country->countryName = $countryName;

        $country->save();
        return back()->with('country_added','Country added successfully');
    }
    public function storeType(Request $request){
        $typeCode = $request->typeCode;
        $typeName = $request->typeName;

        $type = new Type();
        $type->typeCode = $typeCode;
        $type->typeName = $typeName;

        $type->save();
        return back()->with('type_added','Item type added successfully');
    }
    public function storeCategories(Request $request){
        $categoryCode = $request->categoryCode;
        $categoryName = $request->categoryName;

        $category = new Category();
        $category->categoryCode = $categoryCode;
        $category->categoryName = $categoryName;

        $category->save();
        return back()->with('category_added','Item category added successfully');
    }
    public function selectCountry(){
        $country = Country::all();
        $type = Type::all();
        $category = Category::all();
        return view("Admin.additems",['country'=>$country,'type'=>$type, 'category'=>$category ]);
    }
    public function storeItems(Request $request){
        $name = $request->name;
        $balance = $request->balance;
        $sellPrice = $request->sellPrice;
        $country = $request->country;
        $category = $request->category;
        $type = $request->type;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('image'),$imageName);
        $feature = $request->feature;

        $item = new Item();
        $item->name = $name;
        $item->balance = $balance;
        $item->sellPrice = $sellPrice;
        $item->country = $country;
        $item->category = $category;
        $item->type = $type;
        $item->itemImage = $imageName;
        $item->feature = $feature;
        $item->save();
        return back()->with('item_added','item record has been inserted sucessfully');
    }
    public function items(){
        $items = Item::all();
        return view('Admin.items', compact('items'));
    }
    public function deleteItem($id){
        $item = Item::find($id);
        unlink(public_path('image').'/'.$item->itemImage);
        $item->delete();
        return back()->with('item_deleted','item deleted successfully');
    }
    public function updateItem(Request $request){
        $name = $request->name;
        $balance = $request->balance;
        $sellPrice = $request->sellPrice;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('image'),$imageName);

        $item = Item::find($request->id);
        $item->name = $name;
        $item->balance = $balance;
        $item->sellPrice = $sellPrice;
        $item->itemImage = $imageName;
        $item->save();
        return back()->with('item_updated','item record has been updated sucessfully');
    }
    public function editItem($id){
        $item = Item::find($id);
        return view('Admin.edit-item',compact('item'));
    }
    public function logout(){
        if(Session()->has('user')){
            Session()->pull('user');
            return redirect('/login');
        }
    }
}
