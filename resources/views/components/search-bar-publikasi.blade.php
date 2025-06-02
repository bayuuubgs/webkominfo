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
        selectedDate: '',
        kategoriSearch: '',
        tagarSearch: '',
        keyword: '',
    }"
    class="w-full bg-primary100 flex flex-col items-center justify-center gap-5 rounded-2xl p-2 md:px-6 md:pb-6 font-responsive text-pM lg:text-p"
>
    <h2 class="text-h2M lg:text-h1 text-center font-bold text-gray30 pt-3">
        Temukan {{ $judulHighlight }} Seputar Jawa Timur!
    </h2>

    <form class="w-full bg-white rounded-xl shadow-md p-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-[10px] md:gap-5">

        <!-- Input Kata Kunci -->
        <div class="w-full">
            <input
                type="text"
                name="keyword"
                x-model="keyword"
                placeholder="Cari Kata Kunci"
                :class="keyword.length > 0 ? 'ring-1 ring-primary30' : ''"
                class="w-full h-[45px] px-4 rounded-lg border border-gray-300 text-gray50 placeholder-gray50 focus:outline-none focus:ring-1 focus:ring-primary30 transition-all duration-200"
            />
        </div>


        <!-- Dropdown Kategori with Search -->
        <div x-data="{ openKategori: false }" class="relative w-full">
            <input type="hidden" name="kategori" :value="selectedKategori">
            <div
                @click="openKategori = true"
                :class="(openKategori || kategoriSearch.length > 0) ? 'ring-1 ring-primary30' : ''"
                class="w-full h-[45px] px-4 bg-white border border-gray-300 rounded-lg flex items-center justify-between transition-all duration-200 cursor-text"
            >
                <input
                    x-model="kategoriSearch"
                    @focus="openKategori = true"
                    placeholder="Pilih Kategori"
                    class="w-full bg-transparent text-gray50 focus:outline-none"
                />
                <svg
                    class="w-4 h-4 text-gray-400 ml-2 transition-transform duration-200"
                    :class="{ 'rotate-180': openKategori }"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
            <div
                x-show="openKategori"
                @click.away="openKategori = false"
                class="absolute z-10 mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto"
                x-transition
            >
                @foreach ($kategoriList as $kategori)
                    <div
                        x-show="{{ json_encode($kategori) }}.toLowerCase().includes(kategoriSearch.toLowerCase())"
                        @click="selectedKategori = '{{ $kategori }}'; kategoriSearch = '{{ $kategori }}'; openKategori = false"
                        class="px-4 py-2 font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                    >
                        {{ $kategori }}
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Dropdown Tagar with Search -->
        <div x-data="{ openTagar: false }" class="relative w-full">
            <input type="hidden" name="tagar" :value="selectedTagar">
                <div
                    @click="openTagar = true"
                    :class="(openTagar || tagarSearch.length > 0) ? 'ring-1 ring-primary30' : ''"
                    class="w-full h-[45px] px-4 bg-white border border-gray-300 rounded-lg flex items-center justify-between transition-all duration-200 cursor-text"
                >
                <input
                    x-model="tagarSearch"
                    @focus="openTagar = true"
                    placeholder="Pilih Tagar"
                    class="w-full bg-transparent text-gray50 focus:outline-none"
                />
                <svg
                    class="w-4 h-4 text-gray-400 ml-2 transition-transform duration-200"
                    :class="{ 'rotate-180': openTagar }"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
            <div
                x-show="openTagar"
                @click.away="openTagar = false"
                class="absolute z-10 mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto"
                x-transition
            >
                @foreach ($tagList as $tag)
                    <div
                        x-show="{{ json_encode($tag) }}.toLowerCase().includes(tagarSearch.toLowerCase())"
                        @click="selectedTagar = '{{ $tag }}'; tagarSearch = '{{ $tag }}'; openTagar = false"
                        class="px-4 py-2 font-normal text-gray70 hover:bg-gray-100 cursor-pointer"
                    >
                        {{ $tag }}
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Rentang Waktu -->
        <div x-data="{ openFilter: false }" class="relative w-full">
            <input type="hidden" name="sort" :value="sortBy">
            <input type="hidden" name="rentang_waktu" :value="selectedDate">

                <button
                    type="button"
                    @click="openFilter = !openFilter"
                    :class="(openFilter || selectedDate !== '' || sortBy !== 'desc') ? 'ring-1 ring-primary30' : ''"
                    class="w-full h-[45px] px-4 bg-white border border-gray-300 rounded-lg font-normal text-gray50 flex items-center justify-between transition-all duration-200"
                >

                <span>Pilih Rentang Waktu</span>
                <svg
                    class="w-4 h-4 text-gray-400 ml-2 transition-transform duration-200"
                    :class="{ 'rotate-180': openFilter }"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                >
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
                <div class="px-4 py-2 font-normal text-gray70 hover:bg-gray-100 cursor-pointer" @click.stop>
                    <input
                        type="month"
                        x-model="selectedDate"
                        @change="openFilter = false"
                        class="w-full p-2 border border-gray-300 rounded-lg"
                    />
                </div>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="relative w-full flex gap-[10px] md:gap-5">
            <x-button class="w-full" text="Telusuri" variant="blue" type="submit" />
            <x-button
                class="w-full"
                text="Reset"
                variant="red"
                @click="
                    showResult = false;
                    selectedKategori = 'Pilih Kategori';
                    kategoriSearch = '';
                    selectedTagar = 'Pilih Tagar';
                    tagarSearch = '';
                    sortBy = 'desc';
                    selectedDate = '';
                "
            />
        </div>
    </form>
</div>
