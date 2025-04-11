@props(['dropdownItems' => []])

<div class="relative">
        <div
            class="absolute left-0 z-10 mt-16 w-60 origin-top-right rounded-lg bg-white ring-1 shadow-xl ring-black/5 focus:outline-hidden">
            <div class="p-2">
                @foreach ($dropdownItems as $item)
                    <x-dropdown-items link="{{ $item['link'] }}" desc="{{ $item['desc'] }}" />
                @endforeach
            </div>
        </div>
</div>


contoh pemakaian:

<!-- <x-dropdown :dropdownItems="[
        [
            'link' => '',
            'desc' => 'Kategori',
        ],
        [
            'link' => '',
            'desc' => 'Kategori',
        ],
        [
            'link' => '',
            'desc' => 'Kategori',
        ],
        [
            'link' => '',
            'desc' => 'Kategori',
        ],
        [
            'link' => '',
            'desc' => 'Kategori',
        ],
    ]" />
     -->