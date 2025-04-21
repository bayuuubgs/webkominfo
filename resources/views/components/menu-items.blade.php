@props(['title', 'desc', 'link' => '#', 'icon' => null, 'hasDropdown' => false])

<div class="group relative flex justify-between rounded-lg items-center hover:bg-gray-50">
    <a href="{{ $link }}"
        class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 transition duration-200 ease-out">
        <div
            class="mt-1 flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white transition duration-200 ease-out">
            @if($icon)
                {!! $icon !!}
            @else
                <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
            @endif
        </div>
        <div>
            <span class="font-jakarta font-bold text-p text-gray70">
                {{ $title }}
            </span>
            <p class="mt-1 font-jakarta text-p text-gray70">{{ $desc }}</p>
        </div>
    </a>
    @if($hasDropdown)
        <div>
            <svg class="size-10 text-gray70 group-hover:text-primary30 transition duration-200 ease-out -rotate-90"
                fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    @endif
</div>