@props(['active' => false])
{{-- Untuk menghilangkan atribut "active" pada teks html saat web di inspect --}}

<a {{ $attributes }} class="max-md:max-w-36 {{ $active ? 'active' : ''}} ">{{ $slot }}</a>