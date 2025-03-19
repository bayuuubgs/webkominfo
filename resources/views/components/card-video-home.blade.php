@props(['videos' => []])

<div class="w-[474px] bg-white rounded-2xl shadow-md p-4 mx-auto">
<h2 class="text-lg font-semibold mb-3 text-center">
    <span class="text-[#181818]">Video</span> 
    <span class="text-[#1F185F]">Lainnya</span>
</h2>
    <x-list-video-lainnya :videos="$videos" />
</div>
