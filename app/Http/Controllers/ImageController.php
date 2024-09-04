<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    function post(Request $request)
    {
        $email = $request->session()->get('user');
        $password = $request->session()->get('id');
        $user = User::where('email', $email)->first();

        if ($user && $password === $user->password){
            return view('layout.image.post');
        }
        else{
            return redirect('/login');
        }

    }



    function imagePost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $email = $request->session()->get('user');
        $password = $request->session()->get('id');
        $user = User::where('email', $email)->first();

        if ($user && $password === $user->password){
            $image = $request->file('image');
            $title = $request->input('title');
            $body = $request->input('body');
            $imageName = $title.$user->id.'.png';
            $image->move(public_path('uploads'), $imageName);
            DB::table('posts')->insert([
                "user_id" => $user->id,
                "image" => $imageName,
                "title" => $title,
                "body" => $body,
            ]);
            return redirect('/post')->with(["upload"=>"Upload Successful {$title}"]);
        }
        else{
            return redirect('/login');
        }

    }

    function index(Request $request){


        $posts =  DB::table('users')->Join('posts', 'posts.user_id', '=', 'users.id')->orderBy('posts.created_at', 'desc')->get();

        return view('index', compact('posts'));
    }


    function imagePage($id)
    {
        $name= Post::where('id', $id)->first();
        $image = Post::where('id', $id)->get();


        return view('layout.image.imagePage', ['images' => $image, 'name' => $name ,]);
    }

    function download($id)
    {
        $name= Post::where('id', $id)->first();
        $image = Post::where('id', $id)->get();
//        $post = Post::find($id);
        $filePath = "uploads/{$name->image}";
        return response()->download($filePath);
    }


}
