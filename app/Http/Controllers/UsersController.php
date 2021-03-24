<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersController extends Controller
{
    //
    public function register(request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
            'name'=>'required',
            'telephonne'=>'required',
            'ville'=>'required'
        ]);
        User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->Hash::make($request->password),
        'telephonne'=>$request->telephonne,
        'ville'=>$request->ville 

        ]);
        return redirect()->route(users.login)->with([
            'success'=>'le compte est cree' 
        ]);

    }
    public function login(){
      
     return view('users.login') ;

    }
    public function auth(request $request){
      
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        if(auth()->attempt(['email'=>$request->email,'password'=>$request->password]))
        {return redirect()->route('car.index');}
        else{ return redirect()->route(users.login)->with([
            'error'=>'email or password incorect'
        ]);}
   
       }
    public function logout(){
        auth()->logout();
        return redirct()->route('cars.index');
    }   
}
 