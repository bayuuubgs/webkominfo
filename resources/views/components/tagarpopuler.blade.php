@props([
    'tags' => [], 
])

<div class="bg-gray10 py-10 font-jakarta">
    <div class="flex justify-center mb-10 px-4">
        <div class="flex gap-2 items-center text-center flex-wrap justify-center">
            <h2 class="text-h2 font-bold text-gray90">Tagar</h2>
            <h2 class="text-h2 font-bold text-primary50">Populer</h2>
        </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-x-4 sm:gap-x-6 md:gap-x-10 lg:gap-x-16 gap-y-4 sm:gap-y-6 max-w-screen-xl mx-auto px-4 text-center">
        @foreach ($tags as $tag)
            <a 
                href="{{ $tag['url'] }}" 
                class="text-sm sm:text-base text-gray70 hover:text-primary50 transition-colors duration-200"
            >
                #{{ $tag['label'] }}
            </a>
        @endforeach
    </div>
</div>
