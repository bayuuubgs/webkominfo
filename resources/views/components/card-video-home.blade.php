<!-- @props([
    'videos' => [],
    'title' => 'Video Lainnya' // default title
])

@php
    $parts = explode(' ', $title, 2); 
@endphp

<div class="w-[474px] bg-gray10 rounded-2xl shadow-md p-4 mx-auto">
    <h2 class="text-lg font-semibold mb-3 text-center">
        <span class="text-gray90">{{ $parts[0] ?? '' }}</span> 
        <span class="text-primary50">{{ $parts[1] ?? '' }}</span>
    </h2>
    
    <x-list-video-lainnya :videos="$videos" />
</div> -->
