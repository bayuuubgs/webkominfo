@props([
    'image',
    'title',
    'date',
    'category',
    'link' => '', 
])

<a href="{{ $link }}" class="group w-[428px] mx-auto mb-[1px] block">
    <div class="relative flex items-center gap-2 px-[7px] py-[7px] bg-gray10 rounded-2xl w-full 
                border-2 border-transparent transition duration-200
                hover:shadow-lg hover:border-blue-500 active:ring-2 active:ring-blue-400 font-jakarta">
        
        <img src="{{ $image }}" alt="Video Thumbnail" 
             class="w-[192px] h-[104px] rounded-lg object-cover">

        <div class="flex-col space-y-[4px] w-[200px]"> 
            <x-label-kategori :text="$category"/>
            <h3 class="text-gray-900 font-semibold text-sm leading-tight line-clamp-3">
                {{ $title }}
            </h3>
            <p class="text-xs text-gray-500">
                {{ $date }}
            </p>
        </div>
    </div>
</a>
