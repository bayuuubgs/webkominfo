@props(['videoId', 'title', 'description', 'publishedAt' => null, 'category' => null])

<div x-data="{ play: false }" class="w-full font-responsive">
    <!-- Thumbnail / Iframe -->
    <div class="relative aspect-video rounded-t-xl overflow-hidden shadow-md">
        <template x-if="!play">
            <img src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg" alt="Video Thumbnail"
                class="w-full h-full object-cover cursor-pointer" @click="play = true">
        </template>
        <template x-if="play">
            <iframe class="w-full h-full" src="https://www.youtube.com/embed/{{ $videoId }}?autoplay=1" frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </template>
    </div>

    <!-- Informasi Video -->
    <div class="bg-white p-5 rounded-b-xl shadow-md -mt-[2px]">
        <!-- Kategori & Tanggal -->

        <h3 class="text-h2M lg:text-h2 text-gray-900 mb-2">
            {{ $title }}
        </h3>

        <div class="flex items-center justify-between md:justify-start gap-6 mb-2">
            @if ($publishedAt)
                <div class="text-pM lg:text-p text-gray-500">{{ $publishedAt }}</div>
            @endif

            @if ($category)
                <x-label-kategori :text="$category" class="ml-auto" />
            @endif
        </div>

        <p class="text-pM lg:text-p text-gray-700 text-justify line-clamp-5 xl:line-clamp-4 2xl:line-clamp-3">
            {{ $description }}
        </p>
    </div>

</div>