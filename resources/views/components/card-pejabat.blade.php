<div class="relative w-[300px] h-[400px] font-jakarta rounded-xl overflow-hidden shadow-md text-white">
    {{-- Background Image --}}
    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ asset($image) }}');">
    </div>

    {{-- Gradient Overlay --}}
    <div class="absolute bottom-0 left-0 right-0 h-[60%] bg-gradient-to-t from-[#050032b3] via-[#05003280] to-transparent"></div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col justify-end h-full p-4">
        <p class="text-sm text-center font-semibold leading-snug uppercase">{{ $name }}</p>
        <p class="text-xs text-center font-light mt-1 leading-tight whitespace-normal">
            {{ $position }}
        </p>
    </div>
</div>
