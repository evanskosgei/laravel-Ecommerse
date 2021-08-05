<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;

class UserLogin extends Controller
{
    public function loginPage(){
        return view("login");   
      }


      //login
    public function login(Request $request){
      $user = User::where(['name'=>$request->name])->first();
      if(!$user){
        return "user details unavailable";
      }
      if(Hash::check($request->password, $user->password)){
        
      }
      if($user->role ==1){
        return redirect('/dashboard');
      }
      else{
        
      }
  }
    //register
    public function storeUser(Request $request){
      $name = $request->name;
      $email = $request->email;
      $password = $request->password;

      $user = new User();
      $user->name = $name;
      $user->email = $email;
      $user->password =Hash::make($password);
      $user->save();
    }  
      //if($user==[]){
      //return back()->with('user_added','details submited successfully');
      //}
      //else{
         //return('Error same details exist submited successfully');
      //  return back()->with('user_not','Error same details exist submited successfully');
      //}
      //$request ->validate([
      //    "name"=>"required",
      //    "email"=>"required |email",
      //    "password"=>"required |min:8 |max:8",
      //]);

      //  $name = $request->name;
      //  $email = $request->email;
      //  $password =$request->password;

      //  $user = new User();
      //  $user->name = $name;
      //  $user->email = $email;
        //$user->password=Hash::make($password);
      //  $user ->password = $password;
      //  dd($user);

      //  $user->save();
}
