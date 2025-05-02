@props([
    'title' => 'Judul Section',
    'highlight' => null,
    'buttonText' => 'Button',
    'buttonVariant' => 'white',
    'buttonHref' => null,
    'class' => '',
    'type' => 'blue', // blue = default (hitam & biru), white = putih semua
])

@php
    $isWhite = $type === 'white';
    $titleColor = $isWhite ? 'text-white' : 'text-gray90';
    $highlightColor = $isWhite ? 'text-secondary50' : 'text-primary50';
@endphp

<div class="w-full flex items-center justify-between h-[45px] font-responsive {{ $class }}">
    <h2 class="text-h2M md:text-h2 font-bold {{ $titleColor }}">
        {{ $title }}
        @if ($highlight)
            <span class="text-h2M md:text-h2 font-semibold {{ $highlightColor }}">{{ $highlight }}</span>
        @endif
    </h2>

    <x-button :text="$buttonText" :variant="$buttonVariant" :href="$buttonHref" />
</div>
