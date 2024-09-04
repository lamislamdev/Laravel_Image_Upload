<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">--}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Site Name</title>
</head>
<body class="bg-gray-800 ">
@include('component.nav')
<ul class="grid justify-center justify-items-center grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-7 mt-9">
    @foreach($posts as $post)
        <li class=" w-[80vw] md:w-[40vw] lg:w-[20vw] bg-gray-700 rounded-xl shadow shadow-stone-100 ">

            <h4 class=" font-extrabold text-gray-300 my-2 ml-2">{{$post->title}}</h4>
            <p class="text-sm text-stone-500 ml-2">{{$post->body}}</p>
            <a href="{{route('imagePage',$post->id)}}"><img class=" w-full h-auto lg:w-[256px] lg:h-[144px] rounded-xl" src="{{asset('uploads/'.$post->image)}}" alt="{{$post->body}}"></a>
        </li>
    @endforeach
</ul>
@include('component.footer')
</body>
</html>
