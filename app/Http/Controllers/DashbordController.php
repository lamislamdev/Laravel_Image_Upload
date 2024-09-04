<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DashbordController extends Controller
{
    function profile(Request $request){
        $email = $request->session()->get('user');
        $password = $request->session()->get('id');
        $user = User::where('email', $email)->first();

        if ($user && $password === $user->password){

            $user->update(["ip"=>$request->ip()]);
            $users = User::where('email', $email)->get();
            return view('layout.dashbord', ['users' => $users , "name"=>$user]);

        }
        else{
            return redirect('/login');
        }

    }



    function update(Request $request){

        $email = $request->session()->get('user');
        $password = $request->session()->get('id');
        $user = User::where('email', $email)->first();

        if ($user && $password === $user->password){
//            $users= User::where('email', $email)->get();
            return view('layout.updateProfile',["user" => $user]);
        }
        else{
            return redirect('/login');
        }

       }



    function updateProfile(Request $request)
    {
        $email = $request->session()->get('user');
        $password = $request->session()->get('id');
        $user = User::where('email', $email)->first();
        $avatar = $request->file('avatar');
        $avatarName = $user->id.'.png';
        if ($user && $password === $user->password){
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'nullable|string|min:6',
                'avatar' => 'mimes:jpeg,jpg,png'
            ]);

            $data = $request->only(['name', 'email', 'avatar']);
            if ($request->filled('password')) {
                $data['password'] = $request->input('password');
            }
            $avatar->move(public_path('users'), $avatarName);
            $data['avatar'] = $avatarName;
            $user->update($data);
            return redirect('/profile')->with('success', 'Profile updated successfully');
        }
        else{
            return redirect('/login');
        }

    }



    function myPost(Request $request){
        $email = $request->session()->get('user');
        $password = $request->session()->get('id');
        $user = User::where('email', $email)->first();

        if ($user && $password === $user->password){

            $users = User::where('email', $email)->get('id');
            $post = DB::table('posts')->where('user_id', $users[0]->id)->get();
//            return $post ;
            return view('layout.image.myPost', ['posts' => $post ]);

        }
        else{
            return redirect('/login');
        }

    }




}
