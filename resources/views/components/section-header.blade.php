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
    $highlightColor = $isWhite ? 'text-white' : 'text-primary50';
@endphp

<div class="w-full flex items-center justify-between h-[45px] {{ $class }}">
    <h2 class="font-jakarta text-h2 font-semibold {{ $titleColor }}">
        {{ $title }}
        @if ($highlight)
            <span class="{{ $highlightColor }}">{{ $highlight }}</span>
        @endif
    </h2>

    <x-button :text="$buttonText" :variant="$buttonVariant" :href="$buttonHref" />
</div>
