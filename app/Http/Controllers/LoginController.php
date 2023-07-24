<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    private function valid($req){
        return    $req->validate([
            'email'=>   'required|email',
            'password'=>    'required',
        ]);

    }
    public function index(){
        return view('Login');
    }
    public function login(Request $req){
        $validUser = $this->valid($req);
        if($validUser==true){
            $user=User::where(['email'=> $req['email']])->first();

            if($user == null){
                return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
            }
            if(Auth::attempt($req->only('email','password'))) {
                $req->session()->regenerate();
                // $email= compact($req['email']);
                return redirect('/homepage');
            }
                        print_r($req->only('email','password'));
        }
    }
    public function logout(Request $req){
        auth()->logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }
}
