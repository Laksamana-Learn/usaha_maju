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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <title>Usaha Maju</title>
    <link rel="icon" href="/img/logo.png">
    @vite('resources/css/app.css')

    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>

    
</head>
<body class="overflow-y-scroll no-scrollbar">

<x-navbar></x-navbar>

<div class="container mx-auto p-4">
    <!-- Products Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($products as $product)
        <div class="bg-gray-300 rounded-lg shadow-md relative">
            <!-- Product Image -->
            <img src="/storage/{{$product->foto}}" alt="{{ $product['nama'] }}" class="p-2 w-full h-48 object-cover rounded-3xl">
            
            <!-- Product Name and Price -->

            <h3 class="text-xl font-bold mt-2 px-4">{{ $product['nama'] }}</h3>
            <p class="text-gray-600 px-4" id="price-{{ $product->id }}" value="{{ $product->harga }}">Rp. {{ $product['harga'] }}</p>
            
            <!-- Quantity Controls (Hidden by Default) -->                
            <div class="flex items-center justify-center p-4">
                <button class="bg-white text-black px-3 py-2 rounded-full decrement-button " data-id="{{ $product['nama'] .";" . $product['harga'] }}">-</button>
                <input type="number" class="w-12 text-center mx-2 quantity-input appearance-none read-only:" data-id="{{ $product['nama'] . ";" . $product['harga'] }}" value="0" min="0">
                <button class="bg-white text-black px-3 py-2 rounded-full increment-button" data-id="{{ $product['nama'] . ";" . $product['harga'] }}">+</button>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Cart Section -->
    <div class="mt-8 bg-gray-100 p-4 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Cart</h2>
        <div id="cart-items" class="space-y-2">
            <!-- Cart items will be dynamically added here -->
        </div>
        <div class="mt-4">
            <p class="text-xl font-bold">Total: Rp. <span id="cart-total">0</span></p>
        </div>
    </div>
</div>


<x-whatsapp></x-whatsapp>




<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>

<!-- JavaScript -->
<script>
    const cart = {};
    
    // Function to update the cart display
    function updateCart() {
        const cartItems = document.getElementById('cart-items');
        const cartTotal = document.getElementById('cart-total');
        let total = 0;

        // Clear the cart display
        cartItems.innerHTML = '';

        // Loop through the cart and add items to the display
        for (const [id, item] of Object.entries(cart)) {
            var namaProduct = id.split(';')[0];
            var hargaProduct = id.split(';')[1];
            
            const itemTotal = item.quantity * hargaProduct;
            total += itemTotal;

            const cartItem = document.createElement('div');
            cartItem.className = 'flex justify-between items-center';
            cartItem.innerHTML = `
                <span>${namaProduct} (x ${item.quantity})</span>
                <span>Rp. ${itemTotal.toLocaleString('de-DE', { minimumFractionDigits: 0, maximumFractionDigits: 0 })}</span>
            `;
            cartItems.appendChild(cartItem);
        }
        // Update the total price
        
        const formattedNum = total.toLocaleString('de-DE', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        cartTotal.textContent = formattedNum;
    }

    // Event delegation for increment and decrement buttons
    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('increment-button')) {
            const productId = e.target.getAttribute('data-id');
            const input = document.querySelector(`.quantity-input[data-id="${productId}"]`);
            const product = {!! json_encode($products) !!}.find(p => p.id == productId);

            if (!cart[productId]) {
                cart[productId] = { ...product, quantity: 0 };
            }

            cart[productId].quantity++;
            input.value = cart[productId].quantity;
            updateCart();
        }

        if (e.target.classList.contains('decrement-button')) {
            const productId = e.target.getAttribute('data-id');
            const input = document.querySelector(`.quantity-input[data-id="${productId}"]`);
            const product = {!! json_encode($products) !!}.find(p => p.id == productId);

            if (cart[productId]) {
                cart[productId].quantity--;
                if (cart[productId].quantity <= 0) {
                    delete cart[productId];
                }
                input.value = cart[productId] ? cart[productId].quantity : 0;
                updateCart();
            }
        }
    });
</script>


</body>
</html>