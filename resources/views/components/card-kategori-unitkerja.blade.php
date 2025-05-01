@props([
    'titleFirst' => 'Rekomendasi',
    'titleSecond' => 'Kategori',
    'items' => [],
    'bgColor' => 'bg-background',
    'titleFirstColor' => 'text-gray90',
    'titleSecondColor' => 'text-primary50',
    'titleSize' => 'text-h2',
    'gap' => 'gap-4', 
    'titleMarginBottom' => 'mb-8', 
])

<div class="{{ $bgColor }} py-10">
    <div class="flex justify-center {{ $titleMarginBottom }}">
        <div class="flex gap-2 items-center text-center">
            <h2 class="{{ $titleFirstColor }} font-bold {{ $titleSize }}">{{ $titleFirst }}</h2>
            <h2 class="{{ $titleSecondColor }} font-bold {{ $titleSize }}">{{ $titleSecond }}</h2>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 {{ $gap }} w-full max-w-screen-xl">
            @foreach ($items as $item)
                @php
                    $link = $item['link'] ?? null;
                @endphp
                @if ($link)
                    <a href="{{ $link }}" class="relative z-10 bg-transparent p-4 rounded-2xl overflow-hidden text-white hover:ring-1 hover:ring-inset hover:ring-primary30 hover:shadow-xl transition-all duration-150">
                @else
                    <div class="relative z-10 bg-transparent p-4 rounded-2xl overflow-hidden text-white hover:ring-1 hover:ring-inset hover:ring-primary30 hover:shadow-xl transition-all duration-150">
                @endif

                <div class="relative w-full h-[300px] bg-white shadow-md rounded-xl overflow-hidden transition-all duration-200 group-hover:shadow-xl">
                    <img src="{{ $item['image'] }}" alt="Card Image" class="w-full h-full object-cover pointer-events-none">

                    <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-gray90 to-transparent"></div>

                    <div class="absolute inset-0 bg-black opacity-0 active:opacity-20 transition-opacity duration-200"></div>

                    @if(isset($item['text']))
                        <div class="absolute bottom-0 left-0 right-0 text-white text-center p-8">
                            <h3 class="font-jakarta font-bold text-p">{{ $item['text'] }}</h3>
                        </div>
                    @endif
                </div>

                @if ($link)
                    </a>
                @else
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
