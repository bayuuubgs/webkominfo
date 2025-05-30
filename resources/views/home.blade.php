<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/swiper.js'])
    <title>Home</title>
</head>

<style>
    swiper-container {
        width: 100%;
        padding-top: 20px;
        padding-bottom: 25px;
    }

    @media screen and (min-width: 768px) {
        swiper-container {
            padding-top: 50px;
            padding-bottom: 50px;
        }
    }

    swiper-slide {
        transition: transform 0.5s ease, box-shadow 0.5s ease;
        transform-origin: center;
        background-position: center;
        background-size: cover;
        width: 237px;
        height: 133px;
        border-radius: 8px;
        overflow: hidden;
    }

    @media screen and (min-width: 768px) {
        swiper-slide {
            width: 474px;
            height: 267px;
        }
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

<body class="w-full bg-background font-responsive text-pM lg:text-p">
    <x-header />
    <x-breadcrumb-home />

    <div class="relative font-responsive bg-cover bg-center h-[calc(100dvh-126px)]"
        style="background-image: url({{ asset('storage/assets/card-bg-biru.png') }});">
        <div
            class="absolute bottom-0 left-0 right-0 h-[80%] bg-gradient-to-t from-primary100 via-[#05003290] to-transparent">
            <div class="absolute inset-0 flex items-end">
                <div class="text-white pb-10 flex flex-col md:gap-2 px-5 md:px-16 w-full">
                    <span
                        class="label-kategori w-[160px] bg-backgroundred text-secondary70 shadow-sm px-4 py-1.5 rounded-full text-pM lg:text-p text-center mb-2">
                        BERITA TERKINI
                    </span>
                    <h1 class="text-displayM lg:text-display font-bold mb-4 line-clamp-4 md:line-clamp-3">
                        Resmi Dilantik, Gubernur Khofifah dan Wagub Emil Siap Sinergikan Nawa Bhakti Satya dengan Asta
                        Cita
                    </h1>
                    <p class="hidden md:block text-h3M lg:text-h3 line-clamp-3 lg:line-clamp-2">
                        Menteri Komunikasi dan Digital (Menkomdigi), Meutya Hafid, mewakili Presiden
                        Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial
                        Intelligence Action Summit (AIAS) yang berlangsung di Paris, Prancis pada 10–11 Februari 2025.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <section class="bg-primary100 relative pb-2">
        <div class="px-5 md:px-16 pb-4">
            <x-section-header title="Berita " highlight="Terbaru" buttonText="Selengkapnya" buttonVariant="white"
                type="white" buttonHref="{{ route('home.berita') }}" />
        </div>

        <div class="pl-5 md:pl-16">
            <x-card-slider :rows="1">
                <div class="min-w-[300px] md:min-w-[300px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/beritasetda1.jpg') }}"
                        title="Gratis Naik Trans Jatim di Hari Angkutan Nasional 2025, Penumpang Membludak"
                        date="24 April 2025 16:32" category="Berita Terbaru"
                        description="Jatim Newsroom - Suasana di dalam armada Trans Jatim Koridor 1 yang melayani rute Surabaya–Gresik pada siang hari ini tampak berbeda dari biasanya. Jika di luar jam sibuk umumnya bus terlihat lengang, hari ini justru sebaliknya, padat, bahkan dipenuhi penumpang berdiri."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="berita terbaru" />
                </div>
                <div class="min-w-[300px] md:min-w-[300px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/beritasetda2.jpeg') }}"
                        title="Diskominfo Jatim Gelar Rapat Persiapan Resertifikasi ISO 27001:2022"
                        date="22 April 2025 20:44" category="Berita Terbaru"
                        description="Jatim Newsroom - Dinas Komunikasi dan Informatika (Diskominfo) Provinsi Jawa Timur melalui Bidang Persandian dan Keamanan Informasi mengadakan rapat persiapan resertifikasi ISO 27001:2022 pada Selasa (22/4/2025)."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="berita terbaru" />
                </div>
                <div class="min-w-[300px] md:min-w-[300px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/beritasetda3.jpeg') }}"
                        title="Apresiasi Karya Anak Bangsa, Diskominfo Jatim Gelar Nobar Film Jumbo"
                        date="17 April 2025 21:28" category="Berita Terbaru"
                        description="Jatim Newsroom - Sebagai bentuk apresiasi karya anak bangsa khususnya para animator Jawa Timur, Dinas Kominfo Jatim menggelar Nonton Bareng (nobar) Film Animasi JUMBO. Nobar diikuti oleh pengelola dan admin media sosial perangkat daerah di lingkungan Pemprov "
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="berita terbaru" />
                </div>
                <div class="min-w-[300px] md:min-w-[300px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/beritasetda4.jpeg') }}"
                        title="Perkuat Manajemen Isu Publik, Diskominfo Jatim Gandeng Influencer Plat Merah dan Praktisi Media Digital"
                        date="17 April 2025 12:39" category="Berita Terbaru"
                        description="Jatim Newsroom - Sebagai upaya memperkuat diseminasi informasi kebijakan Pemerintah Provinsi Jawa Timur, Dinas Komunikasi dan Informatika Provinsi Jawa Timur menggelar Rapat Koordinasi Manajemen Isu Publik Terkait Konten Kebijakan Pemprov Jatim. Kegiatan ini berlangsung di Kantor Diskominfo Jatim"
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="berita terbaru" />
                </div>
                <div class="min-w-[300px] md:min-w-[300px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/beritasetda5.jpg') }}"
                        title="KOMNAS HAM Belajar Pengelolaan PPID dan Komunikasi Publik ke Jatim"
                        date="16 April 2025 10:18" category="Berita Terbaru"
                        description="Jatim Newsroom - Komisi Nasional Hak Asasi Manusia atau KOMNAS HAM melakukan kunjungan di Dinas Kominfo Provinsi Jawa Timur, Selasa (15/4/2025). Kunjungan dikhususkan untuk forum sharing session layanan PPID dan penyampaian komunikasi publik melalui media sosial."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="berita terbaru" />
                </div>
                <div class="min-w-[300px] md:min-w-[300px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/beritasetda1.jpg') }}"
                        title="Gratis Naik Trans Jatim di Hari Angkutan Nasional 2025, Penumpang Membludak"
                        date="24 April 2025 16:32" category="Berita Terbaru"
                        description="Jatim Newsroom - Suasana di dalam armada Trans Jatim Koridor 1 yang melayani rute Surabaya–Gresik pada siang hari ini tampak berbeda dari biasanya. Jika di luar jam sibuk umumnya bus terlihat lengang, hari ini justru sebaliknya, padat, bahkan dipenuhi penumpang berdiri."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="berita terbaru" />
                </div>
                <div class="min-w-[300px] md:min-w-[300px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/beritasetda2.jpeg') }}"
                        title="Diskominfo Jatim Gelar Rapat Persiapan Resertifikasi ISO 27001:2022"
                        date="22 April 2025 20:44" category="Berita Terbaru"
                        description="Jatim Newsroom - Dinas Komunikasi dan Informatika (Diskominfo) Provinsi Jawa Timur melalui Bidang Persandian dan Keamanan Informasi mengadakan rapat persiapan resertifikasi ISO 27001:2022 pada Selasa (22/4/2025)."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="berita terbaru" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <div class="bg-primary100 pb-8 shadow-lg font-responsive">
        <div class="relative w-full px-4 md:px-[60px]">
            <div class="relative bg-gray10 rounded-xl mx-auto px-4 py-4 md:px-[36px] md:py-[26px]">
                <form action="" method="GET" class="flex flex-col md:flex-row items-start md:items-center gap-4">
                    <div class="justify-center md:justify-start">
                        <label for="keyword" class="font-semibold text-h2M md:text-h2">
                            Eksplorasi <span class="text-primary50">Menu</span>
                        </label>
                    </div>
                    <input type="text" id="keyword" name="keyword" placeholder="Cari Kata Kunci"
                        class="w-full md:flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    <div class="flex flex-row gap-2 w-full md:w-auto">
                        <button type="submit"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md w-full md:w-auto">
                            Telusuri
                        </button>
                        <a href=""
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-center w-full md:w-auto">
                            Atur Ulang
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="py-5 md:py-10 font-responsive">

        <div class="px-5 md:px-16 pb-5">
            <x-section-header title="Video Seputar " highlight="Jawa Timur" buttonText="Selengkapnya"
                buttonVariant="blue" type="blue" buttonHref="{{ route('home.video') }}" />
        </div>

        <div class="px-5 md:px-16 grid grid-cols-1 xl:grid-cols-3 gap-4 lg:ml-0">

            <!-- Kolom kiri: Video utama -->
            <div class="lg:col-span-2 flex flex-col">
                <x-video-container video-id="s18KVkb4rLE"
                    title="INFO JAWA TIMUR MINGGU KE-4 BULAN MARET I 28 MARET 2025"
                    description="INFO JATIM edisi Minggu ke-4 bulan Maret 2025 menyajikan beragam kegiatan di lingkungan Pemprov Jatim dalam sepekan, di antaranya :
                            1. Kominfo berbagi.
                            2. Laporan Pansus pertanggungjawaban Gubernur Jatim tentang anggaran 2024.
                            3. Seminar Pelatihan Kepemimpinan Administrator (PKA) jatim angkatan I 2025.
                            4. Launching Kalender Event Unggulan 2025 di Gedung Negara Grahadi.
                            5. Lailatul Qiroah di Masjid Nasional Al Al-Akbar Surabaya.
                            Demikian beragam informasi dalam sepekan. Semoga informasi tersebut bermanfaat dan mengedukasi." published-at="11 Februari 2025 08:38"
                    category="SETDA / PERANGKAT DAERAH" />
            </div>

            <!-- Kolom kanan: Daftar video lainnya -->
            <div class="flex flex-col">
                <x-card-lainnya title="Video" highlight="Lainnya" class="h-full flex flex-col">
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-2 BULAN FEBRUARI | 14 FEBRUARI 2025"
                        date="14 Februari 2025 18:12" category="UMUM" link="{{ route('home.video.detail') }}"
                        alt="Thumbnail Gambar Terkait" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya3.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-3 BULAN FEBRUARI | 22 FEBRUARI 2025"
                        date="22 Februari 2025 09:26" category="WAKIL GUBERNUR" link="{{ route('home.video.detail') }}"
                        alt="Thumbnail Gambar Terkait" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya2.png') }}"
                        title="Lapor SPT Tahunan Hari Ini, Lebih Awal Lebih Nyaman" date="9 Februari 2025 10:49"
                        category="GUBERNUR" link="{{ route('home.video.detail') }}" alt="Thumbnail Gambar Terkait" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-5 BULAN JANUARI 2025 | 31 Januari" date="1 Februari 2025 15:04"
                        category="SETDA" link="{{ route('home.video.detail') }}" alt="Thumbnail Gambar Terkait" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-5 BULAN JANUARI 2025 | 31 Januari" date="1 Februari 2025 15:04"
                        category="SETDA" link="{{ route('home.video.detail') }}" alt="Thumbnail Gambar Terkait" />
                </x-card-lainnya>
            </div>
        </div>
    </section>

    <section class="bg-primary100 relative">
        <div class="px-5 md:px-16 pt-8 pb-4">
            <x-section-header title="Berita Setda/" highlight="Perangkat Daerah" buttonText="Selengkapnya"
                buttonVariant="white" type="white" buttonHref="{{ route('home.berita') }}" />
        </div>

        <div class="pl-5 md:pl-16 pb-3">
            <x-card-slider :rows="1">
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/gubernur1.jpg') }}"
                        title="Jatim Retreat 2025, Sinergi Kepemimpinan Menuju Gerbang Baru Nusantara"
                        date="26 April 2025 18:29:50" category="Setda / Perangkat daerah"
                        description="atim Newsroom – Gubernur Jawa Timur, Khofifah Indar Parawansa, membuka secara resmi kegiatan Jatim Retreat 2025 yang digelar di Pusat Pendidikan (Pusdik) Arhanud TNI AD Kota Batu pada 26–27 April 2025."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="Berita Setda" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/gubernur2.jpg') }}"
                        title="Gubernur Jatim Dukung Pembentukan BUMD Pangan" date="24 April 2025 20:51:33"
                        category="Setda / Perangkat daerah"
                        description="Jatim Newsroom - Gubernur Jawa Timur, Khofifah Indar Parawansa, menyambut baik dan mendukung rencana atau wacana komisi C DPRD Jatim mendorong Badan Usaha Milik Daerah (BUMD) pangan di Jatim. Hal ini disampaikan Gubernur Khofifah usai paripurna di DPRD Jatim, Kamis (24/4/2025)."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="Berita Setda" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/gubernur3.jpg') }}"
                        title="BPK Serahkan LHP atas LKPD Jawa Timur 2024, Pemprov Jatim Kembali Raih WTP"
                        date="24 April 2025 18:34:36" category="Setda / Perangkat daerah"
                        description="Jatim Newsroom — Badan Pemeriksa Keuangan (BPK) menyerahkan Laporan Hasil Pemeriksaan (LHP) atas Laporan Keuangan Pemerintah Daerah (LKPD) Provinsi Jawa Timur Tahun Anggaran 2024 dalam rapat paripurna yang digelar di Gedung DPRD Jawa Timur, Kamis (24/4/2025)."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="Berita Setda" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/gubernur4.jpg') }}"
                        title="Gubernur Jatim Pimpin Apel Kesiapsiagaan Nasional Damkar, Satpol PP dan Satlinmas 2025 di Sidoarjo"
                        date="17 April 2025 15:55:24" category="Setda / Perangkat daerah"
                        description="Jatim Newsroom - Gubernur Jawa Timur, Khofifah Indar Parawansa, memimpin Apel Kesiapsiagaan Nasional Pemadam Kebakaran (Damkar), Satuan Polisi Pamong Praja (Satpol PP), Satuan Perlindungan Masyarakat (Satlinmas) tingkat provinsi Jawa Timur tahun 2025."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="Berita Setda" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/gubernur5.jpg') }}"
                        title="Gubernur Jatim Minta Bupati-Walikota Proaktif Komunikasi ke Perusahaan Agar Tidak Terjadi PHK"
                        date="10 April 2025 21:10:45" category="Setda / Perangkat daerah"
                        description="Jatim Newsroom - Gubernur Jawa Timur, Khofifah Indar Parawansa, meminta kepada Bupati Walikota, yang wilayahnya memiliki industri atau perusahaan, dan jumlah pekerja yang cukup besar, untuk intens melakukan koordinasi."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="Berita Setda" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class=" relative">
        <div class="px-5 md:px-16 pt-8 pb-4">
            <x-section-header title="Berita " highlight="Gubernur" buttonText="Selengkapnya" buttonVariant="blue"
                type="blue" buttonHref="{{ route('home.berita') }}" />
        </div>

        <div class="pl-5 md:pl-16 pb-3">
            <x-card-slider :rows="1">
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/wagub1.jpg') }}"
                        title="Wagub Emil Dardak Paparkan Konsep Jatim Gerbang Baru Nusantara di Halal Bihalal ASN Pemprov"
                        date="8 April 2025 15:34:15" category="Gubernur"
                        description="Jatim Newsroom - Saat momentum halalbihalal bersama 10.000 Aparatur Sipil Negara (ASN) di lingkungan Pemprov Jatim di Jatim Expo Surabaya, Wakil Gubernur Jawa Timur"
                        link="{{ route('home.berita.detail') }}" type="" alt="Berita Gubernur" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/wagub2.jpeg') }}"
                        title="Wagub Emil Ajak DPD REI Jatim Dorong Pertumbuhan Ekonomi Lewat Multiplier Effect Sektor Properti"
                        date="13 Maret 2025 23:25:09" category="Gubernur"
                        description="Jatim Newsroom - Wakil Gubernur Jawa Timur, Emil Elestianto Dardak, mengajak jajaran Dewan Pengurus Daerah (DPD) Real Estate Indonesia (REI) Jawa Timur untuk turut andil sebagai pengungkit perekonomian Jatim melalui Multiplier Effect dari pengembangan sektor properti. "
                        link="{{ route('home.berita.detail') }}" type="" alt="Berita Gubernur" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/wagub3.jpeg') }}"
                        title="Wagub Emil Komitmen Dorong Pelaku Usaha Menengah Lebih Maju"
                        date="12 Maret 2025 21:32:21" category="Gubernur"
                        description="Jatim Newsroom - Wakil Gubernur Jawa Timur, Emil Elestianto Dardak, menyampaikan komitmennya untuk mendorong para pelaku usaha menengah menjadi lebih maju. Menurutnya, hal ini menunjukkan bahwa pemerintah hadir untuk mendukung para pengusaha yang termasuk dalam kategori menengah."
                        link="{{ route('home.berita.detail') }}" type="" alt="Berita Gubernur" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/wagub4.jpg') }}"
                        title="Wagub Emil : Perguruan Tinggi Jadi Pendorong Kemajuan Ekonomi Syariah di Jatim"
                        date="25 Januari 2024 10:47:34" category="Gubernur"
                        description="Wakil Gubernur Jawa Timur, Emil Elestianto Dardak, saat menjadi pembicara Stadium Generale di Institut Agama Islam Nahdlatul Ulama (IAINU) Kab. Tuban, Rabu (24/1/2024)"
                        link="{{ route('home.berita.detail') }}" type="" alt="Berita Gubernur" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/wagub5.jpg') }}"
                        title="Keluhkan Listrik Dipadamkan. Warga Rusunawa Gunungsari Diterima Wagub Emil"
                        date="12 Januari 2024 13:06:17" category="Gubernur"
                        description="Wakil Gubernur Jawa Timur, Emil Elestianto Dardak saat menerima perwakilan warga rusunawa Gunungsari di lobby DPRD Jatim. (Pca)"
                        link="{{ route('home.berita.detail') }}" type="" alt="Berita Gubernur" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="bg-primary100 relative">
        <div class="px-5 md:px-16 pt-8 pb-4">
            <x-section-header title="Berita Wakil" highlight="Gubernur" buttonText="Selengkapnya"
                buttonVariant="white" type="white" buttonHref="{{ route('home.berita') }}" />
        </div>

        <div class="pl-5 md:pl-16 pb-[14px]">
            <x-card-slider :rows="1">
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/forda1.jpg') }}"
                        title="FORDA II Jatim 2024 Resmi Ditutup, Kota Surabaya Juara Umum"
                        date="4 Desember 2024 23:57:22" category="Wakil Gubernur"
                        description="KORMI Kota Surabaya sebagai Juara Umum pada Festival Olahraga Masyarakat Daerah (FORDA) II Jawa Timur tahun 2024. Foto: Ryan JNR"
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="Berita Wagub" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/forda2.jpg') }}"
                        title="FORDA Jatim II/2024 - Pertandingan Dai Kyokushin Karate Indonesia (DKKI) Sukses Digelar"
                        date="4 Desember 2024 21:16:14" category="Wakil Gubernur"
                        description="Jatim Newsroom – Pertandingan Dai Kyokushin Karate Indonesia menjadi salah satu ajang dalam Festival Olahraga Masyarakat Daerah Provinsi Jawa Timur II Tahun 2024 (FORDA Jatim II/2024), yang dilaksanakan hari ini, 4 Desember 2024, di Gelanggang Remaja Surabaya."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="Berita Wagub" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/forda3.jpeg') }}"
                        title="Induk Olahraga Orienteering pada FORDA II Jatim Umumkan Juara"
                        date="4 Desember 2024 19:37:45" category="Wakil Gubernur"
                        description="Jatim Newsroom - Pertandingan Orienteering dalam ajang Festival Olahraga Masyarakat Daerah (FORDA) II Jawa Timur Tahun 2024 Induk Organisasi Olahraga (Inorga) Federasi Orienteering Nasional Indonesia (FONI) telah berlangsung hingga pengumuman juara di Stadion Gelora Bung Tomo (GBT) Rabu,"
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="Berita Wagub" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/forda4.jpg') }}"
                        title="Surabaya Borong Medali INORGA INATKF Forda II Jatim 2024"
                        date="4 Desember 2024 19:28:18" category="Wakil Gubernur"
                        description="Jatim Newsroom - Pertandingan Induk Organisasi Olahraga (INORGA) Indonesia Tradisional Karate Federation (INATKF) dalam ajang Festival Olahraga Masyarakat Daerah (FORDA) II Jawa Timur 2024 yang berlangsung di Gor Indor Gedung Gelora Bung Tomo (GBT) Surabaya, Rabu (4/12/2024)."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="Berita Wagub" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/forda5.jpg') }}"
                        title="Kabupaten Magetan Raih Emas di FORDA II Jawa Timur 2024"
                        date="3 Desember 2024 17:59:42" category="Wakil Gubernur"
                        description="Jatim Newsroom – Di tengah keterbatasan, Kabupaten Magetan berhasil mencuri perhatian di ajang Inorga Tarung Bebas Indonesia (TBI) FORDA II Jawa Timur 2024. Hanya mengirimkan satu atlet, Magetan mampu membawa pulang medali emas lewat penampilan gemilang Qurratu Ain Khairina di kelas kadet putri 51 kilogram."
                        link="{{ route('home.berita.detail') }}" type="secondary" alt="Berita Wagub" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="bg-gray10 relative">
        <div class="px-5 md:px-16 pt-8 pb-4">
            <x-section-header title="Berita Forda " highlight="Jatim 2024" buttonText="Selengkapnya"
                buttonVariant="blue" type="blue" buttonHref="{{ route('home.berita') }}" />
        </div>

        <div class="pl-5 md:pl-16 pb-3">
            <x-card-slider :rows="1">
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/wagub1.jpg') }}"
                        title="Wagub Emil Dardak Paparkan Konsep Jatim Gerbang Baru Nusantara di Halal Bihalal ASN Pemprov"
                        date="8 April 2025 15:34:15" category="Forda Jatim 2024"
                        description="Jatim Newsroom - Saat momentum halalbihalal bersama 10.000 Aparatur Sipil Negara (ASN) di lingkungan Pemprov Jatim di Jatim Expo Surabaya, Wakil Gubernur Jawa Timur"
                        link="{{ route('home.berita.detail') }}" type="" alt="Berita Forda" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/wagub2.jpeg') }}"
                        title="Wagub Emil Ajak DPD REI Jatim Dorong Pertumbuhan Ekonomi Lewat Multiplier Effect Sektor Properti"
                        date="13 Maret 2025 23:25:09" category="Forda Jatim 2024"
                        description="Jatim Newsroom - Wakil Gubernur Jawa Timur, Emil Elestianto Dardak, mengajak jajaran Dewan Pengurus Daerah (DPD) Real Estate Indonesia (REI) Jawa Timur untuk turut andil sebagai pengungkit perekonomian Jatim melalui Multiplier Effect dari pengembangan sektor properti. "
                        link="{{ route('home.berita.detail') }}" type="" alt="Berita Forda" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/wagub3.jpeg') }}"
                        title="Wagub Emil Komitmen Dorong Pelaku Usaha Menengah Lebih Maju"
                        date="12 Maret 2025 21:32:21" category="Forda Jatim 2024"
                        description="Jatim Newsroom - Wakil Gubernur Jawa Timur, Emil Elestianto Dardak, menyampaikan komitmennya untuk mendorong para pelaku usaha menengah menjadi lebih maju. Menurutnya, hal ini menunjukkan bahwa pemerintah hadir untuk mendukung para pengusaha yang termasuk dalam kategori menengah."
                        link="{{ route('home.berita.detail') }}" type="" alt="Berita Forda" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/wagub4.jpg') }}"
                        title="Wagub Emil : Perguruan Tinggi Jadi Pendorong Kemajuan Ekonomi Syariah di Jatim"
                        date="25 Januari 2024 10:47:34" category="Forda Jatim 2024"
                        description="Wakil Gubernur Jawa Timur, Emil Elestianto Dardak, saat menjadi pembicara Stadium Generale di Institut Agama Islam Nahdlatul Ulama (IAINU) Kab. Tuban, Rabu (24/1/2024)"
                        link="{{ route('home.berita.detail') }}" type="" alt="Berita Forda" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="{{ asset('storage/assets/wagub5.jpg') }}"
                        title="Keluhkan Listrik Dipadamkan. Warga Rusunawa Gunungsari Diterima Wagub Emil"
                        date="12 Januari 2024 13:06:17" category="Forda Jatim 2024"
                        description="Wakil Gubernur Jawa Timur, Emil Elestianto Dardak saat menerima perwakilan warga rusunawa Gunungsari di lobby DPRD Jatim. (Pca)"
                        link="{{ route('home.berita.detail') }}" type="" alt="Berita Forda" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <section class="bg-gray10 font-responsive">
        <div class="px-5 md:px-16 pt-8 pb-4">
            <x-section-header title="Galeri " highlight="Foto" buttonText="Selengkapnya" buttonVariant="blue"
                type="blue" buttonHref="{{ route('home.galerifoto') }}" />
        </div>
        <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true"
            centered-slides="true" slides-per-view="auto" initial-slide="1" space-between="20"
            coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
            coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" loop="true">

            <swiper-slide class="relative group rounded-lg md:rounded-xl overflow-hidden transition-all duration-500">
                <a href="{{ route('home.galerifoto.detail') }}">
                    <img src="{{ asset('storage/assets/galeri1.jpeg') }}" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-70 transition-opacity duration-500"
                        style="background: linear-gradient(180deg, rgba(30,22,91,0.5) 22%, rgba(45,33,136,0.7) 30%, rgba(0,0,0,1) 78%);">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-2 md:p-4 flex flex-col justify-end text-white z-10">
                        <div class="flex items-center justify-between mb-1 md:mb-2 gap-2 flex-wrap">
                            <x-label-kategori text="Olahraga" />
                            <p class="text-[10px] md:text-p font-medium whitespace-nowrap">
                                1 April 2025 22:16:48
                            </p>
                        </div>

                        <h3 class="text-[13px] md:text-h3 font-bold leading-tight mb-1 md:mb-2 line-clamp-2">
                            Mandiri U20 Challenge Series 2025
                        </h3>

                        <p class="text-[11px] md:text-p hidden md:block font-medium line-clamp-2">
                            Indonesia U20 vs Suriah U20 pada pertandingan Mandiri U20 Challenge Series 2025, Senin,
                            27/1/2025. di Stadion Gelora Delta Sidoarjo
                        </p>

                        <span class="mt-1 text-[11px] md:text-p text-gray10 font-bold underline">
                            Selengkapnya
                        </span>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide class="relative group rounded-lg md:rounded-xl overflow-hidden transition-all duration-500">
                <a href="home.galerifoto.detail">
                    <img src="{{ asset('storage/assets/galeri2.jpg') }}" alt="slider satu"
                        class="w-full h-full object-cover" />
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-70 transition-opacity duration-500"
                        style="background: linear-gradient(180deg, rgba(30,22,91,0.5) 22%, rgba(45,33,136,0.7) 30%, rgba(0,0,0,1) 78%);">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-2 md:p-4 flex flex-col justify-end text-white z-10">
                        <div class="flex items-center justify-between mb-1 md:mb-2 gap-2 flex-wrap">
                            <x-label-kategori text="PON XXI ACEH-SUMUT 2024" />
                            <p class="text-[10px] md:text-p font-medium whitespace-nowrap">
                                17 Oktober 2024 20:49:12
                            </p>
                        </div>
                        <p class="text-[13px] md:text-h3 font-bold leading-tight mb-1 md:mb-2 line-clamp-2">
                            PON XXI Aceh–Sumut 2024
                        </p>
                        <p class="text-[11px] md:text-p hidden md:block font-medium line-clamp-2">
                            Cabang Olahraga Sepak Bola Putra Jawa Timur
                        </p>
                        <span class="mt-1 text-[11px] md:text-p text-gray10 font-bold underline">Selengkapnya</span>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide class="relative group rounded-lg md:rounded-xl overflow-hidden transition-all duration-500">
                <a href="home.galerifoto.detail">
                    <img src="{{ asset('storage/assets/galeri3.jpg') }}" alt="slider dua"
                        class="w-full h-full object-cover" />
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-70 transition-opacity duration-500"
                        style="background: linear-gradient(180deg, rgba(30,22,91,0.5) 22%, rgba(45,33,136,0.7) 30%, rgba(0,0,0,1) 78%);">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-2 md:p-4 flex flex-col justify-end text-white z-10">
                        <div class="flex items-center justify-between mb-1 md:mb-2 gap-2 flex-wrap">
                            <x-label-kategori text="PON XXI ACEH-SUMUT 2024" />
                            <p class="text-[10px] md:text-p font-medium whitespace-nowrap">
                                17 Oktober 2024 20:48:13
                            </p>
                        </div>
                        <p class="text-[13px] md:text-h3 font-bold leading-tight mb-1 md:mb-2 line-clamp-2">
                            PON XXI Aceh-Sumut 2024
                        </p>
                        <p class="text-[11px] md:text-p hidden md:block font-medium line-clamp-2">
                            Sepatu Roda Beregu Putra
                        </p>
                        <span class="mt-1 text-[11px] md:text-p text-gray10 font-bold underline">Selengkapnya</span>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide class="relative group rounded-lg md:rounded-xl overflow-hidden transition-all duration-500">
                <a href="home.galerifoto.detail">
                    <img src="{{ asset('storage/assets/galeri4.jpeg') }}" alt="slider tiga"
                        class="w-full h-full object-cover" />
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-70 transition-opacity duration-500"
                        style="background: linear-gradient(180deg, rgba(30,22,91,0.5) 22%, rgba(45,33,136,0.7) 30%, rgba(0,0,0,1) 78%);">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-2 md:p-4 flex flex-col justify-end text-white z-10">
                        <div class="flex items-center justify-between mb-1 md:mb-2 gap-2 flex-wrap">
                            <x-label-kategori text="PON XXI ACEH-SUMUT 2024" />
                            <p class="text-[10px] md:text-p font-medium whitespace-nowrap">
                                17 Oktober 2024 16:41:58
                            </p>
                        </div>
                        <p class="text-[13px] md:text-h3 font-bold leading-tight mb-1 md:mb-2 line-clamp-2">
                            PON XXI Aceh-Sumut 2024
                        </p>
                        <p class="text-[11px] md:text-p hidden md:block font-medium line-clamp-2">
                            Cabang Olahraga Tenis Lapangan Beregu Putra Jawa Timur
                        </p>
                        <span class="mt-1 text-[11px] md:text-p text-gray10 font-bold underline">Selengkapnya</span>
                    </div>
                </a>
            </swiper-slide>

            <swiper-slide class="relative group rounded-lg md:rounded-xl overflow-hidden transition-all duration-500">
                <a href="home.galerifoto.detail">
<<<<<<< HEAD
                    <img src="{{ asset('storage/assets/galeri4.jpeg') }}" alt="slider tiga"
                        class="w-full h-full object-cover" />
=======
                    <img src="{{ asset('storage/assets/galeri5.jpg') }}" alt="slider empat"
                        class="w-full h-full object-cover" />

>>>>>>> 4d25d539dce1b6f618d2f78c72705ac6528162d2
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-70 transition-opacity duration-500"
                        style="background: linear-gradient(180deg, rgba(30,22,91,0.5) 22%, rgba(45,33,136,0.7) 30%, rgba(0,0,0,1) 78%);">
                    </div>
                    <div
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-2 md:p-4 flex flex-col justify-end text-white z-10">
                        <div class="flex items-center justify-between mb-1 md:mb-2 gap-2 flex-wrap">
                            <x-label-kategori text="PON XXI ACEH-SUMUT 2024" />
                            <p class="text-[10px] md:text-p font-medium whitespace-nowrap">
                                17 Oktober 2024 16:41:58
                            </p>
                        </div>
                        <p class="text-[13px] md:text-h3 font-bold leading-tight mb-1 md:mb-2 line-clamp-2">
                            PON XXI Aceh-Sumut 2024
                        </p>
                        <p class="text-[11px] md:text-p hidden md:block font-medium line-clamp-2">
                            Cabang Olahraga Tenis Lapangan Beregu Putra Jawa Timur
                        </p>
                        <span class="mt-1 text-[11px] md:text-p text-gray10 font-bold underline">Selengkapnya</span>
                    </div>
                </a>
            </swiper-slide>
        </swiper-container>
    </section>

    <section class="bg-primary100 relative">
        <div class="">

            <div class="px-5 md:px-16 pt-8 pb-4">
                <x-section-header title="Majalah " highlight="" buttonText="Selengkapnya" buttonVariant="white"
                    type="white" buttonHref="{{ route('home.majalah') }}" />
            </div>

            <div class="pl-5 md:pl-16 pb-3">
                <x-card-slider :row="1">
                    <div>
                        <x-card-majalah-home image="{{ asset('storage/assets/majalah1.jpg') }}"
                            title="MAJALAH POTENSI JAWA TIMUR EDISI 156 JANUARI - FEBRUARI 2025"
                            date="19 Februari 2025 0:00:00" link="{{ route('home.majalah.detail') }}"
                            alt="Thumbnail Gambar Terkait" />
                    </div>
                    <div>
                        <x-card-majalah-home image="{{ asset('storage/assets/majalah2.jpeg') }}"
                            title="MAJALAH POTENSI EDISI 155 AGUSTUS 2024" date="1 Agustus 2024 0:00:00"
                            link="{{ route('home.majalah.detail') }}" alt="Thumbnail Gambar Terkait" />
                    </div>
                    <div>
                        <x-card-majalah-home image="{{ asset('storage/assets/majalah3.jpg') }}"
                            title="MAJALAH POTENSI EDISI 153 JUNI 2024" date="1 Juni 2024 0:00:00 "
                            link="{{ route('home.majalah.detail') }}" alt="Thumbnail Gambar Terkait" />
                    </div>
                    <div>
                        <x-card-majalah-home image="{{ asset('storage/assets/majalah4.jpg') }}"
                            title="MAJALAH POTENSI EDISI 152 MEI 2024" date="1 Mei 2024 0:00:00"
                            link="{{ route('home.majalah.detail') }}" alt="Thumbnail Gambar Terkait" />
                    </div>
                    <div>
                        <x-card-majalah-home image="{{ asset('storage/assets/majalah5.jpg') }}"
                            title="MAJALAH POTENSI EDISI 155 APRIL 2024" date="31 Maret 2024 0:00:00"
                            link="{{ route('home.majalah.detail') }}" alt="Thumbnail Gambar Terkait" />
                    </div>
                    <div>
                        <x-card-majalah-home image="{{ asset('storage/assets/majalah1.jpg') }}"
                            title="MAJALAH POTENSI JAWA TIMUR EDISI 156 JANUARI - FEBRUARI 2025"
                            date="19 Februari 2025 0:00:00" link="{{ route('home.majalah.detail') }}"
                            alt="Thumbnail Gambar Terkait" />
                    </div>
                    <div>
                        <x-card-majalah-home image="{{ asset('storage/assets/majalah2.jpeg') }}"
                            title="MAJALAH POTENSI EDISI 155 AGUSTUS 2024" date="1 Agustus 2024 0:00:00"
                            link="{{ route('home.majalah.detail') }}" alt="Thumbnail Gambar Terkait" />
                    </div>
                </x-card-slider>
            </div>
        </div>
    </section>

    <section class="mb-4">
        <div class="min-h-screen pt-[45px] px-[66px] font-responsive">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-7xl mx-auto">

                {{-- KIRI - Artikel --}}
                <div class="bg-gray10 p-[20px] rounded-xl shadow-md">
                    <div class="text-center text-h2M md:text-h2 font-bold mb-[16px]">
                        <p>Artikel <span class="text-primary50">Lainnya</span></p>
                    </div>
                    <div class="bg-primary100 text-gray10 rounded-lg overflow-y-auto h-[400px]">

                    </div>
                </div>

                {{-- KANAN - Survey Pengunjung --}}
                <div class="bg-gray10 p-[20px] rounded-xl shadow-md">
                    <div class="text-center text-h2M md:text-h2 font-bold mb-[16px]">
                        <p>Survey <span class="text-primary50">Pengunjung</span></p>
                    </div>
                    <p class="text-pM md:text-p font-medium text-gray70 mb-[16px] text-justify">Lorem ipsum dolor sit
                        amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>
                    <div class="flex justify-center">
                        <button
                            class="bg-gray10 border border-gray90 px-[16px] py-[8px] rounded-full flex items-center gap-[8px] text-pM md:text-p font-bold hover:bg-gray-100 transition mb-4">
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
