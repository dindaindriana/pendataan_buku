<a {{ $attributes }} 
   class="nav-link px-3 py-2 {{ request()->fullUrlIs(url($href)) ? 'active fw-semibold text-white bg-dark rounded' : 'text-tertiary opacity-75 hover-opacity-100' }}">
    {{ $slot }}
</a>