
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Navbar</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,500,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <div class="container-fluid navbar_bg">
        <header class="d-flex flex-wrap justify-content-center py-2 ">
            <div class="d-flex align-items-center py-2 mb-md-0 me-md-auto" >
                
                {{-- SIDEBAR --}}
                <nav class="navbar navbar-expand-lg pb-4">
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
                        <div class="overlay-content">
                            <x-navmenu href="/" :active="request() -> is('/')">Home</x-navmenu>
                            <x-navmenu href="/product" :active="request() -> is('product')">Product</x-navmenu>
                            <x-navmenu href="/login" :active="request() -> is('login')">Masuk</x-navmenu>
                            <x-navmenu href="/about-us" :active="request() -> is('about-us')">About Us</x-navmenu>
                        </div>
                    </div>
                </nav>
                <p class="hilang"></p>
                <a href="#" class="text-dark text-decoration-none flex">
                    <img src="img/logo.png" alt="Logo" class="me-2" width="75px" height="75px">
                    <span class="fs-4 text-center self-center">Usaha Maju</span>
                </a>
            </div>
            <ul class="nav nav-pills mb-3 mt-4">
                {{-- <li class="nav-item"> <a href="" class="nav-link active">asdh</a></li> --}}
                <li class="nav-item"><x-navmenudesktop href="/" :active="request() -> is('/')">Home</x-navmenudesktop></li>
                <li class="nav-item text-gray"><x-navmenudesktop href="/product" :active="request() -> is('product')">Product</x-navmenudesktop></li>
                <li class="nav-item"><x-navmenudesktop href="/about-us" :active="request() -> is('about-us')">About Us</x-navmenudesktop></li>
                <li class="nav-item ps-5 mr-4"><x-navmenudesktop href="/login" :active="request() -> is('login')">Masuk</x-navmenudesktop></li>
                <li class="nav-item pt-1" ><img src="icon/cart.svg" alt="cart icon" class="pt-2 me-5 self-center"></li>
            </ul>
        </header>
    </div>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>
</html>