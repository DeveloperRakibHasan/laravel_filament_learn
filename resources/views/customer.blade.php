<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Registration</title>
</head>
<body>
<div class="flex w-screen h-screen justify-center items-center">
    <div class="shadow-md px-10 pb-10 rounded-xl w-[900px]">
        <h1 class="text-center text-4xl font-bold my-10">Customer Registration</h1>
        <form action="{{url('/')}}/customer" method="post">
            @csrf
            <div class="flex items-center gap-5 w-full">
                <div class="flex flex-col gap-3 mb-5 w-full">
                    <label>Name</label>
                    <input type="text" name="name" id="" class="border border-black/10 p-2 rounded-md" placeholder="" value="{{old('name')}}" />
                    <span class="text-red-400">
                    @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="flex flex-col gap-3 mb-5 w-full">
                    <label>Email</label>
                    <input type="email" name="email" id="" class="border border-black/10 p-2 rounded-md" placeholder="" value="{{old('email')}}" />
                    <span class="text-red-400">
                    @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="flex items-center gap-5 w-full">
            <div class="flex flex-col gap-3 mb-5 w-full">
                <label>Password</label>
                <input type="password" name="password" id="" class="border border-black/10 p-2 rounded-md" placeholder="" />
                <span class="text-red-400">
                 @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div>
                <div class="flex flex-col gap-3 mb-5 w-full">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" id="" class="border border-black/10 p-2 rounded-md" placeholder="" />
                    <span class="text-red-400">
                    @error('confirm_password')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="flex items-center gap-3 w-full">
            <div class="flex flex-col gap-3 mb-5 w-full">
                <label>Country</label>
                <select name="country" class="border border-black/10 p-2 rounded-md bg-transparent">
                    <option>Bangladesh</option>
                    <option>USA</option>
                </select>
                <span class="text-red-400">
                 @error('country')
                    {{$message}}
                    @enderror
                </span>
            </div>
                <div class="flex flex-col gap-3 mb-5 w-full">
                    <label>State</label>
                    <select name="state" class="border border-black/10 p-2 rounded-md bg-transparent">
                        <option>Bogura</option>
                        <option>Dhaka</option>
                    </select>
                    <span class="text-red-400">
                    @error('state')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="flex flex-col gap-3 mb-5 w-full">
                <label>Address</label>
                <textarea name="address" class="border border-black/10 p-2 rounded-md" placeholder=""></textarea>
                <span class="text-red-400">
                 @error("address")
                    {{$message}}
                    @enderror
                </span>
            </div>

            <div class="flex items-center gap-3 w-full">
                <div class="flex flex-col gap-3 mb-5 w-full">
                    <label>Date of birth</label>
                    <input type="date" name="dob" id="" class="border border-black/10 p-2 rounded-md" placeholder="" />
                    <span class="text-red-400">
                    @error("dob")
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="flex flex-col gap-3 mb-5 w-full ml-5">
                    <label>Gender</label>
                    <div class="flex items-center gap-5">
                       <div class="space-x-1.5">
                           <input type="radio" id="html" name="gender" value="M">
                           <label for="html">Male</label>
                       </div>
                        <div class="space-x-1.5">
                            <input type="radio" id="css" name="gender" value="F">
                            <label for="css">Female</label>
                        </div>
                        <div class="space-x-1.5">
                            <input type="radio" id="javascript" name="gender" value="O">
                            <label for="javascript">Other</label>
                        </div>
                    </div>
                    <span class="text-red-400">
                    @error("gender")
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <button class="w-full bg-blue-400 text-white rounded-md py-2" type="submit">
                Submit
            </button>
        </form>
    </div>
</div>
</body>
</html>
