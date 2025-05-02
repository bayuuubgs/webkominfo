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
        sortBy: 'desc',
        showCalendar: false,
        selectedDate: ''
    }" 
    class="w-full max-w-screen-xl mx-auto bg-primary100 flex flex-col items-center justify-center gap-6 rounded-[12px] py-6 px-4 md:px-6 font-responsive"
>
    <h2 class="text-h2 md:text-h1 text-center font-bold text-gray30">
        Temukan {{ $judulHighlight }} Seputar Jawa Timur!
    </h2>

    <form 
        class="w-full bg-white rounded-[12px] shadow-md px-4 sm:px-6 py-4 flex flex-wrap justify-center items-center text-center sm:justify-between sm:items-stretch sm:text-left gap-y-4 gap-x-6"
    >

        <!-- Input Kata Kunci -->
        <div class="flex-grow min-w-[200px] max-w-[250px]">
            <input 
                type="text" 
                name="keyword"
                placeholder="Cari Kata Kunci"
                class="w-full h-[45px] px-4 rounded-lg border border-gray-300 text-p font-normal text-gray50 placeholder-gray50 focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>

        <!-- Dropdown Kategori -->
        <div x-data="{ open: false }" class="relative flex-grow min-w-[200px] max-w-[220px]">
            <input type="hidden" name="kategori" :value="selectedKategori">
            <button 
                type="button"
                @click="open = !open"
                class="w-full h-[45px] px-4 bg-white border border-gray-300 rounded-lg text-p font-normal text-gray50 flex items-center justify-between"
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

        <!-- Dropdown Tagar -->
        <div x-data="{ open: false }" class="relative flex-grow min-w-[200px] max-w-[220px]">
            <input type="hidden" name="tagar" :value="selectedTagar">
            <button 
                type="button"
                @click="open = !open"
                class="w-full h-[45px] px-4 bg-white border border-gray-300 rounded-lg text-p font-normal text-gray50 flex items-center justify-between"
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

        <!-- Rentang Waktu + Sort Dropdown -->
        <div x-data="{ openFilter: false }" class="relative flex-grow min-w-[200px] max-w-[220px]">
            <input type="hidden" name="sort" :value="sortBy">
            <input type="hidden" name="rentang_waktu" :value="selectedDate">

            <button 
                type="button"
                @click="openFilter = !openFilter"
                class="w-full h-[45px] px-4 bg-white border border-gray-300 rounded-lg text-p font-normal text-gray50 flex items-center justify-between"
            >
                <span>Pilih Rentang Waktu</span>
                <svg class="w-4 h-4 text-gray-400 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div 
                x-show="openFilter"
                x-transition
                class="absolute z-10 mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg"
                @click.away="openFilter = false"
            >
                <div 
                    @click="sortBy = 'desc'; selectedDate = ''; openFilter = false"
                    class="px-4 py-2 text-p font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                >
                    Terbaru
                </div>
                <div 
                    @click="sortBy = 'asc'; selectedDate = ''; openFilter = false"
                    class="px-4 py-2 text-p font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                >
                    Terlama
                </div>
                <div 
                    class="px-4 py-2 text-p font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                    @click.stop
                >
                    <input 
                        type="month" 
                        x-model="selectedDate"
                        @change="openFilter = false"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                    />
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex gap-2 min-w-[200px]">
            <button 
                type="submit"
                class="bg-primary30 text-gray30 text-p font-bold px-5 h-[45px] rounded-lg hover:bg-primary50"
            >
                Telusuri
            </button>

            <button 
                type="reset"
                @click="showResult = false; selectedKategori = 'Pilih Kategori'; selectedTagar = 'Pilih Tagar'; sortBy = 'desc'"
                class="bg-secondary70 text-gray30 text-p font-bold px-5 h-[45px] rounded-lg hover:bg-secondary50"
            >
                Reset
            </button>
        </div>
    </form>
</div>
