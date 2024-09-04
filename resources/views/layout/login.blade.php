<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
{{--    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">--}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 ">
@include('component.nav')
<form class="grid justify-center justify-items-center gap-y-9 text-gray-100 font-bold mt-6" action="{{route('login')}}" method="get">
    @csrf
    <div>
    <label class="text-gray-300 ml-3" for="email">Email</label><br>
    <input class="w-[70vw] md:w-[50vw] p-2 rounded-xl bg-slate-700 mt-1" type="email" id="email" name="email" placeholder="Enter Your Email" required>
    </div>
    <div>
    <label class="text-gray-300 ml-3" for="password">Password</label><br>
    <input class="w-[70vw] md:w-[50vw] p-2 rounded-xl bg-slate-700 mt-1" type="password" id="password" name="password" placeholder="Enter Your Password" required>
    </div>
    <a class="text-violet-200 hover:text-blue-500 font-semibold" href="/create">I don't have account</a>
    <button class="hover:font-extrabold bg-blue-500 font-bold hover:bg-green-500 px-3 py-2 rounded-2xl text-white" type="submit">Login</button>
    <p style="color: red">{{session('done')}}</p>


</form>

@include('component.footer')
</body>
</html>
