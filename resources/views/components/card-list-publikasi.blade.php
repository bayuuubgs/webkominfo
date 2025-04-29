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

<a href="{{ $link }}" class="relative flex items-center gap-4 p-3 bg-white rounded-2xl shadow-md
            w-full max-w-[620px] h-auto mx-auto transition
            border-2 border-transparent hover:shadow-lg
            hover:border-primary30 active:ring-2 active:ring-primary30 font-jakarta">
    
    <div class="shrink-0 rounded-lg overflow-hidden {{ $aspectClass }} w-[250px]">
        <img src="{{ $image }}" alt="Thumbnail" class="object-cover w-full h-full">
    </div>

    <div class="flex flex-col justify-center space-y-2 pr-2 w-full h-full py-1">
    <h3 class="text-h3 font-bold text-gray90 leading-snug line-clamp-3">
        {{ $title }}
    </h3>

    <div class="flex items-center gap-2 text-label font-bold text-gray70">
        <x-label-kategori :text="$category" />
        <span>{{ $date }}</span>
    </div>

        <p class="text-p text-gray70 font-normal leading-snug line-clamp-3">
            {{ $description }}
        </p>
    </div>
</a>
