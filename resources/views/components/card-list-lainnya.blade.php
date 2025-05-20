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
                p-2 sm:p-3 gap-y-3 sm:gap-x-4
                bg-gray10 rounded-xl w-full border border-transparent transition duration-200
                hover:shadow-lg hover:border-primary30 active:ring-1 active:ring-primary30
                font-responsive text-pM">

        <img
            src="{{ $image }}"
            alt="{{ $alt ?? 'Thumbnail ' . $title }}"
            class="w-full sm:w-[160px] aspect-[16/9] rounded-lg object-cover"
        />

        <div class="flex flex-col justify-start w-full gap-1">

            <h3 class="text-gray70 text-justify font-semibold line-clamp-3">
                {{ $title }}
            </h3>

            <div class="flex justify-between items-center text-gray70">
                <span class="line-clamp-1">{{ $date }}</span>
                <x-label-kategori :text="$category" />
            </div>

        </div>
    </div>
</a>

