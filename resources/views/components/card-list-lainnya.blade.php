@props([
    'image',
    'title',
    'date',
    'category',
    'link' => '',
    'alt' => '',
])

<a href="{{ $link }}" class="group w-full block">
    <div class="relative flex flex-col sm:flex-row sm:items-center 
                p-2 sm:p-4 gap-y-3 sm:gap-x-4
                bg-gray10 rounded-xl w-full border border-transparent transition duration-200
                hover:shadow-lg hover:border-primary30 active:ring-1 active:ring-primary30 
                font-responsive text-pM xl:text-p">
        
                <img
            src="{{ $image }}"
            alt="{{ $alt ?? 'Thumbnail ' . $title }}"
            class="w-full sm:w-[192px] h-auto sm:h-[104px] rounded-lg object-cover">
        
        <div class="flex flex-col justify-start w-full">
            <div class="flex justify-center sm:justify-start pb-2">
                <x-label-kategori :text="$category"/>
            </div>
            <h3 class="text-gray70 text-justify font-semibold line-clamp-3">
                {{ $title }}
            </h3>
            <p class="text-gray50 text-sm">
                {{ $date }}
            </p>
        </div>
    </div>
</a>

