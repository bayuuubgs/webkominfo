<div class="relative w-[300px] h-[400px] font-jakarta rounded-xl overflow-hidden shadow-xl text-white hover:ring-2 hover:ring-primary30 hover:shadow-2xl transition-all duration-300">
    {{-- Background Image --}}
    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ asset($image) }}');">
    </div>

    {{-- Gradient Overlay --}}
    <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-gray90 to-transparent"></div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col justify-end h-full p-4">
        <p class="text-sm text-center font-semibold leading-snug uppercase">{{ $name }}</p>
        <p class="text-xs text-center font-light mt-1 leading-tight whitespace-normal">
            {{ $position }}
        </p>
    </div>
</div>
