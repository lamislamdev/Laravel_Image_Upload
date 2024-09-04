<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">--}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{$name->title}}</title>
</head>
<body class="bg-gray-800">

<ul>
    @include('component.nav')
    <div class="grid justify-center justify-items-center ">
    @foreach($images as $post)
        <div class="grid justify-center justify-items-center mt-5">
            <h4 class="text-2xl font-bold text-gray-200 ">{{$post->title}}</h4>
            <p class="text-stone-400 font-bold">{{$post->body}}</p>

       <img class="h-[50vh] mt-5" src="{{asset('uploads/'.$post->image)}}" alt="{{$post->title}}">
        </div>
    @endforeach
            <a class="hover:font-extrabold bg-black font-bold hover:bg-green-500 px-6 py-3 rounded-xl text-white mt-7 " href="{{asset('uploads/'.$post->image)}}" download="">Download Image</a>
    </div>
</ul>
@include('component.footer')
</body>
</html>
