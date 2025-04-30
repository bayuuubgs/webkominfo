<div>
    <a href="{{ $link }}" class="relative block {{ $cardWidth }} h-auto font-jakarta bg-transparent rounded-2xl overflow-hidden transition-all group hover:shadow-lg">
        <div
            class="transition duration-200 ease-out absolute inset-0 rounded-2xl border border-transparent {{ $hoverBorder }} group-hover:p-2">
        </div>

        <div class="relative z-10 bg-transparent p-4 rounded-2xl">
            <img src="{{ $image }}" alt="Card Image" class="w-full aspect-[1.5] object-cover shadow-sm rounded-lg">

            <h3 class="text-h3 font-bold {{ $textColor }} mt-2 whitespace-normal line-clamp-2">
                {{ $title }}
            </h3>

            <div class="flex justify-between items-center mt-2">
                <p class="text-p {{ $dateColor }} font-light">{{ $date }}</p>
                <x-label-kategori text="{{ $category }}" />
            </div>

            <p class="{{ $textColor }} mt-2 text-p text-justify font-light line-clamp-3 whitespace-normal">
                {{ $description }}
            </p>

            <span class="text-blue-400 font-semibold text-p">
                {{ $readMoreText ?? 'Baca Selengkapnya' }}
            </span>
        </div>
    </a>
</div>
