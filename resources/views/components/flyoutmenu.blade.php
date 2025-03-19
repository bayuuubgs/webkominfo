<div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
    <!-- Button Menu -->
    <button class="flex items-center space-x-1 px-3 py-2 text-white hover:text-gray-200">
        <span>{{ $title }}</span>
        <img src="{{ asset('storage/assets/dropdown.png') }}" alt="Dropdown" class="w-4 h-4 brightness-50 transition duration-200 ease-out">
    </button>

    <!-- Dropdown Menu -->
    <div 
        x-show="open" 
        x-transition:enter="transition ease-out duration-100" 
        x-transition:enter-start="opacity-0 scale-95" 
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" 
        x-transition:leave-start="opacity-100 scale-100" 
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute left-0 mt-2 w-56 bg-white shadow-lg rounded-md z-50"
        @click.away="open = false"
    >
        @foreach ($items as $item)
            <a href="{{ $item['link'] }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 transition">
                {{ $item['text'] }}
            </a>
        @endforeach
    </div>
</div>
