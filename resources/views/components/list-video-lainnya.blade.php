<!-- <div class="w-full max-w-lg space-y-4">
    @foreach ($videos as $video)
        <div class="relative flex items-center gap-3 p-2 bg-gray10 rounded-2xl shadow-md 
                    w-[428px] h-[135px] mx-auto transition 
                    border-2 border-transparent hover:shadow-lg 
                    hover:border-blue-500 active:ring-2 active:ring-blue-400">
            
            <img src="{{ $video['image'] }}" alt="Video Thumbnail" 
                class="w-[192px] h-[104px] rounded-lg object-cover">

            <div class="flex-col space-y-2">
                <x-label-kategori :text="$video['category']"/>
                <h3 class="text-gray-900 font-semibold text-sm leading-tight">
                    {{ $video['title'] }}
                </h3>
                <p class="text-xs text-gray-500">
                    {{ $video['date'] }}
                </p>
            </div>

        </div>
    @endforeach
</div> -->
