<a href="/detail-product/{{ $product->slug }}">
<div class="md:mb-12">
    <img src="/storage/{{$product->foto}}" alt="" class="place-self-center aspect-square w-16 rounded-lg object-cover lg:block lg:w-5/6 max-lg:size-full max-lg:mb-4 max-lg:px-4">
    <div class="text-center self-center">
        <h3 class="font-bold">{{ $product->nama }}</h3>
        <p class="font-light">{{ "Rp. " . $product->harga }}</p>
        <p class="font-light">{{ "Stok : " . $product->stok }}</p>
    </div>
</div>
</a>

{{-- Pagination (disabled) --}}
{{-- 
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
    
        //  Angka Ditengah 
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
</div> --}}     