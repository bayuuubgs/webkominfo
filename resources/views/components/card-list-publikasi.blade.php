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
    $aspectClass = match($ratio) {
        '3:2' => 'aspect-[3/2]',
        '16:9' => 'aspect-[16/9]',
        default => 'aspect-[16/9]',
    };
@endphp

<a href="{{ $link }}" class="relative flex flex-col sm:flex-row items-center sm:items-center gap-3
            px-5 md:px-6 py-4 bg-white rounded-2xl w-full max-w-[620px] mx-auto transition
            border-2 border-transparent hover:shadow-lg hover:border-primary30 active:ring-2 active:ring-primary30 
            font-heebo md:font-jakarta text-pM lg:text-p">

    <div class="shrink-0 rounded-lg overflow-hidden {{ $aspectClass }} w-full sm:w-[250px]">
        <img src="{{ $image }}" alt="Thumbnail" class="object-cover w-full h-full">
    </div>

    <div class="flex flex-col justify-center text-center sm:text-left items-center sm:items-start w-full gap-1.5">
        <h3 class="text-h1M lg:text-h3 font-bold text-gray90 leading-snug line-clamp-2">
            {{ $title }}
        </h3>

        <div class="flex flex-wrap justify-center sm:justify-start items-center gap-2 text-label font-bold text-gray70">
            <x-label-kategori :text="$category" />
            <span>{{ $date }}</span>
        </div>

        <p class="text-pM lg:text-p text-gray70 font-normal leading-snug line-clamp-2">
            {{ $description }}
        </p>
    </div>
</a>
