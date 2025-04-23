@props([
    'titleFirst' => 'Rekomendasi',
    'titleSecond' => 'Kategori',
    'items' => [],
])

<div class="bg-background py-10">
    <div class="flex justify-center mb-8">
        <div class="flex gap-2 items-center text-center">
            <h2 class="text-gray90 font-bold text-[24px]">{{ $titleFirst }}</h2>
            <h2 class="text-primary50 font-bold text-[24px]">{{ $titleSecond }}</h2>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full max-w-screen-xl">
            @foreach ($items as $item)
                <div class="relative w-[266px] h-[306px] bg-white rounded-[16px] overflow-hidden shadow-md group hover:ring-2 hover:ring-blue-500 transition-all duration-300">
                    
                    @if(isset($item['link']))
                        <a href="{{ $item['link'] }}">
                            <img src="{{ $item['image'] }}" alt="Card Image" class="w-full h-full object-cover">
                        </a>
                    @else
                        <img src="{{ $item['image'] }}" alt="Card Image" class="w-full h-full object-cover">
                    @endif

                    @if(isset($item['text']))
                        <div class="absolute bottom-0 left-0 right-0 text-white text-center py-6">
                            <h3 class="font-jakarta font-bold text-lg">{{ $item['text'] }}</h3> 
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
