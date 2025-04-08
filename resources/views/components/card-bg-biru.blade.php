<a href="{{ $link }}" class="relative w-[404px] h-auto font-jakarta bg-transparent rounded-2xl shadow-md overflow-hidden transition-all group">
    <div class="transition duration-200 ease-out absolute inset-0 rounded-2xl border-2 border-transparent transition-all group-hover:border-gray-300 group-hover:p-4"></div>

    <div class="relative z-10 bg-transparent p-4 rounded-2xl">
        <img src="{{ $image }}" alt="Card Image" class="w-full h-48 object-cover shadow-sm rounded-lg">
        <h3 class="text-h3 font-bold text-gray10 mt-2 whitespace-normal">{{ $title }}</h3>
        <div class="flex justify-between items-center mt-2">
            <p class="text-p text-gray-300 font-normal">{{ $date }}</p>
            <x-label-kategori text={{$category}}/>
        </div>
        <p class="text-gray10 mt-2 text-p text-justify font-light whitespace-normal">
            {{ $description }}
        </p>
        <span class="text-blue-400 font-semibold text-p">
            Baca Selengkapnya
        </span>
    </div>
</a>
