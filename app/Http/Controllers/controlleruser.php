<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rgistmoney;
use Mail;
use App\Mail\MyTestMail;
use App\Mail\Salam;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class controlleruser extends Controller
{
    //

    public function __construct()
    {
    $this->middleware('auth');
    }

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
        //$user->password = $request->password;
        $user->password  = Hash::make($request->password);

        $use = rgistmoney::get('email')->where('email',$request->email)->first();
        if($use){  //if there is Email return false
                
            
            return redirect()->back()->with('success', 'The Email is already');

        }
        
        
        else{
            $user->save();

                Mail::to($user->email)->send(new Salam());
                return redirect()->back()->with('success', 'Has success & Email send, check your Gmail to confirm pleas');
    
        }
    }

    public function showusers(){
        $user = rgistmoney::get();
    
        return view('users', compact('user'));
    }


    //login
    // public function signin(Request $request){
        
    //     Auth::attempt([
    //         'email'=> $request->email,
    //         'password'=> $request->password
    //     ]);
    // }
        
        // {
        //     return redirect()->intended( route('showusers'));
        // }
        //return redirect()->back()->with('success', 'login redirect');
        

    
}
