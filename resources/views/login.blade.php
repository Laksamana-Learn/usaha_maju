

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

<section class="bg-gray-400">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen lg:py-0">
        <div class="w-full bg-gray-600 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-white text-center">
                    Masuk
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login.submit') }}">
                    @csrf 
                    {{-- @csrf for protection --}}
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-white">Username</label>
                        <input type="text" name="username" id="username" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Fajar Sucahya" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white dark:focus:ring-blue-500 focus:border-blue-500"required="">

                    </div>
                    <div class="flex items-start">
                    </div>
                    <button type="submit" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Belum punya akun? <a href="/register" class="font-medium text-white hover:underline dark:text-primary-500">Buat Disini</a>
                    </p>
                </form>

                @if (session('gagal'))
                    <p class="text-danger">{{ session('gagal') }}</p>
                @endif
            </div>
        </div>
    </div>
</section>

<x-whatsapp></x-whatsapp>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>