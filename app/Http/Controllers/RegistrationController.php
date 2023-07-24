<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
 use App\Models\User;
 use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Hash;


class RegistrationController extends Controller
{
    //
    private function valid(Request $req){
        return    $req->validate([
            'name'=>            ['required',
                                'regex:/^[a-zA-Z]+$/'],
            'email'=>           'required|email',
            'password'=>    [   'required',
                                'string',
                                'max:255',
                                Password::min(8)
                                    ->mixedCase()
                                    ->numbers()
                                    ->symbols()
                                    ->uncompromised()],
            'confirm-password'=>    'required|same:password'
        ]);

    }
    public function index(){
        return view('Registration');
    }
    public function register(Request $req){

        $validUser = $this->valid($req);
        if($validUser==true){
            $user=  new User;
            $user->name =   $req['name'];
            $user->email =   $req['email'];
            $user->password =  Hash::make( $req['password']);
            $user->save();

            return redirect('/login');
        }

    }
}
