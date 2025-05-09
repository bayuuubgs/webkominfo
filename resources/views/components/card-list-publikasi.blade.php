@props([
    'image' => '',
    'title' => '',
    'category' => '',
    'date' => '',
    'description' => '',
    'ratio' => '16:9',
    'link' => ''
])

@php
    $aspectClass = match ($ratio) {
        '3:2' => 'aspect-[3/2]',
        '16:9' => 'aspect-[16/9]',
        default => 'aspect-[16/9]',
    };
@endphp

<a href="{{ $link }}" class="group relative flex flex-col sm:flex-row gap-4
            py-4 sm:p-2 md:p-4 bg-white md:rounded-2xl w-full transition duration-300
            border-b border-gray-300 sm:border sm:border-transparent
            md:hover:shadow-lg hover:border-y-primary30 sm:hover:border-primary30 active:ring-y-1 sm:active:ring-1 active:ring-primary30 
            font-responsive text-pM lg:text-p">

    {{-- Gambar --}}
    <div class="shrink-0 max-w-full sm:max-w-[200px] xl:max-w-[240px]">
        <div class="rounded-t-2xl sm:rounded-md md:rounded-lg overflow-hidden w-full shadow-lg 
                    transition duration-300 
                    {{ $aspectClass }} 
                    group-hover:shadow-xl 
                    group-hover:brightness-110 
                    group-active:brightness-110">
            <img src="{{ $image }}" alt="Thumbnail" class="object-cover w-full h-full">
        </div>
    </div>

    {{-- Kontainer teks --}}
    <div class="flex flex-col justify-center items-start flex-1 gap-1.5">
        <h3 class="text-h3M lg:text-h3 font-bold text-gray90 text-justify line-clamp-2">
            {{ $title }}
        </h3>

        <div class="flex flex-wrap items-center gap-2 text-gray50">
            <x-label-kategori :text="$category" />
            <span>{{ $date }}</span>
        </div>

        <p class="text-pM lg:text-p text-gray70 font-normal text-justify line-clamp-3">
            {{ $description }}
        </p>
    </div>
</a>

