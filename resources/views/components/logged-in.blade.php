<ul class="max-lg:hidden nav nav-pills mb-3 mt-4">
    <li class="nav-item"><x-navmenudesktop href="/" :active="request() -> is('/')">Home</x-navmenudesktop></li>
    <li class="nav-item text-gray"><x-navmenudesktop href="/product" :active="request() -> is('product')">Product</x-navmenudesktop></li>
    <li class="nav-item"><x-navmenudesktop href="/about-us" :active="request() -> is('about-us')">About Us</x-navmenudesktop></li>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="bg-transparent text-white font-semibold  py-2 px-4 rounded"><li class="nav-item ps-5 mr-4">Keluar</li></button>
    </form>
    <li class="nav-item pt-1 ps-5" ><a href="/shop"><img src="/icon/cart.svg" alt="cart icon" class="pt-2 me-5 self-center"></a></li>
</ul>

{{-- MOBILE --}}

<li style="list-style-type: none" class="md:hidden max-md:row-start-2">
    <button type="button" class="flex items-center p-2 w-full text-base font-normal text-black rounded-lg transition duration-75 group hover:bg-white " aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
        <svg aria-hidden="true" class="my-auto flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/></svg>
        
        <span class="flex-1 ml-3 text-center whitespace-nowrap"><p class="my-auto">{{ Auth::guard('pengguna')->user()->nama }}</p></span>
        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <ul id="dropdown-pages" class="hidden py-2 space-y-2">
        <li>
            <a href="/" class="flex items-center p-2 pl-11 w-full text-base font-normal text-black rounded-lg transition duration-75 group hover:bg-white ">Home</a>
        </li>
        <li>
            <a href="/product" class="flex items-center p-2 pl-11 w-full text-base font-normal text-black rounded-lg transition duration-75 group hover:bg-white ">Product</a>
        </li>
        <li>
            <a href="/shop" class="flex items-center p-2 pl-11 w-full text-base font-normal text-black rounded-lg transition duration-75 group hover:bg-white ">Belanja</a>
        </li>
        <li>
            <a href="/about-us" class="flex items-center p-2 pl-11 w-full text-base font-normal text-black rounded-lg transition duration-75 group hover:bg-white ">About Us</a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="flex items-center p-2 pl-11 w-full text-base font-normal text-black rounded-lg transition duration-75 group hover:bg-white">Keluar</button>
            </form>
        </li>
    </ul>
</li>