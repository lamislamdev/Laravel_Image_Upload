<nav class="grid md:flex justify-center md:justify-around items-center bg-slate-800 drop-shadow-lg overflow-hidden text-stone-300 ">
    <div>
        <a href="/" class="mt-2 flex justify-center items-center gap-3"><img class="w-16" src="{{asset('users/logo.png')}}" alt="logo">
            <span class="font-semibold">Image Uploader <br> Upload Your Favorite Image </span>
        </a>
    </div>


    <div>
        <ul class="flex justify-center  items-center gap-10">
            <a href="/">
                <li class="hover:font-extrabold">Home</li>
            </a>
            <a href="/">
                <li class="hover:font-extrabold">About</li>
            </a>

            <a href="/">
                <li class="hover:font-extrabold">Contact Us</li>
            </a>
        </ul>
    </div>
    <div class="flex flex justify-center items-center gap-x-3">

        <a class="hover:font-extrabold bg-black font-bold hover:bg-green-500 px-3 py-2 rounded-2xl text-white " href="{{route('profile')}}">Dashboard</a>
        <a class="hover:font-extrabold bg-[#FFF103] font-bold hover:bg-green-500 px-3 py-2 rounded-2xl text-black" href="{{route('post')}}">Post Now</a>
    </div>
</nav>
