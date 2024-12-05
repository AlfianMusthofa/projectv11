@extends('layouts.main')

@section('container')
    @include('components.navbar')
    <div class="bg-[#f2f4fb] py-[50px]">
        <div class="container mx-auto flex justify-center">
            <h3 class="text-[40px] font-medium text-[#004aad]">Jasaku</h3>
        </div>
    </div>
    <div class="container mx-auto flex items-center justify-between py-[40px]">
        <div class="col text-[14px] w-[600px]">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis quam similique possimus deserunt facere
                impedit magni fuga recusandae! Voluptatem repellendus provident asperiores saepe incidunt repudiandae sequi
                culpa laborum id quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quisquam quod, nisi
                sequi earum dolorum assumenda eligendi deleniti reprehenderit distinctio?</p>
        </div>
        <div class="col flex items-center gap-[15px]">
            <img src="{{ asset('assets/icons/youtube.png') }}" class="w-[35px]">
            <img src="{{ asset('assets/icons/instagram.png') }}" class="w-[40px]">
            <img src="{{ asset('assets/icons/linkedin.png') }}" class="w-[35px]">
        </div>
    </div>
    <div class="mb-[15px]">
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto">
                <h3 class="text-[18px] font-medium text-[#004aad] py-[20px]">Grapich & Design</h3>
            </div>
        </div>
        <div
            class="container mx-auto row flex flex-nowrap overflow-hidden overflow-x-scroll pb-[10px] gap-[10px] mt-[15px]">
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
    <div class="mb-[15px]">
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto">
                <h3 class="text-[18px] font-medium text-[#004aad] py-[20px]">Programming & Tech</h3>
            </div>
        </div>
        <div
            class="container mx-auto mt-[15px] row flex flex-nowrap overflow-hidden overflow-x-scroll pb-[10px] gap-[10px]">
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
    <div class="mb-[15px]">
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto">
                <h3 class="text-[18px] font-medium text-[#004aad] py-[20px]">Teks Translation</h3>
            </div>
        </div>
        <div
            class="container mx-auto mt-[15px] row flex flex-nowrap overflow-hidden overflow-x-scroll pb-[10px] gap-[10px]">
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
    <div class="mb-[15px]">
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto">
                <h3 class="text-[18px] font-medium text-[#004aad] py-[20px]">Video & Animation</h3>
            </div>
        </div>
        <div
            class="container mx-auto mt-[15px] row flex flex-nowrap overflow-hidden overflow-x-scroll pb-[10px] gap-[10px]">
            @foreach ($videos as $gig)
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
    <div class="mb-[15px]">
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto">
                <h3 class="text-[18px] font-medium text-[#004aad] py-[20px]">Musics & Audio</h3>
            </div>
        </div>
        <div
            class="container mx-auto mt-[15px] row flex flex-nowrap overflow-hidden overflow-x-scroll pb-[10px] gap-[10px]">
            @foreach ($musics as $gig)
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
    <div class="mb-[15px]">
        <div class="bg-[#f2f4fb]">
            <div class="container mx-auto">
                <h3 class="text-[18px] font-medium text-[#004aad] py-[20px]">Finance</h3>
            </div>
        </div>
        <div
            class="container mx-auto mt-[15px] row flex flex-nowrap overflow-hidden overflow-x-scroll pb-[10px] gap-[10px]">
            @foreach ($finances as $gig)
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
    @include('components.footer')
@endsection
