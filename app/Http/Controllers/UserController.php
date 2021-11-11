<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    //login function
    public function login(Request $request){
        $User = User::where([
            'email' => $request->email
        ])->first();
        if (!$User || !Hash::check($request->password, $User->password)){
            return "Username or password is incorrect";
        }
        else{
            $request->session()->put('user', $User);
            return redirect('/');
        }
    }
}
