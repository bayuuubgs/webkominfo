<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>

<body class="bg-background">

    <x-header />

    <x-breadcrumb-home />

    <div class="relative font-jakarta bg-cover bg-center h-[670px]"
        style="background-image: url('storage/assets/card-bg-biru.png');">
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
            <x-section-header title="Video Seputar " highlight="Jawa Timur" buttonText="Selengkapnya"
                buttonVariant="blue" type="blue" buttonHref="{{ route('home.index') }}" />
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 -ml-[50px]">
            <div class="lg:col-span-2 flex flex-col pt-[8px]">
                <x-video-container
                    video-id="s18KVkb4rLE"
                    title="INFO JAWA TIMUR MINGGU KE-4 BULAN MARET I 28 MARET 2025"
                    description="INFO JATIM edisi Minggu ke-4 bulan Maret 2025 menyajikan beragam kegiatan di lingkungan Pemprov Jatim dalam sepekan, di antaranya :
                    1. Kominfo berbagi.
                    2. Laporan Pansus pertanggungjawaban Gubernur Jatim tentang anggaran 2024.
                    3. Seminar Pelatihan Kepemimpinan Administrator (PKA) jatim angkatan I 2025.
                    4. Launching Kalender Event Unggulan 2025 di Gedung Negara Grahadi.
                    5. Lailatul Qiroah di Masjid Nasional Al Al-Akbar Surabaya.
                    Demikian beragam informasi dalam sepekan. Semoga informasi tersebut bermanfaat dan mengedukasi."
                    published-at="11 Februari 2025 08:38"
                    category="SETDA / PERANGKAT DAERAH" />
            </div>
            <div class="flex flex-col pt-[23px]">
                <x-card-lainnya title="Video" highlight="Lainnya">
                    <x-card-list-lainnya
                        image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-2 BULAN FEBRUARI | 14 FEBRUARI 2025"
                        date="14 Februari 2025 18:12"
                        category="UMUM"
                    />
                    <x-card-list-lainnya
                        image="{{ asset('storage/assets/videolainnya3.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-3 BULAN FEBRUARI | 22 FEBRUARI 2025"
                        date="22 Februari 2025 09:26"
                        category="WAKIL GUBERNUR"
                    />
                    <x-card-list-lainnya
                        image="{{ asset('storage/assets/videolainnya2.png') }}"
                        title="Lapor SPT Tahunan Hari Ini, Lebih Awal Lebih Nyaman"
                        date="9 Februari 2025 10:49"
                        category="GUBERNUR"
                    />
                    <x-card-list-lainnya
                        image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-5 BULAN JANUARI 2025 | 31 Januari"
                        date="1 Februari 2025 15:04"
                        category="SETDA"
                    />
                </x-card-lainnya>
            </div>
        </div>
    </section>

    <section class="bg-primary100 relative">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header title="Berita SETDA /" highlight="Pemerintah Daerah" buttonText="Selengkapnya"
                buttonVariant="white" type="white" buttonHref="{{ route('home.index') }}" />

            <x-card-slider :rows="1">
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="bg-gray10 relative">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header title="Berita " highlight="Gubernur" buttonText="Selengkapnya" buttonVariant="blue"
                type="blue" buttonHref="{{ route('home.index') }}" />

            <x-card-slider :rows="1">
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="bg-primary100 relative">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header title="Berita Wakil " highlight="Gubernur" buttonText="Selengkapnya"
                buttonVariant="white" type="white" buttonHref="{{ route('home.index') }}" />

            <x-card-slider :rows="1">
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="bg-gray10 relative">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header title="Berita Forda " highlight="Jatim 2024" buttonText="Selengkapnya"
                buttonVariant="blue" type="blue" buttonHref="{{ route('home.index') }}" />

            <x-card-slider :rows="1">
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita image="storage/assets/card-bg-biru.png"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="" />
                </div>
            </x-card-slider>
        </div>
    </section>


</body>
