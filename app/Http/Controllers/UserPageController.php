<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserPageController extends Controller
{
    function profilePage(Request $request, $id){
        $email = $request->session()->get('user');
        $password = $request->session()->get('id');
        $user = User::where('email', $email)->first();

        if ($user && $password === $user->password){
            $user= DB::table('users')->where('id', $id)->first();
            $posts = Post::where('user_id', $id)->get();
            return view('layout.image.userPage', ['users' => $user , "posts" => $posts]);
        }
        else{
            return redirect('/login');
        }
    }
}
