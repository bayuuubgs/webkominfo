<!-- @props(['image', 'title', 'date']) -->

<div 
    class="w-[332px] h-[554px] bg-transparant rounded-2xl shadow-md p-4 border-2 border-transparent transition-all duration-300 cursor-pointer hover:border-blue-500 flex flex-col items-center"
    :class="{ 'border-blue-500': active }"
>
    <img src="{{ $image }}" alt="Majalah Cover" 
        class="w-[300px] h-[430px] rounded-t-2xl object-cover">

    <div class="w-full flex flex-col items-center justify-center flex-grow text-center mt-2">
        <h3 class="text-[#F2F2F2] font-semibold text-lg">{{ $title }}</h3>
        <p class="text-sm text-[#F2F2F2]">{{ $date }}</p>
    </div>
</div>
