@props([
    'image',
    'title',
    'date',
    'category',
])

<div class="relative flex items-center gap-3 p-2 bg-gray10 rounded-2xl shadow-md 
            w-[428px] h-[135px] mx-auto transition 
            border-2 border-transparent hover:shadow-lg 
            hover:border-blue-500 active:ring-2 active:ring-blue-400">
    
    <img src="{{ $image }}" alt="Video Thumbnail" 
         class="w-[192px] h-[104px] rounded-lg object-cover">

    <div class="flex-col space-y-2 w-[200px]">
        <x-label-kategori :text="$category"/>
        <h3 class="text-gray-900 font-semibold text-sm leading-tight line-clamp-3">
            {{ $title }}
        </h3>
        <p class="text-xs text-gray-500">
            {{ $date }}
        </p>
    </div>
</div>
