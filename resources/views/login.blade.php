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
        <h1 class="text-center text-4xl font-bold my-10">Log in</h1>
        <form action="{{url('/')}}/login" method="post">
            @csrf
            <div class="flex flex-col gap-3 mb-5">
                <label>Email</label>
                <input type="email" name="email" id="" class="border border-black/10 p-2 rounded-md" placeholder="" />
                <span class="text-red-400">
                 @error('email')
                    {{$message}}
                    @enderror
            </span>
            </div>
            <div class="flex flex-col gap-3 mb-5">
                <label>Password</label>
                <input type="password" name="password" id="" class="border border-black/10 p-2 rounded-md" placeholder="" />
                <p class="text-end text-sm text-blue-400"><a href="">Forgot password?</a></p>
                <span class="text-red-400">
                 @error('password')
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
                No account?
            </p>
            <a href="/registration">
                <button class="w-full bg-transparent border border-blue-400 text-blue-400 rounded-md py-2">
                    Sign in
                </button>
            </a>
        </div>
    </div>
</div>
</body>
</html>
