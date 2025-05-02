@props([
    'image',
    'title',
    'date',
    'category',
    'link' => '', 
])

<a href="{{ $link }}" class="group w-full max-w-[428px] mx-auto mb-[1px] block">
    <div class="relative flex flex-col sm:flex-row sm:items-center gap-2 px-[7px] py-[7px] 
                bg-gray10 rounded-2xl w-full border-2 border-transparent transition duration-200
                hover:shadow-lg hover:border-blue-500 active:ring-2 active:ring-blue-400 font-responsive">

        <img src="{{ $image }}" alt="Video Thumbnail" 
             class="w-full sm:w-[192px] h-auto sm:h-[104px] rounded-lg object-cover">

        <div class="flex flex-col justify-start space-y-[4px] w-full sm:w-[200px]">
            <div class="flex justify-center sm:justify-start">
                <x-label-kategori :text="$category"/>
            </div>
            <h3 class="text-gray-900 font-semibold text-sm leading-tight line-clamp-3">
                {{ $title }}
            </h3>
            <p class="text-xs text-gray-500">
                {{ $date }}
            </p>
        </div>
    </div>
</a>
