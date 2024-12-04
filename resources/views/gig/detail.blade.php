@extends('layouts.main')

@section('container')
    @include('components.navbar')
    <div class="row container mx-auto  mt-[20px] ">
        <div class="flex justify-between">
            <div class="col max-w-[600px]">
                <h3 class="text-[25px] line-clamp-2 font-medium leading-[35px] text-[#222325]">{{ $gig->name }}
                </h3>
                <div class="my-[20px] flex items-center gap-[20px]">
                    <img src="{{ asset('assets/pp.jpg') }}" class="w-[90px] rounded-full">
                    <div>
                        <p class="text-[18px] font-medium">{{ $gig->user_username }}</p>
                        <div class="flex gap-[3px]">
                            <img src="{{ asset('assets/icons/star.png') }}" class="w-[15px]">
                            <img src="{{ asset('assets/icons/star.png') }}" class="w-[15px]">
                            <img src="{{ asset('assets/icons/star.png') }}" class="w-[15px]">
                            <img src="{{ asset('assets/icons/star.png') }}" class="w-[15px]">
                        </div>
                        <div class="mt-[6px] flex items-center gap-[5px]">
                            <img src="{{ asset('assets/icons/placeholder.png') }}" class="w-[17px]">
                            <p class="text-[14px]">Indonesia</p>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-[15px] text-[#404145]">{{ $gig->user_description }}
                    </p>
                </div>
                <div class="my-[20px]">
                    <p class="font-medium text-[20px]">About this gig</p>
                    <p class="text-[14px] mt-[5px] text-[#404145]">{{ $gig->description }}</p>
                </div>
                <img src="{{ asset('storage/' . $gig['image']) }}" id="gigdetailimage">
            </div>
            <div class="col w-[400px]">
                <div class="border sticky top-[30px]">
                    <div class="p-[20px]">
                        <div class="text-center mb-[13px]">
                            <p class="text-[14px] py-[10px]">Basic Package</p>
                        </div>
                        <h3 class="text-[#404145] font-semibold text-[23px]">Rp {{ $gig->price }}</h3>
                        <p class="text-[#404145] text-[16px] mt-[10px]">{{ $gig->name }}</p>
                        <div class="flex items-center gap-[10px] mt-[15px]">
                            <img src="{{ asset('assets/icons/clock.png') }}" class="w-[15px]">
                            <p class="text-[14px] font-medium text-[#404145]">{{ $gig->duration }} delivery</p>
                        </div>
                        <div class="flex w-[100%] mt-[20px]">
                            <a href="#"
                                class="w-full text-[15px] text-center py-[9px] tracking-wider font-medium bg-[#000000] text-white rounded-[3px]">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#f2f4fb]">
        <div class="container mx-auto py-[20px] mt-[35px]">
            <p class="text-[20px] font-medium">More from {{ $gig->user_username }}</p>
            <div class="row flex gap-[10px] overflow-hidden overflow-x-scroll mt-[15px]">
                @foreach ($usergigs as $gig)
                    <a href="/detail/{{ $gig->id }}">
                        <div class="max-w-[240px]">
                            <img src="{{ asset('storage/' . $gig['image']) }}" id="card-image">
                            <div class="p-[7px] mt-[5px]">
                                <p class="text-[15px] font-medium line-clamp-2 text-[#200000]">
                                    {{ $gig->name }}</p>
                                <div class="flex items-center my-[1px] gap-[5px]">
                                    <div>
                                        <p class="line-clamp-1 text-[13px] text-gray-400">{{ $gig->description }}</p>
                                    </div>
                                </div>
                                <p class="text-[15px] font-semibold mt-[5px] text-[#200000]">From
                                    Rp.{{ $gig->price }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
