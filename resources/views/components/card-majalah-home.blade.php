@props([
    'image',
    'title',
    'date',
    'width' => 'w-[332px]',
    'height' => 'h-[554px]',
    'imgWidth' => 'w-[300px]',
    'imgHeight' => 'h-[430px]',
    'fontColor' => 'text-gray10',
])

<div 
    class="{{ $width }} {{ $height }} bg-transparent rounded-2xl shadow-md p-4 border-2 border-transparent 
           transition-all duration-300 cursor-pointer hover:border-blue-500 flex flex-col items-center"
    :class="{ 'border-blue-500': active }"
>
    <img 
        src="{{ $image }}" 
        alt="Majalah Cover" 
        class="{{ $imgWidth }} {{ $imgHeight }} rounded-t-2xl object-cover"
    >

    <div class="w-full flex flex-col items-center justify-center flex-grow text-center mt-2">
        <h3 class="{{ $fontColor }} font-semibold text-lg">{{ $title }}</h3>
        <p class="{{ $fontColor }} text-sm">{{ $date }}</p>
    </div>
</div>