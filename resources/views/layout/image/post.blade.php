<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Image</title>
    <script src="https://cdn.tailwindcss.com"></script>
{{--    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">--}}

</head>
<body class="bg-gray-800">
@include('component.nav')
<form class="grid justify-center justify-items-center gap-y-9 text-gray-100 font-bold mt-6" enctype="multipart/form-data" action="{{route('postImage')}}" method="post">
    @csrf
    <div>
        <label class="text-gray-300 ml-3" for="image">Upload Your Image</label><br>
    <input class="w-[70vw] md:w-[50vw] p-2 rounded-xl bg-slate-700 mt-1" type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg" required>
    </div>
    <div>
        <label class="text-gray-300 ml-3" for="title">Name</label><br>
        <input class="w-[70vw] md:w-[50vw] p-2 rounded-xl bg-slate-700 mt-1" type="text" id="title" name="title" placeholder="Enter Image Title" required>
    </div>
    <div>
        <label class="text-gray-300 ml-3" for="body">Name</label><br>
        <input class="w-[70vw] md:w-[50vw] p-2 rounded-xl bg-slate-700 mt-1" type="text" id="body" name="body" placeholder="Enter Image Details" required>
    </div>
    <button class="hover:font-extrabold bg-blue-500 font-bold hover:bg-green-500 px-3 py-2 rounded-2xl text-white" type="submit">Upload</button>
    <p>{{session('upload')}}</p>
</form>
@include('component.footer')
</body>
</html>
