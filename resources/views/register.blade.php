<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="flex w-screen h-screen justify-center items-center">
<div class="shadow-md px-10 pb-10 rounded-xl w-[500px]">
    <h1 class="text-center text-4xl font-bold my-10">Registration</h1>
    <form action="{{url('/')}}/registration" method="post">
        @csrf
        <div class="flex flex-col gap-3 mb-5">
            <label>Name</label>
            <input type="text" name="name" id="" class="border border-black/10 p-2 rounded-md" placeholder="" value="{{old('name')}}" />
            <span class="text-red-400">
                @error('name')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="flex flex-col gap-3 mb-5">
            <label>Email</label>
            <input type="email" name="email" id="" class="border border-black/10 p-2 rounded-md" placeholder="" value="{{old('email')}}" />
            <span class="text-red-400">
                 @error('email')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="flex flex-col gap-3 mb-5">
            <label>Password</label>
            <input type="password" name="password" id="" class="border border-black/10 p-2 rounded-md" placeholder="" />
            <span class="text-red-400">
                 @error('password')
                {{$message}}
                @enderror
            </span>
        </div>
        <div class="flex flex-col gap-3 mb-5">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" id="" class="border border-black/10 p-2 rounded-md" placeholder="" />
            <span class="text-red-400">
                 @error('confirm_password')
                {{$message}}
                @enderror
            </span>
        </div>
        <button class="w-full bg-blue-400 text-white rounded-md py-2" type="submit">
            Submit
        </button>
    </form>
    <div>
        <p class="text-gray-400 text-center py-5">
            Already have an account?
        </p>
        <a href="/login">
        <button class="w-full bg-transparent border border-blue-400 text-blue-400 rounded-md py-2">
            Login
        </button>
        </a>
    </div>
</div>
</div>
</body>
</html>
