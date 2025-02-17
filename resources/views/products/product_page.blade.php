<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />       
    
    
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,500,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    
    <title>Usaha Maju</title>
    <link rel="icon" href="/img/logo.png">
    @vite('resources/css/app.css')

</head>
<body class="overflow-y-scroll no-scrollbar">

<x-navbar></x-navbar>

{{-- Search Bar --}}
<form method="GET" class="max-w-screen-lg mx-auto my-4 max-xl:px-4">   
    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none -translate-x-4">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>

        <input type="search" name="search" id="search" class="block w-full p-4 pr-10 text-sm text-gray-900 border border-gray-600 rounded-lg bg-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search . . ." autocomplete="off"/>

        <button type="submit" class="-translate-y-2 text-white absolute end-2.5 bottom-2.5 bg-gray-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
    </div>
</form>


{{-- FILTER --}}
<div class="flex items-center justify-center p-4">
    <button id="dropdownDefault" data-dropdown-toggle="dropdown"
    class="text-white bg-slate-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
    type="button">
    Filter berdasarkan Kategori
    <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
        Category
    </h6>
    <form action="/product" class="container">
        @csrf
        <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
            @foreach ($categories as $category)
            <li class="flex items-center">
                <input type="radio" name="kategori" id="{{ $category->kategori }}" value="{{$category->id}}">
                
                <label for="{{ $category->kategori }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                    {{ $category->kategori }}
                </label>
            </li>
            @endforeach
        </ul>

        <button type="submit" class="btn btn-primary text-black mt-4">CARI</button>
    </form>
    </div>
</div>



{{-- Product --}}

@if ($category_products)
    <div class="grid mx-auto mt-6 max-w-2xl sm:px-6  lg:max-w-7xl lg:grid-cols-4 lg:gap-x-8 lg:px-8 gap-y-32">
        @if ($category_products->all() == null)
            <h3 class="p-4">Tidak ada produk yang berkategori ini</h3>
        @else
            @foreach ($category_products as $product)
                <x-productpage :product="$product" />
            @endforeach
        @endif
    </div>

@else
    <div class="grid mx-auto mt-6 max-w-2xl sm:px-6  lg:max-w-7xl lg:grid-cols-4 lg:gap-x-8 lg:px-8 gap-y-32">
        @foreach ($products as $product)
            <x-productpage :product="$product" />
        @endforeach
    </div>
@endif



{{-- Pagination --}}
{{ $products->appends(request()->except('page'))->links() }}




<x-whatsapp></x-whatsapp>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>