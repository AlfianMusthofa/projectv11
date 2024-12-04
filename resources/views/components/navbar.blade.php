<div class="border" id="navbar">
    <div class="container mx-auto flex justify-between items-center py-[20px]">
        <a href="/home">JasaKu</a>
        <div class="navlink flex items-center gap-[100px]">
            <div class="dropdown cursor-pointer relative block">
                <a href="/dashboard" onclick="myFunction()" class="dropbtn flex items-center gap-[7px]">
                    <img src="{{ asset('assets/icons/user.png') }}" class="w-[20px]">
                    <p class="text-[14px]">{{ session('name') }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
