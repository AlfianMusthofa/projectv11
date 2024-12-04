@extends('layouts.main')

@section('container')
    @include('components.navbar')
    <div class="w-full flex justify-center items-center bg-[#f7f7f7]">
        <form method="post" action="/update/{{ $gig->id }}" class="w-[777px] my-[10px] flex flex-col gap-[15px]"
            enctype="multipart/form-data">

            @csrf

            {{-- Overview --}}
            <div class="row flex flex-col gap-[24px] border p-[10px] bg-white">
                <div class="flex items-center gap-[10px]">
                    <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#1dbf73] text-white">
                        <p>1</p>
                    </div>
                    <p class="text-[14px] font-medium">Overview</p>
                </div>
                <div class="row flex gap-[15px]">
                    <div class="col">
                        <div class="w-[242px]">
                            <p class="text-[14px] mb-[3px] font-medium">Project Title</p>
                            <p class="text-[13px]">As your Gig storefront, your title is the most important place to include
                                keywords that buyers would likely use to search for a service like yours.</p>
                        </div>
                    </div>
                    <textarea name="projectTitle" id="" cols="30" rows="3" maxlength="80"
                        class="border p-[5px] text-[14px] w-full" placeholder="I will do..">{{ $gig->name }}</textarea>
                </div>

                {{-- product Industry --}}
                <div class="row flex gap-[15px] items-center">
                    <div class="col">
                        <div class="w-[242px]">
                            <p class="text-[14px] mb-[3px] font-medium">Project Industry</p>
                            <p class="text-[13px]">Choose the category and sub-category most suitable for your Project.</p>
                        </div>
                    </div>
                    {{-- <input type="text" name="industry" id="industry" class="border text-[14px] p-[5px]"> --}}
                    <div class="w-full">
                        <button type="button" class="text-[13px] border w-[300px] text-start pl-[10px] py-[7px]"
                            id="industryBtn">Select
                            industry</button>
                        <ul class="absolute bg-white mt-[5px] border z-[1] max-h-[102px] overflow-y-auto hidden"
                            id="industryList">
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Teks Translation">
                                Teks Translation</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Video & Animation">
                                Video & Animation</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Graphic & Desain">
                                Graphic & Desain</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Finance">
                                Finance</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Programming & Tech">
                                Programming & Tech</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Music & Audio">
                                Music & Audio</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="Digital Illustration">
                                Digital Illustration</li>
                        </ul>
                        <input type="hidden" name="industry" id="industry" value="{{ $gig->category }}">
                    </div>
                </div>

                {{-- Project Duration --}}
                <div class="row flex gap-[15px] items-center">
                    <div class="col">
                        <div class="w-[242px]">
                            <p class="text-[14px] mb-[3px] font-medium">Project Duration</p>
                            <p class="text-[13px]">Choose the duration of your Project.</p>
                        </div>
                    </div>
                    <div class="w-full">
                        <button type="button" class="text-[13px] border w-[300px] text-start pl-[10px] py-[7px]"
                            id="durationBtn">Select duration</button>
                        <ul class="absolute bg-white mt-[5px] border z-[1] max-h-[102px] overflow-y-auto hidden"
                            id="durationList">
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="1 - 7 days">
                                1 - 7 days</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="2 weeks">
                                2 weeks</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="3 weeks">
                                3 weeks</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="1 month">
                                1 month</li>
                            <li class="text-[13px] pl-[10px] py-[7px] cursor-pointer hover:bg-slate-300 bg-white w-[300px]"
                                data-value="> 1 month">
                                > 1 month</li>
                        </ul>
                        <input type="hidden" name="duration" id="duration" value="{{ $gig->duration }}">
                    </div>
                </div>

                {{-- Pricing --}}
                <div class="row flex items-center gap-[15px]">
                    <div class="col w-[242px]">
                        <p class="text-[14px] font-medium">Price</p>
                    </div>
                    <input type="number" name="price" id="price" class="border text-[14px] p-[5px]"
                        value="{{ $gig->price }}">
                </div>
            </div>

            {{-- Description --}}
            <div class="border p-[10px] flex flex-col gap-[24px] bg-white">
                <div class="flex items-center gap-[10px]">
                    <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#1dbf73] text-white">
                        <p>2</p>
                    </div>
                    <p class="text-[14px] font-medium">Description</p>
                </div>
                <div class="flex flex-col gap-[10px]">
                    <p class="text-[14px] font-medium">Briefly Describe Your Project</p>
                    <textarea name="description" id="" cols="30" rows="10" class="border p-[5px] text-[14px] w-full"
                        maxlength="1200">{{ $gig->description }}</textarea>
                </div>
            </div>

            {{-- Images --}}
            {{-- <div class="border p-[10px] flex flex-col gap-[24px] bg-white">
                <div class="flex items-center gap-[10px]">
                    <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#1dbf73] text-white">
                        <p>3</p>
                    </div>
                    <p class="text-[14px] font-medium">Images</p>
                </div>
                <div class="flex items-center gap-[10px]">
                    <div>
                        <div class="hidden" id="previewContainer">
                            <img src="{{ asset('assets/banner.jpg') }}" alt="" class="w-[100px] h-[100px]"
                                id="previewImage">
                        </div>
                        <div class="boxAddImage w-[100px] h-[100px] flex flex-col items-center justify-center gap-[8px] cursor-pointer"
                            id="addImage">
                            <img src="{{ asset('assets/icons/plus.png') }}" alt="" class="w-[20px]">
                            <p class="text-[11px]">Add image</p>
                        </div>
                    </div>
                    <div>
                        <div class="hidden" id="previewContainer2">
                            <img src="{{ asset('assets/banner.jpg') }}" alt="" class="w-[100px] h-[100px]"
                                id="previewImage2">
                        </div>
                        <div class="boxAddImage w-[100px] h-[100px] flex flex-col items-center justify-center gap-[8px] cursor-pointer"
                            id="addImage2">
                            <img src="{{ asset('assets/icons/plus.png') }}" alt="" class="w-[20px]">
                            <p class="text-[11px]">Add image</p>
                        </div>
                    </div>
                    <input type="file" id="imageInput" name="image" accept="image/*" class="hidden">
                    <input type="file" id="imageInput2" name="image2" accept="image/*" class="hidden">
                </div>
            </div> --}}

            <div class="flex items-center gap-[7px]">
                <a href="/dashboard/gigEditPage/{{ $gig->id }}"
                    class="px-[20px] py-[6px] bg-[#ff3333] text-white rounded-[3px] text-[15px]">Cancel</a>
                <button type="submit"
                    class="text-white text-[15px] px-[30px] py-[6px] bg-[#4dff4d] rounded-[3px]">Save</button>
            </div>

        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const durationBtn1 = document.getElementById('durationBtn')
            const durationList = document.getElementById('durationList')
            const selectedDuration = document.getElementById('duration')
            const industryBtn = document.getElementById('industryBtn')
            const industryList = document.getElementById('industryList')
            const selectedIndustry = document.getElementById('industry')

            durationBtn1.addEventListener('click', () => {
                durationList.classList.toggle('hidden')
            })

            document.querySelectorAll('#durationList li').forEach(item => {
                item.addEventListener('click', () => {
                    const durationValue = item.getAttribute('data-value');
                    durationBtn1.textContent = durationValue
                    selectedDuration.value = durationValue;
                    durationList.classList.add('hidden')
                })
            })

            industryBtn.addEventListener('click', () => {
                industryList.classList.toggle('hidden')
            })

            document.querySelectorAll('#industryList li').forEach(item => {
                item.addEventListener('click', () => {
                    const industryValue = item.getAttribute('data-value');
                    industryBtn.textContent = industryValue
                    selectedIndustry.value = industryValue;
                    industryList.classList.add('hidden')
                })
            })
        })

        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');
        const previewContainer = document.getElementById('previewContainer');
        const addImage = document.getElementById('addImage');

        const imageInput2 = document.getElementById('imageInput2');
        const previewImage2 = document.getElementById('previewImage2');
        const previewContainer2 = document.getElementById('previewContainer2');
        const addImage2 = document.getElementById('addImage2');

        // Event listener untuk membuka dialog file saat kotak Add Image diklik
        addImage.addEventListener('click', () => {
            imageInput.click();
        });

        addImage2.addEventListener('click', () => {
            imageInput2.click();
        });

        // Event listener untuk menampilkan preview gambar
        imageInput.addEventListener('change', function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', function() {
                    // Tampilkan gambar preview
                    previewImage.src = this.result;
                    previewContainer.classList.remove('hidden');
                    // Sembunyikan kotak Add Image
                    addImage.classList.add('hidden');
                });

                reader.readAsDataURL(file);
            }
        });

        imageInput2.addEventListener('change', function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', function() {
                    // Tampilkan gambar preview
                    previewImage2.src = this.result;
                    previewContainer2.classList.remove('hidden');
                    // Sembunyikan kotak Add Image
                    addImage2.classList.add('hidden');
                });

                reader.readAsDataURL(file);
            }
        });

        const priceInput = document.getElementById('price');

        priceInput.addEventListener('input', (e) => {
            // Remove all non-numeric characters
            let value = e.target.value.replace(/[^0-9]/g, '');

            // Add dots every three digits
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

            e.target.value = value;
        });

        priceInput.addEventListener('blur', (e) => {
            // Ensure value remains properly formatted when input loses focus
            e.target.value = e.target.value.replace(/[^0-9.]/g, '');
        });
    </script>
@endsection
