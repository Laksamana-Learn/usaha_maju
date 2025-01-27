<a href="/detail-product/{{ $product->slug }}">
<div class="md:mb-12">
    <img src="/storage/{{$product->foto}}" alt="Foto {{ $product->nama }}" class="place-self-center aspect-square w-16 rounded-lg object-cover lg:block lg:w-5/6 max-lg:size-full max-lg:mb-4 max-lg:px-4">
    <div class="text-center self-center">
        <h3 class="font-bold">{{ $product->nama }}</h3>
        <p class="font-light">{{ "Rp. " . $product->harga }}</p>
        <p class="font-light">{{ "Stok : " . $product->stok }}</p>
    </div>
</div>
</a>