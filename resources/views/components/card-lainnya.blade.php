<!-- @props(['title' => 'Video', 'highlight' => 'Lainnya']) -->

<div class="w-[474px] bg-gray10 rounded-2xl shadow-md p-4 mx-auto">
    <h2 class="text-lg font-semibold mb-2 text-center">
        <span class="text-gray90">{{ $title }}</span>
        <span class="text-primary50">{{ $highlight }}</span>
    </h2>

    <div class="space-y-2">
        {{ $slot }}
    </div>
</div>
