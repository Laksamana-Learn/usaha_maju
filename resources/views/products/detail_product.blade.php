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
    <link href="/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/custom.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    
    <title>Usaha Maju</title>
    <link rel="icon" href="/img/logo.png">
    @vite('resources/css/app.css')

    
</head>
<body class="overflow-y-scroll no-scrollbar"> 

    <x-navbar></x-navbar>

    <div class="min-h-lvh">
        <div class="container h-full w-11/12 grid lg:grid-cols-2 lg:gap-x-4 pb-4">
            <div class="col-span-2 grid mt-4 lg:gap-y-4 gap-y-8">
                
                <div class="grid grid-cols-2 lg:gap-x-4 gap-x-4">
                    <div class="flex rounded-3xl container h-auto w-auto">
                        <img src="/storage/{{$product->foto}}" alt="Foto {{ $product->nama }}" class="overflow-visible object-fit min-w-full h-auto">
                    </div>
                    <div class="grid grid-rows-6">
                        <div class="row-start-2">
                            <h1 class="font-bold text-xl ">{{ $product ->nama }}</h1>
                            <p>{{ "RP. " . $product->harga }}</p>
                            <p class="">{{ "Stok: " . $product->stok }}</p>
                        </div>
                        <p class="row-start-3">{{ $product->deskripsi }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <x-whatsapp></x-whatsapp>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>