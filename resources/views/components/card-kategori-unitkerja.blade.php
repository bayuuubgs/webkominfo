@props([
    'titleFirst' => 'Rekomendasi',
    'titleSecond' => 'Kategori',
    'items' => [],
    'bgColor' => 'bg-background',
    'titleFirstColor' => 'text-gray90',
    'titleSecondColor' => 'text-primary50',
    'titleSize' => 'text-h2',
    'gap' => 'gap-4', // default gap antar card
    'titleMarginBottom' => 'mb-8', // default margin bawah title
])

<div class="{{ $bgColor }} py-10">
    <div class="flex justify-center {{ $titleMarginBottom }}">
        <div class="flex gap-2 items-center text-center">
            <h2 class="{{ $titleFirstColor }} font-bold {{ $titleSize }}">{{ $titleFirst }}</h2>
            <h2 class="{{ $titleSecondColor }} font-bold {{ $titleSize }}">{{ $titleSecond }}</h2>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 {{ $gap }} w-full max-w-screen-xl">
            @foreach ($items as $item)
                <div class="relative w-[266px] h-[306px] bg-white rounded-xl overflow-hidden shadow-xl group hover:shadow-2xl hover:ring-2 hover:ring-primary30 transition-all duration-300">
                    <img src="{{ $item['image'] }}" alt="Card Image" class="w-full h-full object-cover">

                    <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-gray90 to-transparent"></div>
                    
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
