@props([
    'test' => asset('images/homestay.jpg')
])
<div @class([
    'min-h-screen',
    'flex flex-col',
    'sm:justify-center',
    'items-center',
    'pt-6 sm:pt-0',
    'bg-homestayz bg-cover',
])>

    {{ $slot }}
</div>
