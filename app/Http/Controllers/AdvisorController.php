<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class AdvisorController extends Controller
{
    //



    public function createAdvisor( Request $request)
    {
    	$validaterData=$request->validate([
          'email'=>'required',
          'password' => 'required|min:6|confirmed'
         
    	]);

    	$advisor= new advisor;

         
         $advisor->email=request('email');
         $advisor->password=bcrypt(request('password'));
         if(!$advisor::where('email',request('email'))->count())
         {
         	$advisor
         	->save();
         	return view('advisor.advisorInfo');
         }
         else{
         	return redirect('/');

         }
         
        // \Mail::to($user)->send(new welcome($user));
    	//::create(request(['name','email','password']));
   		// auth()->login($user);
         	

   		

    }
}
