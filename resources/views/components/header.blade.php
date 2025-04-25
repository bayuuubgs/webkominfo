<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!DOCTYPE html>
<html lang="id">

@php
    $active = 'rounded-lg px-3 py-2 text-sm font-jakarta font-medium text-white drop-shadow-2xl';
    $inactive = 'rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out';
    $programRoutes = ['program-a', 'program-b'];
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Responsif</title>
</head>

<body class="bg-white">
    <nav class="bg-primary100">
        <div class="relative flex h-16 mx-auto px-16 py-9 space-x-5 items-center justify-between w-full">

            <!-- Logo Kominfo -->
            <div class="flex items-center">
                <img class="h-8 w-auto" src="/storage/assets/logo-diskominfo.png" alt="Logo Diskominfo">
            </div>

            <!-- Menu Button for Mobile -->
            <div class="xl:hidden">
                <button id="menu-btn" class="text-white focus:outline-none">
                    <img class="h-8 w-auto brightness-50 transition duration-200 ease-out hover:brightness-100"
                        src="/storage/assets/mobile-menu.png" alt="Mobile Menu">
                </button>
            </div>

            <!-- Menu Items & Icons -->
            <div class="hidden lg:flex flex-1 justify-center items-center space-x-3" id="menu">

                <a href="{{ route('home.index') }}"
                    class="{{ request()->routeIs('home.index') ? $active : $inactive }}">
                    HOME
                </a>

                <a href="{{ route('home.profil') }}"
                    class="{{ request()->routeIs('home.profil') ? $active : $inactive }}">
                    PROFIL
                </a>

                <!-- PROGRAM -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="{{ request()->is('program-a') || request()->is('program-b') ? $active : $inactive }} flex items-center space-x-1 rounded-md px-3 py-2 font-jakarta text-p font-medium group">
                        <span>PROGRAM</span>
                        <img src="/storage/assets/dropdown.png" alt="Dropdown"
                            class="w-4 h-4 brightness-50 transition duration-200 ease-out group-hover:brightness-100">
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-1/2 z-10 flex w-screen max-w-max  px-4 transition duration-200 ease-out">
                        <x-flyoutmenu :menuItems="[
                            [
                                'title' => 'Rencana Strategis',
                                'desc' => 'Renstra DISKOMINFO Jatim per-periode',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Rencana Strategis',
                                        'desc' => '2014 -2019',
                                        'link' => '/home/customPDF',
                                    ],
                                    [
                                        'title' => 'Rencana Strategis',
                                        'desc' => '2019 -2024',
                                        'link' => '/home/customPDF',
                                    ],
                                    [
                                        'title' => 'Rencana Strategis',
                                        'desc' => '2024 -2025',
                                        'link' => '/home/customPDF',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Indikator Kerja Utama',
                                'desc' => 'IKU DISKOMINFO Jatim tahun ini',
                                'link' => '',
                            ],
                            [
                                'title' => 'Perjanjian Kinerja',
                                'desc' => 'Perkin Kepala DISKOMINFO Jatim per-tahun',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Perjanjian Kinerja',
                                        'desc' => 'Tahun 2022',
                                        'link' => 'home/profil',
                                    ],
                                    [
                                        'title' => 'Perjanjian Kinerja Perubahan',
                                        'desc' => 'Tahun 2023',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Perjanjian Kinerja',
                                        'desc' => 'Tahun 2024',
                                        'link' => '',
                                    ],
                                ],

                            ],
                            [
                                'title' => 'Rencana Anggaran',
                                'desc' => 'Rincian APBD DISKOMINFO Jatim per-tahun',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Rencana APBD',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                ],

                            ],
                        ]" />
                    </div>
                </div>

                <!-- LAPORAN -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="flex items-center space-x-1 rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out group">
                        <span>LAPORAN</span>
                        <img src="/storage/assets/dropdown.png" alt="Dropdown"
                            class="w-4 h-4 brightness-50 transition duration-200 ease-out group-hover:brightness-100">
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-1/2 z-10 flex w-screen max-w-max  px-4 transition duration-200 ease-out">
                        <x-flyoutmenu :menuItems="[
                            [
                                'title' => 'LAKIP',
                                'desc' => 'Laporan Kinerja Instansi Pemerintah',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'LAKIP',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LAKIP',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LAKIP',
                                        'desc' => 'Tahun 2022',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LAKIP',
                                        'desc' => 'Tahun 2023',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LAKIP',
                                        'desc' => 'Tahun 2024',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'NERACA',
                                'desc' => 'Neraca DISKOMINFO Jatim per-tahun',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'NERACA',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'NERACA',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'LRA',
                                'desc' => 'Laporan Realisasi Anggaran per-tahun',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'LRA',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LRA',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan LRA',
                                        'desc' => 'Tahun 2022',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'RLPPD 2024',
                                        'desc' => 'Ringkasan Laporan Penyelenggaraan Pemda Jatim Tahun 2024',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'ASET',
                                'desc' => 'Rekapitulasi Aset DISKOMINFO Jatim',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Rekapitulasi Aset',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Laporan Arus Kas',
                                'desc' => 'Rekapitulasi Aset DISKOMINFO Jatim',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Laporan Arus Kas',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Ringkasan DPA',
                                'desc' => 'Dokumen Pelaksanaan Anggrana per-tahun',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Ringkasan DPA',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan DPPA',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan DPA',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan DPA',
                                        'desc' => 'Tahun 2023',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Ringkasan RKA',
                                'desc' => 'Dokumen Rencana Kerja dan Anggaran',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Ringkasan RKA',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan RKPA',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan RKA',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan RKA',
                                        'desc' => 'Tahun 2023',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan RKPA',
                                        'desc' => 'Tahun 2023',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan RKA',
                                        'desc' => 'Tahun 2024',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Ringkasan LRA',
                                'desc' => 'Ringkasan Laporan Realisasi Anggaran',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Ringkasan LRA',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan LRA',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LRA',
                                        'desc' => 'Tahun 2022',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Laporan Keuangan Terbaru',
                                'desc' => 'Laporan Keuangan DISKOMINFO JATIM terbaru',
                                'link' => '',
                            ],
                        ]" />
                    </div>
                </div>

                <!-- LAYANAN -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="flex items-center space-x-1 rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out group">
                        <span>LAYANAN</span>
                        <img src="/storage/assets/dropdown.png" alt="Dropdown"
                            class="w-4 h-4 brightness-50 transition duration-200 ease-out group-hover:brightness-100">
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-1/2 z-10 flex w-screen max-w-max  px-4 transition duration-200 ease-out">
                        <x-flyoutmenu :menuItems="[
                            [
                                'title' => 'Layanan Informasi',
                                'desc' => 'Layanan Informasi Seputar DISKOMINFO JATIM',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Prosedur Permohonan Informasi',
                                        'desc' => 'Prosedur Permohonan Informasi',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Pendaftaran PSE Lingkup Publik',
                                'desc' => 'Daftar PSE Lingkup Publik di sini',
                                'link' => '/home/customteks',
                            ],
                            [
                                'title' => 'Dasbor BPJS TK',
                                'desc' => 'Dasbor BPJS Tenaga Kerja',
                                'link' => 'https://lookerstudio.google.com/reporting/9a445f15-09cf-42bb-8792-61b1bdd85ccb/page/p_k42d72ajnd',
                            ],
                            [
                                'title' => 'SATA',
                                'desc' => 'Menu Satu Data',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'SATA JATIM',
                                        'desc' => 'Satuan Data Jawa Timur',
                                        'link' => 'https://sata.jatimprov.go.id/login',
                                    ],
                                    [
                                        'title' => 'SATA AWARD',
                                        'desc' => 'Satuan Data Penghargaan',
                                        'link' => 'https://sata.jatimprov.go.id/award',
                                    ],
                                    [
                                        'title' => 'OPEN DATA',
                                        'desc' => 'Open Data',
                                        'link' => 'https://opendata.jatimprov.go.id/',
                                    ],
                                    [
                                        'title' => 'Panduan SATA',
                                        'desc' => 'Panduan Satuan Data',
                                        'link' => 'https://drive.jatimprov.go.id/index.php/s/n94wwixcHXLNyyW',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Klinik HOAKS',
                                'desc' => 'Cek Hoaks di Sekitarmu',
                                'link' => 'https://klinikhoaks.jatimprov.go.id/',
                            ],
                            [
                                'title' => 'Pendaftaran Aplikasi',
                                'desc' => 'Pelajari mengenai APPS',
                                'icon' => '',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Akses APPS',
                                        'desc' => 'Akses APPS DISKOMINFO Jatim',
                                        'link' => 'https://apps.jatimprov.go.id/login',
                                    ],
                                    [
                                        'title' => 'Pedoman Pengisian APPS',
                                        'desc' => 'Akses APPS DISKOMINFO Jatim',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Penetapan Standar Pelayanan',
                                'desc' => 'Penetapan Standar Pelayanan DISKOMINFO Jatim',
                                'link' => '',
                            ],
                            [
                                'title' => 'Maklumat Pelayanan',
                                'desc' => 'Maklumat Pelayanan DISKOMINFO Jatim',
                                'link' => '',
                            ],
                        ]" />
                    </div>
                </div>

                <!-- REGULASI -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="flex items-center space-x-1 rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out group">
                        <span>REGULASI</span>
                        <img src="/storage/assets/dropdown.png" alt="Dropdown"
                            class="w-4 h-4 brightness-50 transition duration-200 ease-out group-hover:brightness-100">
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-1/2 z-10 flex w-screen max-w-max  px-4 transition duration-200 ease-out">
                        <x-flyoutmenu :menuItems="[
                            [
                                'title' => 'Undang-Undang',
                                'desc' => 'Undang-Undang Replublik Indonesia',
                                'link' => '/home/regulasi',
                            ],
                            [
                                'title' => 'Peraturan Pemerintah',
                                'desc' => 'Peraturan Pemerintah Republik Indonesia',
                                'link' => '',
                            ],
                            [
                                'title' => 'Instruksi Presiden',
                                'desc' => 'Instruksi Presiden Republik Indonesia',
                                'link' => '',
                            ],
                            [
                                'title' => 'Peraturan Menteri',
                                'desc' => 'Peraturan Menteri Komunikasi dan Informatika',
                                'link' => '',
                            ],
                            [
                                'title' => 'Peraturan Gubernur',
                                'desc' => 'Peraturan Gubernur Jawa Timur',
                                'link' => '',
                            ],
                        ]" />
                    </div>
                </div>

                <a href="https://ppid.kominfo.jatimprov.go.id/"
                    class="{{ request()->is('ppid') ? $active : $inactive }}">
                    PPID
                </a>

                <!-- PUBLIKASI -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="{{ request()->is('home/berita') || request()->is('home/galerifoto') || request()->is('home/video') || request()->is('home/download') || request()->is('home/majalah') ? $active : $inactive }} flex items-center space-x-1 rounded-md px-3 py-2 font-jakarta text-p font-medium group">
                        <span>PUBLIKASI</span>
                        <img src="/storage/assets/dropdown.png" alt="Dropdown"
                        class="w-4 h-4 transition duration-200 ease-out
                        {{ request()->is('home/berita') || request()->is('home/galerifoto') || request()->is('home/video') || request()->is('home/download') || request()->is('home/majalah')
                            ? 'brightness-100'
                            : 'brightness-50 group-hover:brightness-100' }}">
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-1/2 z-10 flex w-screen max-w-max  px-4 transition duration-200 ease-out">
                        <x-flyoutmenu :menuItems="[
                            [
                                'title' => 'Berita',
                                'link' => '/home/berita',
                                'desc' => 'Jelajahi berita seputar Jawa Timur',
                                'icon' => 'heroicon-o-newspaper',
                            ],
                            [
                                'title' => 'Galeri Foto',
                                'link' => '/home/galerifoto',
                                'desc' => 'Jelajahi galeri foto agenda seputar Jawa Timur',
                                'icon' => 'heroicon-o-photo',
                            ],
                            [
                                'title' => 'Video',
                                'link' => '/home/video',
                                'desc' => 'Jelajahi video terkait Jawa Timur',
                                'icon' => 'heroicon-o-play',
                            ],
                            [
                                'title' => 'Download',
                                'link' => '/home/download',
                                'desc' => 'Cari e-document seputar Jawa Timur',
                                'icon' => 'heroicon-o-arrow-down-tray',
                            ],
                            [
                                'title' => 'Majalah',
                                'link' => '/home/majalah',
                                'desc' => 'Jelajahi majalah-majalah seputar Jawa Timur',
                                'icon' => 'heroicon-o-book-open',
                            ],
                        ]" />
                    </div>
                </div>

                <a href="https://seleksikpid.jatimprov.go.id/"
                    class="{{ request()->is('seleksikpid') ? $active : $inactive }}">
                    SELEKSI KPID
                </a>

            </div>

            <!-- Icons -->
            <div class="hidden lg:flex items-center space-x-9" id="icons">
                <a href="#"><img
                        class="w-5 filter brightness-50 hover:brightness-100 hover:drop-shadow-xl transition duration-50 ease-out"
                        src="/storage/assets/search.png" alt="Search"></a>
                <a href="#"><img
                        class="w-5 filter brightness-50 hover:brightness-100 hover:drop-shadow-xl transition duration-50 ease-out"
                        src="/storage/assets/youtube.png" alt="YouTube"></a>
                <a href="#"><img
                        class="w-5 filter brightness-50 hover:brightness-100 hover:drop-shadow-xl transition duration-50 ease-out"
                        src="/storage/assets/instagram.png" alt="Instagram"></a>
                <a href="#"><img
                        class="w-4 filter brightness-50 hover:brightness-100 hover:drop-shadow-xl transition duration-50 ease-out"
                        src="/storage/assets/x.png" alt="X"></a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden flex flex-col items-start bg-primary100 py-4 space-y-2">
            <a href="#" class="rounded-lg px-3 py-2 text-sm font-jakarta font-medium text-white drop-shadow-2xl"
                aria-current="page">HOME</a>
            <a href="#"
                class="rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out">PROFIL</a>
            <a href="#"
                class="flex items-center space-x-1 rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 transition duration-200 ease-out hover:text-white group">
                <span>PROGRAM</span>
                <img src="/storage/assets/dropdown.png" alt="Dropdown"
                    class="w-4 h-4 brightness-50 transition duration-200 ease-out group-hover:brightness-100">
            </a>
            <a href="#"
                class="flex items-center space-x-1 rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 transition duration-200 ease-out hover:text-white group">
                <span>LAPORAN</span>
                <img src="/storage/assets/dropdown.png" alt="Dropdown"
                    class="w-4 h-4 brightness-50 transition duration-200 ease-out group-hover:brightness-100">
            </a>
            <a href="#"
                class="flex items-center space-x-1 rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 transition duration-200 ease-out hover:text-white group">
                <span>LAYANAN</span>
                <img src="/storage/assets/dropdown.png" alt="Dropdown"
                    class="w-4 h-4 brightness-50 transition duration-200 ease-out group-hover:brightness-100">
            </a>
            <a href="#"
                class="rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out">REGULASI</a>
            <a href="#"
                class="rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out">PPID</a>
            <a href="#"
                class="flex items-center space-x-1 rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 transition duration-200 ease-out hover:text-white group">
                <span>PUBLIKASI</span>
                <img src="/storage/assets/dropdown.png" alt="Dropdown"
                    class="w-4 h-4 brightness-50 transition duration-200 ease-out group-hover:brightness-100">
            </a>
            <a href="#"
                class="rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out">SELEKSI</a>
        </div>
    </nav>

    <script>
        document.getElementById('menu-btn').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>
