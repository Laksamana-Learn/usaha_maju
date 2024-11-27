@props(['active' => false])
{{-- Untuk menghilangkan atribut "active" pada teks html saat web di inspect --}}

<a {{ $attributes }} class="nav-link {{ $active ? 'active' : ''}} ">{{ $slot }}</a>