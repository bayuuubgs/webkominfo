@props([ 
    'image',
    'title',
    'date',
    'fontColor' => 'text-gray10',
    'link' => '' 
])

<a href="{{ $link ?: '#' }}" class="block"> 
    <div 
        class="aspect-[3/4] bg-transparent rounded-2xl shadow-md p-4 border-2 border-transparent 
               transition-all duration-300 cursor-pointer hover:border-blue-500 flex flex-col items-center"
        :class="{ 'border-blue-500': active }"
    >
        <img 
            src="{{ $image }}" 
            alt="Majalah Cover" 
            class="w-full h-full rounded-t-2xl object-cover"
        >

        <div class="w-full flex flex-col items-center justify-center flex-grow text-center font-jakarta text-p text-gray 70 mt-2">
            <h3 class="{{ $fontColor }} font-semibold text-lg">{{ $title }}</h3>
            <p class="{{ $fontColor }} text-sm">{{ $date }}</p>
        </div>
    </div>
</a>
