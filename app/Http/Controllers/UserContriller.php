<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserContriller extends Controller
{
    function create(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        User::create($request->all());
        return redirect('/create')->with("done", "Account created");
    }
    function login(Request $request)
    {
        $user = User::where("email", $request->input("email"))->first();
        $password = $request->input("password");



        if ($user && $password === $user->password) {
            $request->session()->put("user", $user->email);
            $request->session()->put("id", $password);
            return redirect('/profile')->with("done", "login success");

        }
        else{

            return redirect('/login')->with("done", "Email or password is not correct");

        }
    }
    function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');

    }
}
