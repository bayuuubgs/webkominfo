@props([
    'title',
    'desc',
    'link' => '#',
    'icon' => null,
    'hasDropdown' => false,
    'subItems' => [],
])

@php
    // Pencari Aktif
    $isActive = request()->is(ltrim($link, '/')) || collect($subItems)->contains(function ($sub) {
        return request()->is(ltrim($sub['link'] ?? '', '/'));
    });
@endphp

<div 
    @if ($hasDropdown)
        x-data="{ open: {{ $isActive ? 'true' : 'false' }} }" 
        @click.away="open = false"
        class="group/menu-item relative"
    @else
        class=""
    @endif
>
    <div class="group/menu-trigger flex justify-between items-center rounded-xl font-responsive text-pM lg:text-p transition duration-200 ease-out 
        {{ $isActive ? 'bg-gray-50' : 'text-gray70 hover:bg-gray-50' }}">
        
        @if ($hasDropdown)
            <button
                type="button"
                @click="open = !open"
                :class="{ 'bg-gray-50 rounded-xl': open }"
                class="flex items-center gap-x-4 w-full text-left p-3 transition duration-200 ease-out"
            >
                {{-- Icon --}}
                <div 
                    :class="{ 'bg-white': open }"
                    class="flex-none flex items-center justify-center size-10 rounded-lg transition 
                        {{ $isActive ? 'bg-white' : 'bg-gray-50 group-hover/menu-item:bg-white' }}"
                >
                    @if ($icon)
                        <x-dynamic-component 
                            :component="$icon"
                            class="size-6 transition 
                                {{ $isActive ? 'text-primary30' : 'text-gray-600 group-hover/menu-item:text-primary30' }}"
                        />
                    @else
                        <x-heroicon-o-document-text 
                            class="size-6 transition 
                                {{ $isActive ? 'text-primary30' : 'text-gray-600 group-hover/menu-item:text-primary30' }}"
                        />
                    @endif
                </div>

                <div class="flex-grow">
                    <span class="font-bold text-p">{{ $title }}</span>
                    <p class="mt-0.5 text-pM">{{ $desc }}</p>
                </div>

                {{-- Arrow --}}
                <div class="flex items-center">
                    <svg 
                        :class="{
                            'rotate-180 text-primary30': open,
                            'rotate-0 text-gray70': !open
                        }"
                        class="transition-transform duration-300 ease-in-out size-6 group-hover/menu-item:text-primary30"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </button>

            {{-- Dropdown --}}
            <div 
                x-show="open" 
                x-transition
                class="absolute top-1 left-full z-20 ml-5 -mt-5 min-w-full bg-white rounded-2xl shadow-lg"
            >
                <div class="p-4">
                    @foreach ($subItems as $sub)
                        @php
                            $subActive = request()->is(ltrim($sub['link'] ?? '#', '/'));
                        @endphp

                        <a href="{{ $sub['link'] ?? '#' }}"
                            class="group/submenu flex gap-x-4 items-center p-3 rounded-lg transition duration-200 ease-out
                                {{ $subActive ? 'bg-gray-50' : 'hover:bg-gray-50' }}"
                        >
                            <div class="flex-none flex items-center justify-center size-10 rounded-lg transition
                                {{ $subActive ? 'bg-white' : 'bg-gray-50 group-hover/submenu:bg-white' }}">
                                @if (!empty($sub['icon']))
                                    <x-dynamic-component 
                                        :component="$sub['icon']"
                                        class="size-6 transition
                                            {{ $subActive ? 'text-primary30' : 'text-gray-600 group-hover/submenu:text-primary30' }}"
                                    />
                                @else
                                    <x-heroicon-o-document-text 
                                        class="size-6 transition 
                                            {{ $subActive ? 'text-primary30' : 'text-gray-600 group-hover/submenu:text-primary30' }}"
                                    />
                                @endif
                            </div>
                            <div>
                                <span class="font-bold text-p">{{ $sub['title'] }}</span>
                                <p class="mt-0.5 text-pM">{{ $sub['desc'] }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        @else

            {{-- Tanpa Arrow --}}
            <a href="{{ $link }}"
                class="group/menu-item flex gap-x-4 items-center p-3 rounded-lg transition w-full
                    {{ $isActive ? 'bg-gray-50 text-gray-900' : 'hover:bg-gray-50 text-gray70' }}"
            >
                <div class="flex-none flex items-center justify-center size-10 rounded-lg transition 
                    {{ $isActive ? 'bg-white' : 'bg-gray-50 group-hover/menu-item:bg-white' }}">
                    @if ($icon)
                        <x-dynamic-component 
                            :component="$icon"
                            class="size-6 transition 
                                {{ $isActive ? 'text-primary30' : 'text-gray-600 group-hover/menu-item:text-primary30' }}"
                        />
                    @else
                        <x-heroicon-o-document-text 
                            class="size-6 transition 
                                {{ $isActive ? 'text-primary30' : 'text-gray-600 group-hover/menu-item:text-primary30' }}"
                        />
                    @endif
                </div>
                <div>
                    <span class="font-bold text-p">{{ $title }}</span>
                    <p class="mt-0.5 text-pM">{{ $desc }}</p>
                </div>
            </a>
        @endif
    </div>
</div>
