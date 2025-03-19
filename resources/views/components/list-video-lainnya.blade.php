@props(['videos'])

<div class="w-full max-w-lg">
    @foreach ($videos as $index => $video)
        <div class="ease-out transition duration-200 relative flex items-center gap-3 p-2 bg-white rounded-2xl shadow-md
                    w-[428px] h-[135px] mx-auto hover:shadow-lg 
                    border-2 border-transparent hover:border-blue-500 
                    active:border-blue-500 active:ring-2 active:ring-blue-400 mb-4">
            <img src="{{ $video['image'] }}" alt="Video Thumbnail" 
                class="w-[192px] h-[104px] rounded-lg object-cover">
            <div class="flex flex-col gap-1">
                <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded-full w-fit">UMUM</span>
                <h3 class="text-gray-900 font-semibold text-sm leading-tight">{{ $video['title'] }}</h3>
                <p class="text-xs text-gray-500">{{ $video['date'] }}</p>
            </div>
        </div>
    @endforeach
</div>
