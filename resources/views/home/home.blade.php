@extends('layouts.main')

@section('container')
    @include('components.navbar')
    <div class="container mx-auto">
        <div class="hero flex justify-center items-center">
            <p class="herotext text-white text-[40px] text-center font-semibold">Explore The Best Freelance<br>Service Here
            </p>
        </div>
    </div>
    <div class="container mx-auto my-[10px]">
        <h3 class="text-[18px] mb-[10px] font-medium p-[10px] text-[#004aad] bg-[#f2f4fb]">Grapich & Design</h3>
        <div class="row flex flex-nowrap overflow-hidden overflow-x-scroll pb-[10px] gap-[10px]">
            @foreach ($grapicsDesign as $gig)
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
                                Rp {{ $gig->price }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="container mx-auto my-[10px]">
        <h3 class="text-[18px] mb-[10px] font-medium p-[10px] text-[#004aad] bg-[#f2f4fb]">Teks Translation</h3>
        <div class="row flex flex-nowrap overflow-hidden overflow-x-scroll pb-[10px] gap-[10px]">
            @foreach ($tekstranslations as $gig)
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
                                Rp {{ $gig->price }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="container mx-auto my-[10px]">
        <h3 class="text-[18px] mb-[10px] font-medium p-[10px] text-[#004aad] bg-[#f2f4fb]">Programming & Tech</h3>
        <div class="row flex flex-nowrap overflow-hidden overflow-x-scroll pb-[10px] gap-[10px]">
            @foreach ($codes as $gig)
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
                                Rp {{ $gig->price }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="text-center text-[15px] my-[25px]">
        <a href="/allCategory" id="cta-category">See All Category</a>
    </div>
    @include('components.footer')
@endsection
