<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$name->name}}</title>
{{--    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">--}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 ">
@include('component.nav')
<div class="grid justify-center justify-items-center mt-9 ">
    @foreach($users as $user)
        <img class="w-[200px] h-[200px] rounded-full" src="{{asset('users/'.$user->avatar)}}" alt="image">
        <div>
        <p class="text-lg font-bold text-gray-200">User ID : {{$user->id}}</p>
        <h2 class="text-lg font-bold text-gray-200">Name : {{$user->name}}</h2>
        <p class="text-lg font-bold text-gray-200">Email: {{$user->email}}</p>
        <p class="text-lg font-bold text-gray-200">IP : {{$user->ip}}</p>
        </div>
    @endforeach

    <div class="flex gap-x-10 text-stone-500 font-bold mt-7">
    <a class="hover:text-yellow-500" href="{{route('update')}}">Edit Profile</a>
    <a class="hover:text-red-500" href="{{route('logout')}}">Logout</a>
    <a class="hover:text-green-500" href="{{route('myPost')}}">My Posts</a>
    </div>
</div>
@include('component.footer')
</body>
</html>
