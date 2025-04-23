@props([  
    'kategoriList' => [], 
    'tagList' => [],
    'selectedKategori' => null,
    'judulHighlight' => 'Berita' 
])

<div 
    x-data="{
        showResult: false,
        selectedKategori: '{{ $selectedKategori ?? 'Pilih Kategori' }}',
        selectedTagar: 'Pilih Tagar',
    }" 
    class="w-[1320px] bg-primary100 flex flex-col items-center justify-center gap-4 rounded-[12px] py-6 font-jakarta"
>
    <h2 class="text-h2 font-bold text-gray30">
        Temukan {{ $judulHighlight }} Seputar Jawa Timur!
    </h2>

    <form class="w-[1200px] h-[77px] bg-white rounded-[12px] shadow-md px-4 py-2 flex items-center gap-4">

        <div class="w-[350px] h-[45px]">
            <input 
                type="text" 
                name="keyword"
                placeholder="Cari Kata Kunci"
                class="w-full h-full px-4 rounded-lg border border-gray-300 text-p font-normal text-gray50 placeholder-gray50 focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>

        <div x-data="{ open: false }" class="relative w-[261px] h-[45px]">
            <input type="hidden" name="kategori" :value="selectedKategori">
            <button 
                type="button"
                @click="open = !open"
                class="w-full h-full px-4 bg-white border border-gray-300 rounded-lg text-p font-normal text-gray50 flex items-center justify-between"
            >
                <span x-text="selectedKategori"></span>
                <svg class="w-4 h-4 text-gray-400 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div 
                x-show="open" 
                @click.away="open = false"
                class="absolute z-10 mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto"
                x-transition
            >
                @foreach ($kategoriList as $kategori)
                    <div 
                        @click="selectedKategori = '{{ $kategori }}'; open = false"
                        class="px-4 py-2 text-p font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                    >
                        {{ $kategori }}
                    </div>
                @endforeach
            </div>
        </div>

        <div x-data="{ open: false }" class="relative w-[261px] h-[45px]">
            <input type="hidden" name="tagar" :value="selectedTagar">
            <button 
                type="button"
                @click="open = !open"
                class="w-full h-full px-4 bg-white border border-gray-300 rounded-lg text-p font-normal text-gray50 flex items-center justify-between"
            >
                <span x-text="selectedTagar"></span>
                <svg class="w-4 h-4 text-gray-400 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div 
                x-show="open" 
                @click.away="open = false"
                class="absolute z-10 mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto"
                x-transition
            >
                @foreach ($tagList as $tag)
                    <div 
                        @click="selectedTagar = '{{ $tag }}'; open = false"
                        class="px-4 py-2 text-p font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                    >
                        {{ $tag }}
                    </div>
                @endforeach
            </div>
        </div>

        <button 
            type="button"
            @click="showResult = true"
            class="bg-primary30 text-gray30 text-p font-bold px-5 h-[45px] rounded-lg hover:bg-primary50"
        >
            Telusuri
        </button>

        <button 
            type="reset"
            @click="showResult = false; selectedKategori = 'Pilih Kategori'; selectedTagar = 'Pilih Tagar'"
            class="bg-secondary70 text-gray30 text-p font-bold px-5 h-[45px] rounded-lg hover:bg-secondary50"
        >
            Atur Ulang
        </button>
    </form>
</div>
