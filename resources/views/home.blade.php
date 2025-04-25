<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>

<style>
    swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    swiper-slide {
        transition: transform 0.5s ease, box-shadow 0.5s ease;
        transform-origin: center;
        background-position: center;
        background-size: cover;
        width: 474px;
        height: 267px;
        border-radius: 8px;
        overflow: hidden;
    }

    swiper-slide:hover {
        transform: perspective(800px) rotateX(4deg) rotateY(-4deg) scale(1.02);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
    }

    swiper-slide img {
        display: block;
        width: 100%;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<body class="bg-background">
    <x-header />
    <x-breadcrumb-home />

    <div class="relative font-jakarta bg-cover bg-center h-[670px]"
        style="background-image: url({{ asset('storage/assets/card-bg-biru.png') }});">
        <div
            class="absolute bottom-0 left-0 right-0 h-[80%] bg-gradient-to-t from-primary100 via-[#05003290] to-transparent">
            <div class="absolute inset-0 flex items-end px-[57px] ">
                <div class="text-white max-w-[1326px] pb-[35px] flex flex-col gap-[8px]">
                    <span
                        class="label-kategori w-[170px] font-jakarta bg-backgroundred text-secondary70 shadow-sm px-[16px] py-[6px] rounded-full text-p text-center">BERITA
                        TERKINI</span>
                    <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-4 ">Resmi Dilantik, Gubernur Khofifah dan
                        Wagub Emil Siap Sinergikan Nawa Bhakti Satya dengan Asta Cita</h1>
                    <p class="text-h3 mb-6">Menteri Komunikasi dan Digital (Menkomdigi), Meutya Hafid, mewakili Presiden
                        Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial
                        Intelligence Action Summit (AIAS) yang berlangsung di Paris, Prancis pada 10–11 Februari 2025.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary100 py-8 shadow-lg font-jakarta">
        <div class="bg-white rounded-xl max-w-5xl mx-auto px-[36px] py-[26px]">
            <form action="" method="GET" class="flex items-center gap-2">
                <label for="keyword" class="font-semibold text-h2">Eksplorasi <span
                        class="text-primary50 text-h2">Menu</span></label>
                <input type="text" id="keyword" name="keyword" placeholder="Cari Kata Kunci"
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md">Telusuri</button>
                <a href="" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">Atur Ulang</a>
            </form>
        </div>
    </div>

    <section class="px-[60px] py-[40px] font-jakarta">
        <div class="pb-[24px]">
            <x-section-header
                title="Video Seputar "
                highlight="Jawa Timur"
                buttonText="Selengkapnya"
                buttonVariant="blue"
                type="blue"
                buttonHref="{{ route('home.video') }}"
            />
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 -ml-[50px]">
            <div class="lg:col-span-2 flex flex-col pt-[8px]">
                <x-video-container video-id="s18KVkb4rLE"
                    title="INFO JAWA TIMUR MINGGU KE-4 BULAN MARET I 28 MARET 2025"
                    description="INFO JATIM edisi Minggu ke-4 bulan Maret 2025 menyajikan beragam kegiatan di lingkungan Pemprov Jatim dalam sepekan, di antaranya :
                    1. Kominfo berbagi.
                    2. Laporan Pansus pertanggungjawaban Gubernur Jatim tentang anggaran 2024.
                    3. Seminar Pelatihan Kepemimpinan Administrator (PKA) jatim angkatan I 2025.
                    4. Launching Kalender Event Unggulan 2025 di Gedung Negara Grahadi.
                    5. Lailatul Qiroah di Masjid Nasional Al Al-Akbar Surabaya.
                    Demikian beragam informasi dalam sepekan. Semoga informasi tersebut bermanfaat dan mengedukasi."
                    published-at="11 Februari 2025 08:38" category="SETDA / PERANGKAT DAERAH" />
            </div>
            <div class="flex flex-col pt-[23px]">
                <x-card-lainnya title="Video" highlight="Lainnya">
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-2 BULAN FEBRUARI | 14 FEBRUARI 2025"
                        date="14 Februari 2025 18:12" category="UMUM"
                        link="{{ route('home.video.detail') }}" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya3.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-3 BULAN FEBRUARI | 22 FEBRUARI 2025"
                        date="22 Februari 2025 09:26" category="WAKIL GUBERNUR"
                        link="{{ route('home.galerifoto') }}" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya2.png') }}"
                        title="Lapor SPT Tahunan Hari Ini, Lebih Awal Lebih Nyaman" date="9 Februari 2025 10:49"
                        category="GUBERNUR"
                        link="{{ route('home.galerifoto') }}" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-5 BULAN JANUARI 2025 | 31 Januari" date="1 Februari 2025 15:04"
                        category="SETDA"
                        link="{{ route('home.galerifoto') }}" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-5 BULAN JANUARI 2025 | 31 Januari" date="1 Februari 2025 15:04"
                        category="SETDA"
                        link="{{ route('home.galerifoto') }}" />
                </x-card-lainnya>
            </div>
        </div>
    </section>

    <section class="bg-primary100 relative mt-[15px]">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header
                title="Berita SETDA /"
                highlight="Pemerintah Daerah"
                buttonText="Selengkapnya"
                buttonVariant="white"
                type="white"
                buttonHref="{{ route('home.berita') }}" />

            <x-card-slider :rows="1">
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="bg-gray10 relative mt-[15px]">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header
                title="Berita "
                highlight="Gubernur"
                buttonText="Selengkapnya"
                buttonVariant="blue"
                type="blue"
                buttonHref="{{ route('home.berita') }}"
            />

            <x-card-slider :rows="1">
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="bg-primary100 relative mt-[15px]">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header
                title="Berita Wakil "
                highlight="Gubernur"
                buttonText="Selengkapnya"
                buttonVariant="white"
                type="white"
                buttonHref="{{ route('home.berita') }}"
            />

            <x-card-slider :rows="1">
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="secondary" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="bg-gray10 relative mt-[15px]">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header
                title="Berita Forda "
                highlight="Jatim 2024"
                buttonText="Selengkapnya"
                buttonVariant="blue"
                type="blue"
                buttonHref="{{ route('home.berita') }}"
            />

            <x-card-slider :rows="1">
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}"
                        type="" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="bg-gray10 mt-[15px] font-jakarta">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header
                title="Galeri "
                highlight="Foto"
                buttonText="Selengkapnya"
                buttonVariant="blue"
                type="blue"
                buttonHref="{{ route('home.galerifoto') }}"
            />
        </div>
        <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true"
            centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0"
            coverflow-effect-depth="100" coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">

            <swiper-slide class="relative group rounded-xl overflow-hidden transition-all duration-500">
                <a href="https://kominfo.jatimprov.go.id/">
                    <img src="{{ asset('storage/assets/card-bg-biru.png') }}" class="w-full h-full object-cover" />
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-70 transition-opacity duration-500"
                        style="background: linear-gradient(180deg, rgba(30,22,91,0.5) 22%, rgba(45,33,136,0.7) 30%, rgba(0,0,0,1) 78%);">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-4 flex flex-col justify-end text-white z-10">
                        <div class="flex items-center justify-between mb-2">
                            <x-label-kategori text="UMUM" />
                            <p class="text-p font-medium">
                                22 Februari 2025 9:26
                            </p>
                        </div>
                        <p class="text-h3 font-bold leading-tight mb-[4px]">
                            PON XXI Aceh–Sumut 2024 Sepatu Roda Beregu Putra
                        </p>
                        <p class="text-p font-medium line-clamp-2">
                            Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah
                            Pro Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah
                        </p>
                        <span class="mt-[8px] text-gray10 font-bold underline text-p">Selengkapnya</span>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide class="relative group rounded-xl overflow-hidden transition-all duration-500">
                <a href="https://kominfo.jatimprov.go.id/">
                    <img src="{{ asset('storage/assets/card-bg-biru.png') }}" class="w-full h-full object-cover" />
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-70 transition-opacity duration-500"
                        style="background: linear-gradient(180deg, rgba(30,22,91,0.5) 22%, rgba(45,33,136,0.7) 30%, rgba(0,0,0,1) 78%);">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-4 flex flex-col justify-end text-white z-10">
                        <div class="flex items-center justify-between mb-2">
                            <x-label-kategori text="UMUM" />
                            <p class="text-p font-medium">
                                22 Februari 2025 9:26
                            </p>
                        </div>
                        <p class="text-h3 font-bold leading-tight mb-[4px]">
                            PON XXI Aceh–Sumut 2024 Sepatu Roda Beregu Putra
                        </p>
                        <p class="text-p font-medium line-clamp-2">
                            Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah
                            Pro Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah
                        </p>
                        <span class="mt-[8px] text-gray10 font-bold underline text-p">Selengkapnya</span>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide class="relative group rounded-xl overflow-hidden transition-all duration-500">
                <a href="https://kominfo.jatimprov.go.id/">
                    <img src="{{ asset('storage/assets/card-bg-biru.png') }}" class="w-full h-full object-cover" />
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-70 transition-opacity duration-500"
                        style="background: linear-gradient(180deg, rgba(30,22,91,0.5) 22%, rgba(45,33,136,0.7) 30%, rgba(0,0,0,1) 78%);">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-4 flex flex-col justify-end text-white z-10">
                        <div class="flex items-center justify-between mb-2">
                            <x-label-kategori text="UMUM" />
                            <p class="text-p font-medium">
                                22 Februari 2025 9:26
                            </p>
                        </div>
                        <p class="text-h3 font-bold leading-tight mb-[4px]">
                            PON XXI Aceh–Sumut 2024 Sepatu Roda Beregu Putra
                        </p>
                        <p class="text-p font-medium line-clamp-2">
                            Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah
                            Pro Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah
                        </p>
                        <span class="mt-[8px] text-gray10 font-bold underline text-p">Selengkapnya</span>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide class="relative group rounded-xl overflow-hidden transition-all duration-500">
                <a href="https://kominfo.jatimprov.go.id/">
                    <img src="{{ asset('storage/assets/card-bg-biru.png') }}" class="w-full h-full object-cover" />
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-70 transition-opacity duration-500"
                        style="background: linear-gradient(180deg, rgba(30,22,91,0.5) 22%, rgba(45,33,136,0.7) 30%, rgba(0,0,0,1) 78%);">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-4 flex flex-col justify-end text-white z-10">
                        <div class="flex items-center justify-between mb-2">
                            <x-label-kategori text="UMUM" />
                            <p class="text-p font-medium">
                                22 Februari 2025 9:26
                            </p>
                        </div>
                        <p class="text-h3 font-bold leading-tight mb-[4px]">
                            PON XXI Aceh–Sumut 2024 Sepatu Roda Beregu Putra
                        </p>
                        <p class="text-p font-medium line-clamp-2">
                            Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah
                            Pro Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah
                        </p>
                        <span class="mt-[8px] text-gray10 font-bold underline text-p">Selengkapnya</span>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide class="relative group rounded-xl overflow-hidden transition-all duration-500">
                <a href="https://kominfo.jatimprov.go.id/">
                    <img src="{{ asset('storage/assets/card-bg-biru.png') }}" class="w-full h-full object-cover" />

                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-70 transition-opacity duration-500"
                        style="background: linear-gradient(180deg, rgba(30,22,91,0.5) 22%, rgba(45,33,136,0.7) 30%, rgba(0,0,0,1) 78%);">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-4 flex flex-col justify-end text-white z-10">
                        <div class="flex items-center justify-between mb-2">
                            <x-label-kategori text="UMUM" />
                            <p class="text-p font-medium">
                                22 Februari 2025 9:26
                            </p>
                        </div>
                        <p class="text-h3 font-bold leading-tight mb-[4px]">
                            PON XXI Aceh–Sumut 2024 Sepatu Roda Beregu Putra
                        </p>
                        <p class="text-p font-medium line-clamp-2">
                            Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah
                            Pro Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah
                        </p>
                        <span class="mt-[8px] text-gray10 font-bold underline text-p">Selengkapnya</span>
                    </div>
                </a>
            </swiper-slide>
        </swiper-container>
    </section>

    <section class="bg-primary100 relative font-jakarta mt-[15px]">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header
                title="Majalah "
                highlight=""
                buttonText="Selengkapnya"
                buttonVariant="white"
                type="white"
                buttonHref="{{ route('home.majalah') }}" />

            <x-card-slider :row="1">
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        link="{{ route('home.majalah.detail') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        link="{{ route('home.majalah.detail') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        link="{{ route('home.majalah.detail') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        link="{{ route('home.majalah.detail') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        link="{{ route('home.majalah.detail') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        link="{{ route('home.majalah.detail') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        link="{{ route('home.majalah.detail') }}"
                    />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="mt-[15px]">
        <div class="min-h-screen pt-[45px] px-[66px] font-jakarta">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-7xl mx-auto">

                {{-- KIRI - Artikel --}}
                <div class="bg-gray10 p-[20px] rounded-xl shadow-md">
                    <div class="text-center text-h2 font-bold mb-[16px]">
                        <p>Artikel <span class="text-primary50">Lainnya</span></p>
                    </div>
                    <div class="bg-primary100 text-gray10 rounded-lg overflow-y-auto h-[400px]">

                    </div>
                </div>

                {{-- KANAN - Survey Pengunjung --}}
                <div class="bg-gray10 p-[20px] rounded-xl shadow-md">
                    <div class="text-center text-h2 font-bold mb-[16px]">
                        <p>Survey <span class="text-primary50">Pengunjung</span></p>
                    </div>
                    <p class="text-p font-medium text-gray70 mb-[16px]">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>
                    <div class="flex justify-center">
                        <button
                            class="bg-gray10 border border-gray90 px-[16px] py-[8px] rounded-full flex items-center gap-[8px] text-p font-bold hover:bg-gray-100 transition mb-4">
                            Isi Survey →
                        </button>
                    </div>

                    <canvas id="surveyChart" height="200"></canvas>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('surveyChart').getContext('2d');
            const surveyChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'Desain Website', 'Berita Up To Date', 'Foto Up To Date',
                        'Media Center', 'Kecepatan Upload', 'Isi / Muatan Berita',
                        'Penggunaan Bahasa', 'Update Ikon Pendukung', 'Update Agenda',
                        'Update Prakiraan Cuaca'
                    ],
                    datasets: [{
                        label: 'Skor',
                        data: [7, 5.2, 5.2, 5.2, 5.2, 5.2, 5.2, 3.5, 5.2, 5.2],
                        backgroundColor: '#1F1A75'
                    }]
                },
                options: {
                    scales: {
                        x: {
                            ticks: {
                                maxRotation: 90,
                                minRotation: 45,
                                autoSkip: false,
                            }
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </section>

    <x-footer />
</body>
