@props([
    'text' => 'Button',
    'variant' => 'white',
])

@php
    $baseClass = 'font-jakarta text-p px-6 py-2.5 rounded-lg shadow-md transition duration-150 ease-in-out';

    $variants = [
        'white' => 'bg-gray10 text-gray90 hover:bg-primary30 hover:text-gray10',
        'blue' => 'bg-primary50 text-gray10 hover:bg-gray10 hover:text-gray90',
    ];

    $variantClass = $variants[$variant] ?? $variants['white'];
@endphp

<button {{ $attributes->merge(['class' => "$baseClass $variantClass"]) }}>
    {{ $text }}
</button>