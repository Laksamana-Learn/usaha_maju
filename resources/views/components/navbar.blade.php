
    <div class="container-fluid navbar_bg">
        <header class="md:flex flex-wrap lg:justify-content-center py-2 ">
            <div class="flex align-items-center py-2 mb-md-0 me-md-auto max-sm:grid max-sm:grid-rows-2" >
                
                {{-- SIDEBAR --}}
                <nav class="navbar navbar-expand-lg pb-4 max-sm:hidden">
                    <div class="custom_menu-btn">
                        <button onclick="openNav()">
                            <span class="s-1"> </span>
                            <span class="s-2"> </span>
                            <span class="s-3"> </span>
                        </button>
                    </div>
                    <div id="myNav" class="overlay">
                        <div class="menu_btn-style ">
                        <button onclick="closeNav()">
                            <span class="s-1"> </span>
                            <span class="s-2"> </span>
                            <span class="s-3"> </span>
                        </button>
                        </div>
                        <div class="overlay-content max-md:w-4/5 max-md:place-items-center max-md:left-4">
                            <x-navmenu href="/" :active="request() -> is('/')">Home</x-navmenu>
                            <x-navmenu href="/product" :active="request() -> is('product')">Product</x-navmenu>
                            <div class="hidden">
                                <x-navmenu href="/login" :active="request() -> is('login')">Masuk</x-navmenu>
                            </div>
                            <x-navmenu href="/about-us" :active="request() -> is('about-us')">About Us</x-navmenu>
                        </div>
                    </div>
                </nav>


                {{-- DROP DOWN --}}
                <li style="list-style-type: none" class="sm:hidden max-sm:row-start-2">
                    <button type="button" class="flex items-center p-2 w-full text-base font-normal text-black rounded-lg transition duration-75 group hover:bg-white " aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/></svg>
                        
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Menu</span>
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
                            <a href="/about-us" class="flex items-center p-2 pl-11 w-full text-base font-normal text-black rounded-lg transition duration-75 group hover:bg-white ">About Us</a>
                        </li>
                        <li class="hidden">
                            <a href="/login" class="flex items-center p-2 pl-11 w-full text-base font-normal text-black rounded-lg transition duration-75 group hover:bg-white ">Masuk</a>
                        </li>
                    </ul>
                </li>
                


                <p class="hilang"></p>
                
                <a href="#" class="text-dark text-decoration-none flex max-sm:row-start-1">
                    <img src="/img/logo.png" alt="Logo" class="me-2" width="75px" height="75px">
                    <span class="fs-4 text-center self-center">Usaha Maju</span>
                </a>
            </div>
            
            <ul class="max-lg:hidden nav nav-pills mb-3 mt-4">
                <li class="nav-item"><x-navmenudesktop href="/" :active="request() -> is('/')">Home</x-navmenudesktop></li>
                <li class="nav-item text-gray"><x-navmenudesktop href="/product" :active="request() -> is('product')">Product</x-navmenudesktop></li>
                <li class="nav-item"><x-navmenudesktop href="/about-us" :active="request() -> is('about-us')">About Us</x-navmenudesktop></li>
                <li class="nav-item ps-5 mr-4 hidden"><x-navmenudesktop href="/login" :active="request() -> is('login')">Masuk</x-navmenudesktop></li>
                <li class="nav-item pt-1 ps-5" ><img src="/icon/cart.svg" alt="cart icon" class="pt-2 me-5 self-center"></li>
            </ul>
        </header>
    </div>

