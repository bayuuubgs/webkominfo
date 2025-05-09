@props([
    'image',
    'title',
    'date',
    'fontColor' => 'text-gray10',
    'link' => '',
    'active' => false,
    'alt' => '', 
])

@php
    $isActive = $active ? 'brightness-110 shadow-lg' : '';
@endphp

<a href="{{ $link ?: '#' }}" class="block w-[200px] md:w-[250px] lg:w-[300px] xl:w-[350px] h-auto font-responsive text-pM lg:text-p">
    <div
        class="aspect-[3/4] bg-transparent rounded-2xl p-4 border border-transparent
               transition-all duration-300 cursor-pointer hover:border-primary30 flex flex-col items-center font-responsive"
        :class="{ 'border-primary30': active }"
    >
        <img
            src="{{ $image }}"
            alt="{{ $alt ?? 'Cover ' . $title }}"
            class="w-full h-full rounded-t-lg md:rounded-t-xl object-cover shadow-md transition-all duration-300 
                   hover:brightness-110 hover:shadow-lg {{ $isActive }}"
        >

        <div class="w-full flex flex-col items-center justify-center text-center pt-4">
            <h3 class="{{ $fontColor }} font-bold line-clamp-2 mb-2">{{ $title }}</h3>
            <p class="{{ $fontColor }}">{{ $date }}</p>
        </div>
    </div>
</a>
