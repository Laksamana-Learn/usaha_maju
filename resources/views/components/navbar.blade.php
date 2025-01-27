
<div class="container-fluid bg-blue-600">
    <header class="md:flex flex-wrap lg:justify-content-center py-2 ">
        <div class="flex align-items-center py-2 mb-md-0 me-md-auto max-md:grid max-md:grid-rows-2" >
            
            {{-- SIDEBAR --}}
            <nav class="navbar navbar-expand-lg max-md:hidden z-50">
                <div class="custom_menu-btn">
                    <button onclick="openNav()">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>
                </div>
                <div id="myNav" class="overlay !bg-blue-400">
                    <div class="menu_btn-style ">
                    <button onclick="closeNav()">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>
                    </div>
                    <div class="overlay-content max-md:w-4/5 max-md:place-items-center max-md:left-4">
                        @if (Auth::guard('pengguna')->check())
                            <p class="text-white mb-4 text-lg">{{ Auth::guard('pengguna')->user()->nama }} </p>
                        @endif
                        <x-navmenu href="/" :active="request() -> is('/')">Home</x-navmenu>
                        <x-navmenu href="/product" :active="request() -> is('product')">Product</x-navmenu>
                        <x-navmenu href="/about-us" :active="request() -> is('about-us')">About Us</x-navmenu>
                        
                        @if (Auth::guard('pengguna')->check())
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit">
                                <x-navmenu :active="request() -> is('logout')">Logout</x-navmenu>
                            </button>
                        </form>
                        @else
                            <x-navmenu href="/login" :active="request() -> is('login')">Masuk</x-navmenu>
                        @endif

                    </div>
                </div>
            </nav>

            
            


            <p class="hilang"></p>
            
            <a href="/" class="text-dark text-decoration-none flex max-md:row-start-1 max-md:mx-auto">
                <img src="/img/logo.png" alt="Logo" class="me-2" width="75px" height="75px">
            </a>
        </div>
        
        @if (Auth::guard('pengguna')->check())
            @include('components.logged-in')
        @else
            @include('components.guest')
        @endif
        
    </header>
</div>

