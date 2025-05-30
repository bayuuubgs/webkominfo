@php
    use Carbon\Carbon;
@endphp

<div class="w-full bg-white flex justify-between items-center px-5 md:px-16 py-2 shadow-lg font-responsive text-pM lg:text-p text-gray90 capitalize gap-5 md:gap-16 z-10">
    <!-- Label Berita Terkini -->
    <div>
        <span class="label-kategori font-jakarta bg-primary50 text-gray10 shadow-sm px-6 py-[6px] rounded-full text-labelM lg:text-label">
            BERITA TERKINI
        </span>
    </div>

    <!-- Marquee untuk judul berita -->
    <div class="flex-1 overflow-hidden mt-2">
        <marquee behavior="scroll" direction="left" scrollamount="5
        " class="text-gray90">
            Pemprov Jatim luncurkan aplikasi layanan publik terbaru |
            Festival Budaya Jatim 2025 sukses digelar meriah |
            Dinas Kominfo ajak UMKM go digital melalui pelatihan |
            Gubernur Jatim resmikan jembatan penghubung antar kota |
            Pemprov Jatim luncurkan aplikasi layanan publik terbaru |
            Festival Budaya Jatim 2025 sukses digelar meriah |
            Dinas Kominfo ajak UMKM go digital melalui pelatihan |
            Gubernur Jatim resmikan jembatan penghubung antar kota |
            Pemprov Jatim luncurkan aplikasi layanan publik terbaru |
            Festival Budaya Jatim 2025 sukses digelar meriah |
            Dinas Kominfo ajak UMKM go digital melalui pelatihan |
            Gubernur Jatim resmikan jembatan penghubung antar kota
        </marquee>
    </div>

    <!-- Tanggal -->
    <div class="text-primary30 whitespace-nowrap">
        {{ Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
    </div>
</div>
