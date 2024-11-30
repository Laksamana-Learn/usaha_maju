<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usaha Maju</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="custom.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')

    
</head>
<body>

<x-navbar></x-navbar>

<div class="bg-slate-500">
    <div class="container h-full w-11/12 grid lg:grid-cols-3 lg:gap-x-4 pb-4">
    <div class="col-span-2 grid grid-rows-2 mt-4 lg:gap-y-4 gap-y-8">
        <div class="grid grid-cols-2 lg:gap-x-4 gap-x-4">
        <div class="flex rounded-3xl bg-slate-300">
            <img src="/storage/{{$product->foto}}" alt="" class="object-fill lg:object-cover">
        </div>
        <div class="grid grid-rows-6">
            <div></div>
            <div class="row-span-2">
            <h1 class="">{{ $product ->nama }}</h1>
            <p>{{ "RP. " . $product->harga }}</p>
            <p class="">{{ "Stok: " . $product->stok }}</p>
            </div>
        </div>
        </div>
        <div>
        <p>{{ $product->deskripsi }}</p>
        </div>
    </div>
    <div class="hidden lg:flex mt-4 h-full bg-slate-300 rounded-3xl">
        <img src="/storage/{{$product->foto}}" alt="" class="object-contain">
    </div>
    </div>
</div>

<x-whatsapp></x-whatsapp>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>