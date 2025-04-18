@props([
    'text' => 'Button',
    'variant' => 'white',
    'href' => null, // jika null maka tetap button biasa
    'type' => 'button', // untuk tombol biasa
])

@php
    $baseClass = 'font-jakarta text-p font-bold px-6 py-2.5 rounded-lg shadow-md transition duration-150 ease-in-out';

    $variants = [
        'white' => 'bg-gray10 text-primary100 hover:bg-gray30 active:text-gray10 active:bg-primary30',
        'blue' => 'bg-primary50 text-gray10 hover:bg-primary30 active:text-gray90 active:bg-gray30',
    ];

    $variantClass = $variants[$variant] ?? $variants['white'];
    $finalClass = "$baseClass $variantClass";
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $finalClass]) }}>
        {{ $text }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $finalClass]) }}>
        {{ $text }}
    </button>
@endif

