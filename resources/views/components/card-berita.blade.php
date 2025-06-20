<div>
    <a href="{{ $link }}" class="relative block {{ $cardWidth }} h-auto font-responsive bg-transparent rounded-2xl overflow-hidden transition-all group hover:shadow-lg">
        <div
            class="transition duration-200 ease-out absolute inset-0 rounded-2xl border border-transparent {{ $hoverBorder }} group-hover:p-2">
        </div>

        <div class="relative z-10 bg-transparent p-3 md:p-4 rounded-2xl">
            <img src="{{ $image }}" alt="{{ $alt }}"
                 class="w-full aspect-[1.5] object-cover shadow-lg rounded-lg
                        transition duration-300 ease-in-out
                        group-hover:brightness-110 group-active:brightness-110
                        group-hover:shadow-xl group-active:shadow-xl">

            <h3 class="text-h3M lg:text-h3 font-medium {{ $titleColor }} mt-2 whitespace-normal line-clamp-2">
                {{ $title }}
            </h3>

            <div class="flex justify-between items-center mt-2">
                <p class="text-pM lg:text-p {{ $dateColor }} font-light">{{ $date }}</p>
                <x-label-kategori text="{{ $category }}" />
            </div>

            <p class="{{ $textColor }} mt-2 text-pM lg:text-p text-justify font-light line-clamp-3 whitespace-normal">
                {{ $description }}
            </p>

            <span class="text-blue-400 font-semibold text-pM lg:text-p">
                {{ $readMoreText ?? 'Baca Selengkapnya' }}
            </span>
        </div>
    </a>
</div>
