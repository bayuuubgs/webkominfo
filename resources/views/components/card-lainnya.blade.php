<!-- @props(['title' => 'Video', 'highlight' => 'Lainnya']) -->

<div class="block md:flex md:justify-start">
    <div class="w-full max-w-[474px] bg-gray10 rounded-2xl shadow-md p-2 mx-auto md:mx-0">
        <h2 class="text-h2M md:text-h2 font-semibold mb-2 text-center font-responsive">
            <span class="text-gray90">{{ $title }}</span>
            <span class="text-primary50">{{ $highlight }}</span>
        </h2>

        <div class="space-y-2.5">
            {{ $slot }}
        </div>
    </div>
</div>