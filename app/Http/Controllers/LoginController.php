<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;


class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect('dashboard');
        }else{
            return view('auth.login');
        }
        $user = Auth::user();        
        
    }
    public function proses_login(Request $request){
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]            
        );
        $kredensil = $request->only('email','password');

        // dd(Auth::attempt($kredensil));

        if(Auth::attempt($kredensil)){                       
            // $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }else{            
            Session::flash('error', 'Email dan Password salah');
            return redirect("login");
        }
        
            
    }
    public function logout(Request $request){ 
        $request->session()->flush();
        Auth::logout();        
        return redirect('login');
    }
}
