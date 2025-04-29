@props([
    'image',
    'title',
    'date',
    'fontColor' => 'text-gray10',
    'link' => ''
])

<a href="{{ $link ?: '#' }}" class="block">
    <div
        class="aspect-[3/4] bg-transparent rounded-2xl p-4 border-2 border-transparent
               transition-all duration-300 cursor-pointer hover:border-primary30 flex flex-col items-center"
        :class="{ 'border-priamry30': active }"
    >
        <img
            src="{{ $image }}"
            alt="Majalah Cover"
            class="w-full h-full rounded-t-xl shadow-md object-cover"
        >

        <div class="w-full flex flex-col items-center justify-center flex-grow text-center font-jakarta text-gray 70 mt-2">
            <h3 class="{{ $fontColor }} font-bold text-h3 mb-1">{{ $title }}</h3>
            <p class="{{ $fontColor }} text-p">{{ $date }}</p>
        </div>
    </div>
</a>
