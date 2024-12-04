@extends('layouts.main')

@section('container')
    <div class="border h-[100vh] bg-[#f5f6fa]">
        <form method="post" action="/updateUser/{{ session('id') }}"
            class="row container mx-auto grid grid-cols-2 gap-[20px] mt-[50px] bg-white rounded-[7px] shadow-md"
            enctype="multipart/form-data">
            @csrf
            <div class="col p-[15px]">
                <p class="text-[15px]">Edit Profile</p>
                <div class="border p-[15px] flex flex-col gap-[10px] mt-[10px]">
                    <div>
                        <p class="text-[12px]">Your Name</p>
                        <input type="text" name="username" id="username"
                            class="border w-full text-[13px] p-[7px] mt-[5px]" value="{{ session('name') }}">
                    </div>
                    <div>
                        <p class="text-[12px]">Phone</p>
                        <input type="number" name="phoneNumber" id="phoneNumber"
                            class="border w-full text-[13px] p-[7px] mt-[5px]" value="{{ session('phone') }}">
                    </div>
                    <div>
                        <p class="text-[12px]">Description</p>
                        <textarea name="description" id="" cols="30" rows="10"
                            class="border w-full text-[13px] p-[7px] mt-[5px] max-h-[110px]" maxlength="180">{{ session('description') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col p-[15px]">
                <div class="border p-[15px] flex flex-col gap-[10px] mt-[10px]">
                    <div>
                        <p class="text-[12px]">Current Password</p>
                        <input type="password" name="password" id="newPassword"
                            class="border w-full text-[13px] p-[7px] mt-[5px]" required>
                    </div>
                </div>
                <div class="text-end">
                    <a href="/dashboard" class="text-[13px] px-[50px] py-[8px] border mr-[5px] rounded-[5px]">Cancel</a>
                    <button type="submit"
                        class="text-[13px] px-[50px] py-[8px] mt-[10px] bg-[#007aff] text-white rounded-[5px]">Save</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Country
            const countryBtn = document.getElementById('countryBtn');
            const countryList = document.getElementById('countryList');
            const selectedCountry = document.getElementById('selectedCountry')

            countryBtn.addEventListener('click', () => {
                countryList.classList.toggle('hidden');
            });

            document.querySelectorAll('#countryList li').forEach(item => {
                item.addEventListener('click', () => {
                    const countryValue = item.getAttribute('data-value')
                    countryBtn.textContent = countryValue;
                    selectedCountry.value = countryValue
                    countryList.classList.add('hidden');
                });
            });

            // Language
            const languageBtn = document.getElementById('languageBtn')
            const languageList = document.getElementById('languageList')
            const selectedLanguage = document.getElementById('selectedLanguage')

            languageBtn.addEventListener('click', () => {
                languageList.classList.toggle('hidden')
            })

            document.querySelectorAll('#languageList li').forEach(item => {
                item.addEventListener('click', () => {
                    const languageValue = item.getAttribute('data-value');
                    languageBtn.textContent = languageValue
                    selectedLanguage.value = languageValue;
                    languageList.classList.add('hidden')
                })
            })
        });
    </script>
@endsection
