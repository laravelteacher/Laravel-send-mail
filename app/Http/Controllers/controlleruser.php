<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rgistmoney;
use Mail;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Route;


class controlleruser extends Controller
{
    //
    public function showuser(){
        $user = 'How are you';
        return view('homeregister', compact('user'));
    }


    public function createuser(){
        
        return view('createuser');
    }

    public function saveuser(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        
        $user = new rgistmoney;  
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $use = rgistmoney::get('email')->where('email',$request->email)->first();
        if($use){
           
            
            return redirect()->back()->with('success', 'The Email is already');

        }else{
            $user->save();
            //return redirect()->back()->with('success', 'has success');
            return redirect()->Route::get('/users', 'controlleruser@showusers');




            
            
            
        }
    }

    public function showusers(){
        $user = rgistmoney::get('name');

        return view('users', compact('user'));
    }
}
