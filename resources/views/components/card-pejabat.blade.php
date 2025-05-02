<div class="group relative z-10 bg-transparent p-4 rounded-2xl overflow-hidden text-white hover:ring-1 hover:ring-inset hover:ring-primary30 hover:shadow-xl transition-all duration-150">
    <div class="relative w-[200px] md:w-[300px] h-[300px] md:h-[400px] p-4 font-responsive rounded-xl shadow-md overflow-hidden transition-all duration-200 group-hover:shadow-xl">

        {{-- Background Image --}}
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset($image) }}');">
        </div>

        {{-- Gradient Overlay --}}
        <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-gray90 to-transparent"></div>

        {{-- Content --}}
        <div class="relative z-10 flex flex-col justify-end h-full p-4">
            <p class="text-pM md:text-p text-center font-semibold leading-snug uppercase">{{ $name }}</p>
            <p class="text-pM md:text-p text-center font-light mt-1 leading-tight whitespace-normal">
                {{ $position }}
            </p>
        </div>
    </div>
</div>
