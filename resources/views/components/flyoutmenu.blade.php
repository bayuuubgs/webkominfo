@props(['menuItems' => []])

<div class="relative">
  <div class="absolute left-1/2 z-20 mt-5 flex w-screen max-w-max -translate-x-1/2 px-4">
    <div class="w-screen max-w-md flex-auto overflow-visible rounded-2xl bg-white text-sm/6 shadow-xl">
      <div class="p-4">
        @foreach ($menuItems as $item)
          <x-menu-items 
            :title="$item['title'] ?? ''"
            :desc="$item['desc'] ?? ''"
            :link="$item['link'] ?? '#'" 
            :icon="$item['icon'] ?? null"
            :hasDropdown="$item['hasDropdown'] ?? false"
            :subItems="$item['subItems'] ?? []"
          />
        @endforeach
      </div>
    </div>
  </div>
</div>
