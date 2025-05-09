@props(['item', 'level' => 1])

@php
    $hasSubmenus = !empty($item['submenus']);
    $href = $item['href'] ?? null;
    $isActive = $href && request()->is(trim($href, '/'));
@endphp

<div class="text-pM text-gray70 border-b border-gray-100" 
    x-data="sidebarItem({{ $isActive ? 'true' : 'false' }}, 1)"
    x-init="init()"
    x-ref="root"
    >
    @if($hasSubmenus)
        <a 
            @click="
                openSub = !openSub;
                recalculateHeight();
                $dispatch('submenu-toggled');
            "
            class="group w-full flex items-center justify-between p-3 rounded focus:outline-none cursor-pointer 
                   hover:bg-gray-50">
            
            <div class="flex items-center gap-3">
                <x-dynamic-component 
                    :component="!empty($item['icon']) ? $item['icon'] : 'heroicon-o-home'" 
                    class="w-5 h-5 transition-colors duration-300 {{ $isActive ? 'text-primary30' : 'text-gray70 group-hover:text-primary30' }}" />
                <span class="transition-colors duration-300 {{ $isActive ? 'text-primary30' : '' }}">{{ $item['title'] }}</span>
            </div>

            <svg 
                :class="{
                    'rotate-90': !openSub,
                    '-rotate-90 text-primary30': openSub
                }"
                :style="{
                    transitionDuration: openSub ? '300ms' : '600ms'
                }"
                class="transition-transform ease-in-out size-5 {{ $isActive ? 'text-primary30' : 'text-gray50 group-hover:text-primary30' }}"
                xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>

        </a>
    @else
        <a 
            href="{{ $href ?? '#' }}"
            class="group w-full flex items-center gap-3 p-3 rounded focus:outline-none 
                   hover:bg-gray-50">
            <x-dynamic-component 
                :component="!empty($item['icon']) ? $item['icon'] : 'heroicon-o-home'" 
                class="w-5 h-5 transition-colors duration-300 {{ $isActive ? 'text-primary30' : 'text-gray70 group-hover:text-primary30' }}" />
            <span class="transition-colors duration-300 {{ $isActive ? 'text-primary30' : '' }}">{{ $item['title'] }}</span>
        </a>
    @endif

    @if($hasSubmenus)
        <div
            x-ref="submenu"
            style="max-height: 0px"
            class="ml-6 mt-1 space-y-1 origin-top overflow-hidden transition-all ease-in-out"
        >
            @foreach($item['submenus'] as $child)
                <x-header-sidebaritems :item="$child" :level="2" />
            @endforeach
        </div>
    @endif
</div>

<script>
    function sidebarItem(defaultOpen, level = 2) {
        return {
            openSub: defaultOpen === 'true',
            level: level,
            init() {
                this.recalculateHeight();
            },
            recalculateHeight() {
                this.$nextTick(() => {
                    const submenu = this.$refs.submenu;
                    const getTotalHeight = (el) => {
                        if (!el) return 0;
                        let height = el.scrollHeight;
                        const children = el.querySelectorAll('[x-ref="submenu"]');
                        children.forEach(child => {
                            if (child !== el) {
                                height += child.scrollHeight;
                            }
                        });
                        return height;
                    };
                    if (submenu) {
                        submenu.style.maxHeight = this.openSub ? getTotalHeight(submenu) + 'px' : '0px';

                        // Durasi transisi disesuaikan berdasarkan level
                        submenu.style.transitionDuration = this.openSub
                            ? (this.level === 1 ? '700ms' : '100ms')
                            : (this.level === 1 ? '500ms' : '100ms');
                    }
                });
            }
        }
    }
</script>
