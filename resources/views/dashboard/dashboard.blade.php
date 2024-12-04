@extends('layouts.main')

@section('container')
    @include('components.navbar')
    <div class="bg-[#f7f7f7]">
        <div class="container mx-auto py-[10px]">
            <div class="flex gap-[10px]">
                {{-- Left --}}
                <div class="flex flex-col gap-[10px] w-[600px]">
                    {{-- Profile --}}
                    <div class="col bg-white">
                        <div class="border flex flex-col justify-center items-center p-[15px]">
                            <img src="{{ session('userImage') ? asset('storage/' . session('userImage')) : asset('assets/icons/user.png') }}"
                                class="border rounded-full" id="potoProfile">
                            <div class="flex items-center text-[17px] my-[20px]">
                                <p>@</p>
                                <p>{{ session('name') }}</p>
                            </div>
                            <div class=" flex flex-col w-full gap-[8px] text-[14px]">
                                <div class="row">
                                    <div class="col flex justify-between items-center">
                                        <p>From</p>
                                        <p>Indonesia</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col flex justify-between items-center">
                                        <p>Member since</p>
                                        <p>2024</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#"
                                class="text-[13px] border w-full text-center py-[8px] mt-[15px] rounded-md hover:bg-[#00ABE4] hover:text-white">Preview
                                JasaKu
                                Profile</a>
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="border p-[15px] bg-white">
                        <p class="text-[14px] font-semibold">Description</p>
                        <p class="text-[13px] text-gray-400 mt-[10px] italic line-clamp-6">{{ session('description') }}</p>
                    </div>

                    {{-- Languages --}}
                    <div class="border p-[15px] bg-white">
                        <p class="text-[14px] font-semibold">Languages</p>
                        <div class="text-[13px] mt-[10px]">
                            <p class="text-[13px] text-gray-400 mt-[10px] italic">Indonesia</p>
                        </div>
                    </div>

                    {{-- Skills --}}
                    <div class="border p-[15px] bg-white">
                        <p class="text-[14px] font-semibold">Skills</p>
                        <div class="text-[13px] mt-[10px] flex gap-[5px] flex-wrap">
                            <p class="text-[13px] text-gray-400 italic">Trader</p>
                        </div>
                    </div>

                    {{-- Certification --}}
                    <div class="border p-[15px] bg-white">
                        <p class="text-[14px] font-semibold">Certification</p>
                        <div class="text-[13px] mt-[10px] flex flex-col gap-[10px]">
                            <div>
                                <p class="font-medium">Intern Web Development</p>
                                <div class="flex gap-[5px] text-[12px]">
                                    <p>Google</p>
                                    <p>2015</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="/dashboard/userEdit/{{ session('id') }}"
                        class="text-[13px] border text-center py-[4px] hover:bg-[#00ABE4] hover:text-white">Edit
                        preferences</a>
                </div>

                {{-- Right --}}
                <div class="gigs col w-full">
                    <div class="row grid grid-cols-3 gap-[10px]">
                        @foreach ($gigs as $gig)
                            <a href="/dashboard/gigEditPage/{{ $gig->id }}">
                                <div class="max-w-[240px]">
                                    <img src="{{ asset('storage/' . $gig['image']) }}" id="card-image">
                                    <div class="p-[7px] mt-[5px]">
                                        <p class="text-[15px] font-medium line-clamp-2 text-[#200000]">
                                            {{ $gig->name }}</p>
                                        <div class="flex items-center my-[1px] gap-[5px]">
                                            <div>
                                                <p class="line-clamp-1 text-[13px] text-gray-400">Lorem ipsum, dolor sit
                                                    amet
                                                    consectetur adipisicing elit. Qui aut error earum blanditiis iste velit?
                                                </p>
                                            </div>
                                        </div>
                                        <p class="text-[13px] font-semibold mt-[5px] text-[#200000]">From
                                            Rp {{ $gig->price }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        <a href="/dashboard/addProductPage">
                            <div class="h-[187px] flex flex-col gap-[10px] justify-center items-center bg-white"
                                id="addgig">
                                <img src="assets/icons/plus.png" class="w-[35px]">
                                <h1 class="text-[12px]">Add new Project</h1>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
