@props(['videoId', 'title', 'description', 'publishedAt' => null, 'category' => null])

<div x-data="{ play: false }" class="max-w-4xl mx-auto p-4 font-responsive">
    <!-- Thumbnail / Iframe -->
    <div class="relative aspect-video rounded-t-xl overflow-hidden shadow-lg">
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
    <div class="bg-white p-5 rounded-b-xl shadow-lg -mt-[2px]">
        <!-- Kategori & Tanggal -->
        <div class="flex items-center gap-6 mb-2">
            @if ($category)
                <x-label-kategori :text="$category" />
            @endif

            @if ($publishedAt)
                <div class="text-pM lg:text-p text-gray-500">{{ $publishedAt }}</div>
            @endif
        </div>

        <h3 class="text-h3M lg:text-h3 font-bold text-gray-900 mb-2">
            {{ $title }}
        </h3>

        <p class="text-pM lg:text-p text-gray-700 text-justify line-clamp-5">
            {{ $description }}
        </p>
    </div>
</div>
