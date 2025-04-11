@props(['menuItems' => []])

<div class="relative">
  <div class="absolute left-1/2 z-10 mt-5 flex w-screen max-w-max -translate-x-1/2 px-4">
    <div class="w-screen max-w-md flex-auto overflow-hidden rounded-2xl bg-white text-sm/6 ring-1 shadow-lg ring-gray-900/5">
      <div class="p-4">
        @foreach ($menuItems as $item)
          <x-menu-items 
            title="{{ $item['title'] }}" 
            link="{{ $item['link'] }}" 
            desc="{{ $item['desc'] }}"
            :icon="$item['icon'] ?? null"
            :hasDropdown="$item['hasDropdown'] ?? false"
          />
        @endforeach
      </div>
    </div>
  </div>
</div>
