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
    class="w-full bg-primary100 flex flex-col items-center justify-center gap-5 rounded-2xl p-5 md:px-6 md:pb-6 font-responsive text-pM lg:text-p"
>
    <h2 class="text-h2M lg:text-h1 text-center font-bold text-gray30">
        Temukan {{ $judulHighlight }} Seputar Jawa Timur!
    </h2>

    <form 
        class="w-full bg-white rounded-xl shadow-md p-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-[10px] md:gap-5"
    >
        <!-- Input Kata Kunci -->
        <div class="w-full">
            <input 
                type="text" 
                name="keyword"
                placeholder="Cari Kata Kunci"
                class="w-full h-[45px] px-4 rounded-lg border border-gray-300 font-normal text-gray50 placeholder-gray50 focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>

        <!-- Dropdown Kategori -->
        <div x-data="{ open: false }" class="relative w-full">
            <input type="hidden" name="kategori" :value="selectedKategori">
            <button 
                type="button"
                @click="open = !open"
                class="w-full h-[45px] px-4 bg-white border border-gray-300 rounded-lg font-normal text-gray50 flex items-center justify-between"
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
                        class="px-4 py-2 font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                    >
                        {{ $kategori }}
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Dropdown Tagar -->
        <div x-data="{ open: false }" class="relative w-full">
            <input type="hidden" name="tagar" :value="selectedTagar">
            <button 
                type="button"
                @click="open = !open"
                class="w-full h-[45px] px-4 bg-white border border-gray-300 rounded-lg font-normal text-gray50 flex items-center justify-between"
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
                        class="px-4 py-2 font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                    >
                        {{ $tag }}
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Rentang Waktu + Sort Dropdown -->
        <div x-data="{ openFilter: false }" class="relative w-full">
            <input type="hidden" name="sort" :value="sortBy">
            <input type="hidden" name="rentang_waktu" :value="selectedDate">

            <button 
                type="button"
                @click="openFilter = !openFilter"
                class="w-full h-[45px] px-4 bg-white border border-gray-300 rounded-lg font-normal text-gray50 flex items-center justify-between"
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
                    class="px-4 py-2 font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                >
                    Terbaru
                </div>
                <div 
                    @click="sortBy = 'asc'; selectedDate = ''; openFilter = false"
                    class="px-4 py-2 font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                >
                    Terlama
                </div>
                <div 
                    class="px-4 py-2 font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
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

        <!-- Tombol Aksi (spanning full width) -->
        <div class="relative w-full flex gap-[10px] md:gap-5">
            <x-button class="w-full" text="Telusuri" variant="blue" type="button" />
            <x-button class="w-full" text="Reset" variant="red"
                @click="showResult = false; selectedKategori = 'Pilih Kategori'; selectedTagar = 'Pilih Tagar'; sortBy = 'desc'" />
        </div>


    </form>
</div>

