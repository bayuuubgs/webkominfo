@props([
    'title',
    'url',
])

<div class="relative flex items-center gap-4 p-3 bg-[#F1F8FE] rounded-2xl shadow-md
            w-[1090px] h-[99px] mx-auto transition
            border-2 border-transparent hover:shadow-lg
            hover:border-[#7A74F0] active:ring-2 active:ring-[#7A74F0]">

    <p class="text-p font-bold font-jakarta text-gray-900 line-clamp-2 max-w-[950px]">
        {{ $title }}
    </p>

    <x-button class="ml-auto bg-[#3B2CB5] text-white text-p font-bold font-jakarta px-4 py-2 rounded hover:bg-blue-500 active:bg-blue-500"
        :text="'Telusuri'" 
        :href="$url" 
        variant="blue" 
        type="blue" 
    />
</div>
