@extends('layouts.main')

@section('container')
    <div class="login flex justify-center items-center">
        <div class="mainlogin border flex items-center">
            <div class="bg"></div>
            <form action="/login" method="post" class="px-[50px] w-[400px] flex flex-col">
                @csrf
                <p class="text-[30px] font-semibold mb-[15px]">Login</p>
                <div class="flex flex-col gap-[5px]">
                    <label for="name" class="text-[12px]">Username</label>
                    <input type="text" name="name" id="name"
                        class="border text-[14px] p-[8px] rounded-[3px] outline-none border-gray-400" required>
                </div>
                <div class="flex flex-col gap-[5px] mt-[15px]">
                    <label for="password" class="text-[12px]">Password</label>
                    <input type="password" name="password" id="password"
                        class="border text-[14px] p-[8px] rounded-[3px] outline-none border-gray-400">
                </div>
                <div class="text-[11px] mt-[18px] text-end">
                    <a href="#">Forget Password?</a>
                </div>
                <button type="submit"
                    class="text-[13px] py-[11px] mt-[15px] rounded-[3px] bg-[#175bd1] text-white">Login</button>
                <p class="text-[12px] mt-[20px]">Dont have an account? <a href="/signup" class="underline">SignUp</a></p>
            </form>
        </div>
    </div>
@endsection
