@props(['title' => 'Video', 'highlight' => 'Lainnya'])

<div class="w-full bg-gray10 rounded-2xl px-[10px] py-4 md:p-4 gap-y-2 sm:p-5 shadow-md mx-auto h-full flex flex-col {{ $attributes->get('class') }}">
    <h2 class="text-h3 sm:text-h2M lg:text-h2 font-semibold mb-2 text-center font-responsive">
        <span class="text-gray90">{{ $title }}</span>
        <span class="text-primary50">{{ $highlight }}</span>
    </h2>

    <!-- Kontainer daftar video lainnya -->
    <div class="flex-1 overflow-y-auto">
        {{ $slot }}
    </div>
</div>


