@props([
    'title' => '',
    'link' => '', 
])

<div class="relative flex items-center justify-between p-4 bg-[#F1F8FE] rounded-2xl shadow-md
            w-full max-w-4xl h-[100px] mx-auto transition-all border-2 border-transparent 
            hover:shadow-lg hover:border-[#7A74F0] active:ring-2 active:ring-[#7A74F0]">

    <p class="text-p font-bold font-jakarta text-gray-900 line-clamp-2 pr-4 flex-1">
        {{ $title }}
    </p>

    <x-button 
        class="shrink-0 ml-4 bg-[#3B2CB5] text-white text-sm font-bold font-jakarta px-5 py-2 rounded-lg 
               hover:bg-blue-600 active:bg-blue-700 transition-colors"
        :text="'Telusuri'" 
        :href="$link"
        variant="blue" 
        type="button" 
    />
</div>
