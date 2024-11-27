{{-- Search Bar --}}

<form class="max-w-screen-lg mx-auto my-9">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none -translate-x-4">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-600 rounded-lg bg-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search . . ." required />
        <button type="submit" class="-translate-y-2 text-white absolute end-2.5 bottom-2.5 bg-gray-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
    </div>
</form>


{{-- PRODUK --}}
<div class="grid mx-auto mt-6 max-w-2xl sm:px-6  lg:max-w-7xl lg:grid-cols-4 lg:gap-x-8 lg:px-8 gap-y-32">
    <div class="">
        <a href="/detail-product"><img src="img/logo.png" alt="" class="place-self-center aspect-square w-16 rounded-lg lg:object-cover lg:block lg:w-5/6 object-contain">
        </a>
            <div class="text-center self-center">
            <h3 class="font-bold">Nama Item</h3>
            <p class="font-light">Rp. xxx</p>
            <p class="font-light">Stok: xxx</p>
        </div>
    </div>
    <div class="">
        <img src="img/logo.png" alt="" class="place-self-center aspect-square w-16 rounded-lg object-cover lg:block lg:w-5/6">
        <div class="text-center self-center">
            <h3 class="font-bold">Nama Item</h3>
            <p class="font-light">Rp. xxx</p>
            <p class="font-light">Stok: xxx</p>
        </div>
    </div>
    <div class="">
        <img src="img/logo.png" alt="" class="place-self-center aspect-square w-16 rounded-lg object-cover lg:block lg:w-5/6">
        <div class="text-center self-center">
            <h3 class="font-bold">Nama Item</h3>
            <p class="font-light">Rp. xxx</p>
            <p class="font-light">Stok: xxx</p>
        </div>
    </div>
    <div class="">
        <img src="img/logo.png" alt="" class="place-self-center aspect-square w-16 rounded-lg object-cover lg:block lg:w-5/6">
        <div class="text-center self-center">
            <h3 class="font-bold">Nama Item</h3>
            <p class="font-light">Rp. xxx</p>
            <p class="font-light">Stok: xxx</p>
        </div>
    </div>


    {{-- ROW 2 --}}
        <div class="mb-12">
            <img src="img/logo.png" alt="" class="place-self-center aspect-square w-16 rounded-lg object-cover lg:block lg:w-5/6">
            <div class="text-center self-center">
                <h3 class="font-bold">Nama Item</h3>
                <p class="font-light">Rp. xxx</p>
                <p class="font-light">Stok: xxx</p>
            </div>
        </div>
        <div class="mb-12">
            <img src="img/logo.png" alt="" class="place-self-center aspect-square w-16 rounded-lg object-cover lg:block lg:w-5/6">
            <div class="text-center self-center">
                <h3 class="font-bold">Nama Item</h3>
                <p class="font-light">Rp. xxx</p>
                <p class="font-light">Stok: xxx</p>
            </div>
        </div>
        <div class="mb-12">
            <img src="img/logo.png" alt="" class="place-self-center aspect-square w-16 rounded-lg object-cover lg:block lg:w-5/6">
            <div class="text-center self-center">
                <h3 class="font-bold">Nama Item</h3>
                <p class="font-light">Rp. xxx</p>
                <p class="font-light">Stok: xxx</p>
            </div>
        </div>
        <div class="mb-12">
            <img src="img/logo.png" alt="" class="place-self-center aspect-square w-16 rounded-lg object-cover lg:block lg:w-5/6">
            <div class="text-center self-center">
                <h3 class="font-bold">Nama Item</h3>
                <p class="font-light">Rp. xxx</p>
                <p class="font-light">Stok: xxx</p>
            </div>
        </div>


</div>



{{-- Pagination --}}
<div class="container flex justify-center items-center mb-8">
    <ul class="flex items-center -space-x-px h-10 text-base">
        <li>
            <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Sebelumnya</span>
            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            </a>
        </li>
    
        {{-- Angka Ditengah --}}
        <li>
            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
        </li>
        
        <li>
            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Selanjutnya</span>
    
            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            </a>
        </li>
        </ul>
</div>
