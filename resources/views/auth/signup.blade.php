@extends('layouts.main')

@section('container')
    <div class="signup flex justify-center items-center">
        <div class="mainsignup border flex items-center">
            <div class="bgsignup"></div>
            <form action="/signup" method="post" class="p-[30px]">
                @csrf
                <h3 class="text-[24px] font-semibold mb-[10px]">Sign Up</h3>
                <div class="input-field flex flex-col gap-[10px]">
                    <div class="flex flex-col gap-[6px]">
                        <label for="name" class="text-[12px]">Username</label>
                        <input type="text" name="name" id="name"
                            class="border text-[14px] p-[8px] rounded-[3px] outline-none border-gray-400 w-[300px]"
                            required>
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <label for="phone" class="text-[12px]">Phone</label>
                        <input type="number" name="phone" id="phone"
                            class="border text-[14px] p-[8px] rounded-[3px] outline-none border-gray-400 w-[300px]"
                            required>
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <label for="password" class="text-[12px]">Password</label>
                        <input type="password" name="password" id="password"
                            class="border text-[14px] p-[8px] rounded-[3px] outline-none border-gray-400 w-[300px]"
                            required>
                    </div>
                    <button type="submit"
                        class="text-[13px] py-[10px] mt-[10px] rounded-[3px] text-white bg-[#175bd1] shadow-md">Continue</button>
                    <p class="text-[12px]">Already have an account? <a href="/" class="underline">SignIn</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
