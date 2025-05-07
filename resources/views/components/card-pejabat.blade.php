<div
    class="group relative z-10 bg-transparent p-2 md:p-4 rounded-2xl overflow-hidden text-white hover:ring-1 hover:ring-inset hover:ring-primary30 hover:shadow-xl transition-all duration-150">
    <div class="relative w-[210px] md:w-[250px] w-auto aspect-[3/4] rounded-xl overflow-hidden shadow-md px-2 py-4 md:p-4 text-pM lg:text-p">

        {{-- Background Image --}}
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset($image) }}');">
        </div>

        {{-- Gradient Overlay --}}
        <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-gray90 to-transparent"></div>

        {{-- Content --}}
        <div class="relative z-10 flex flex-col justify-end h-full">
            <p class="text-center font-semibold leading-snug uppercase">{{ $name }}</p>
            <p class="text-center font-light mt-1 whitespace-normal">
                {{ $position }}
            </p>
        </div>
    </div>
</div>