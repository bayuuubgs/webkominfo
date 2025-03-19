<div class="relative w-[404px] h-[483px] font-jakarta bg-transparant rounded-2xl shadow-md overflow-hidden transition-all group">
    <!-- Border Hover dengan Padding -->
    <div class="transition duration-200 ease-out absolute inset-0 rounded-2xl border-2 border-transparent transition-all group-hover:border-primary30 group-hover:p-4"></div>

    <!-- Isi Card -->
    <div class="relative z-10 bg-transparent p-4 rounded-2xl">
        <img src="{{ $image }}" alt="Card Image" class="w-full h-48 object-cover shadow-sm rounded-lg">
        <h3 class="text-lg font-bold text-gray70 mt-2 whitespace-normal">{{ $title }}</h3>
        <div class="flex justify-between items-center mt-2">
            <p class="text-sm text-gray70 font-normal">{{ $date }}</p>
            <x-label-kategori text={{$category}}/>
        </div>
        <p class="text-gray70 mt-2 text-sm font-normal whitespace-normal">
            {{ $description }}
        </p>
        <a href="{{ $link }}" class="text-blue-400 font-semibold text-sm">
            Baca Selengkapnya
        </a>
    </div>
</div>
