@props(['desc', 'link' => '#'])

<div class="group relative flex justify-between rounded-lg items-center hover:bg-gray-50">
    <a href="{{ $link }}"
        class="group relative flex rounded-lg  p-1 hover:bg-gray-50 transition duration-200 ease-out">
        <div>
            <p class="block px-2 py-1 font-jakarta text-p text-gray70">{{ $desc }}</p>
        </div>
    </a>
</div>