@props([
    'image',
    'title',
    'date',
    'fontColor' => 'text-gray10',
    'link' => ''
])

<a href="{{ $link ?: '#' }}" class="block w-full max-w-xs mx-auto sm:max-w-sm md:max-w-md lg:max-w-full">
    <div
        class="aspect-[3/4] bg-transparent rounded-2xl p-4 border-2 border-transparent
               transition-all duration-300 cursor-pointer hover:border-primary30 flex flex-col items-center font-responsive"
        :class="{ 'border-primary30': active }"
    >
        <img
            src="{{ $image }}"
            alt="Majalah Cover"
            class="w-full h-auto rounded-t-xl shadow-md object-cover"
        >

        <div class="w-full flex flex-col items-center justify-center text-center font-jakarta text-p mt-2">
            <h3 class="font-heebo {{ $fontColor }} font-semibold text-base sm:text-lg md:text-xl lg:text-2xl line-clamp-2 mb-2 sm:mb-3">{{ $title }}</h3>
            <p class="font-jakarta {{ $fontColor }} text-sm sm:text-base md:text-lg">{{ $date }}</p>
        </div>
    </div>
</a>
