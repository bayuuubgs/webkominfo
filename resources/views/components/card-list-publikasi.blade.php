@props([ 
    'image' => '',
    'title' => '',
    'category' => '',
    'date' => '',
    'description' => '',
    'imageWidth' => '',
    'imageHeight' => '',
])

<div class="relative flex items-center gap-4 p-3 bg-white rounded-2xl shadow-md 
            w-[620px] h-[178px] mx-auto transition 
            border-2 border-transparent hover:shadow-lg 
            hover:border-[#7A74F0] active:ring-2 active:ring-[#7A74F0]">

    <div class="shrink-0 rounded-lg overflow-hidden {{ $imageWidth }} {{ $imageHeight }}">
        <img src="{{ $image }}" alt="Thumbnail" class="object-cover w-full h-full">
    </div>

    <div class="flex flex-col justify-between space-y-2 pr-2 w-full h-full py-1">
        <h3 class="text-p font-bold text-gray-900 leading-snug line-clamp-3">
            {{ $title }}
        </h3>

        <div class="flex items-center gap-2 text-label text-gray-500">
            <x-label-kategori :text="$category" />
            <span>{{ $date }}</span>
        </div>

        <p class="text-p text-gray70 font-normal leading-snug line-clamp-3">
            {{ $description }}
        </p>
    </div>
</div>
