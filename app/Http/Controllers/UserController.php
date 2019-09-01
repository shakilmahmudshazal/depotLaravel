<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class UserController extends Controller
{
    //



    public function createUser( Request $request)
    {
    	$validaterData=$request->validate([
          'email'=>'required',
          'password'=>'required|confirmed'
         
    	]);

    	$user= new user;

         
         $user->email=request('email');
         $user->password=bcrypt(request('password'));
         if(!$user::where('email',request('email'))->count())
         {
         	$user->save();
         	return view('users.userInfo');
         }
         else{
         	return redirect('/');

         }
         
        // \Mail::to($user)->send(new welcome($user));
    	//::create(request(['name','email','password']));
   		// auth()->login($user);
         	

   		

    }
}
