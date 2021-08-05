<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\Middleware\UserAuth;

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
Route::get('/dashboard',[AdminController ::class,'index'])->middleware('ProtectedPage');
Route::get('/itemshow',[AdminController ::class,'itemBlade']);
Route::get('/additems',[AdminController ::class,'addItem']);
Route::get('/addcategories',[AdminController ::class,'addCategory']);
Route::get('/addcountries',[AdminController ::class,'addCountry']);
Route::post('/addcountries',[AdminController ::class,'storeCountry'])->name('country.store');
Route::get('/addtypes',[AdminController ::class,'addtype']);
Route::post('/addtypes',[AdminController ::class,'storeType'])->name('type.store');
Route::post('/addcategories',[AdminController ::class,'storeCategories'])->name('category.store');
Route::post('/additems',[AdminController ::class,'storeItems'])->name('item.store');
Route::get('/additems',[AdminController ::class,'selectCountry']);
Route::get('//itemshow',[AdminController::class,'items']);
Route::get('/delete-item/{id}',[AdminController::class,'deleteItem']);
Route::post('/update-item',[AdminController::class,'updateItem'])->name('item.update');
Route::get('/edit-item/{id}',[AdminController::class,'editItem']);


//login route
//Auth::routes();
Route::get('/login',[UserLogin ::class,'loginPage'])->name('login')->middleware('ProtectedPage');
Route::post('/login',[UserLogin ::class,'login']);
Route::post('/store',[UserLogin ::class,'storeUser'])->name('user.store');



//user routes
Route::get('/', [UserController :: class, 'index']);
Route::get('/',[UserController ::class,'showItems']);
Route::get('/products',[UserController ::class,'productPage']);
Route::get('/404',[UserController ::class,'blockPage']);
Route::get('/blog-single',[UserController ::class,'blog_singlePage']);
Route::get('/checkout',[UserController ::class,'checkoutPage']);
Route::get('/blog',[UserController ::class,'blogPage']);
Route::get('/shop',[UserController ::class,'shopPage']);
Route::get('/shop',[UserController ::class,'showShop']);
Route::get('/contact-us',[UserController ::class,'contactPage']);
Route::get('/cart',[UserController ::class,'cartPage']);
Route::post('/add_to_cart',[UserController ::class,'addToCart']);
Route::get('itemdetals/{id}',[UserController ::class,'itemDetails']);
//search
Route::get('/search',[UserController ::class,'search'])->name('search.item');


//logout
Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');