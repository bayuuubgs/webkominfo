<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<!DOCTYPE html>
<html lang="id">

@php
    $active = 'rounded-lg font-responsive px-3 py-2 text-pM text-white drop-shadow-2xl transition duration-200 ease-out';
    $inactive = 'rounded-lg font-responsive px-3 py-2 text-pM text-gray50 hover:text-white hover:drop-shadow-2xl transition duration-200 ease-out';
    $programRoutes = ['program-a', 'program-b'];
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Responsif</title>
</head>

<body class="bg-white">

    <nav x-data="{ openSidebar: false }" class="bg-primary100">

    <div class="relative flex h-16 mx-auto pr-5 md:pl-12 md:pr-16 py-9 space-x-5 items-center justify-between w-full">

            <div class="absolute top-0 left-0 w-full bg-gradient-to-b from-gray90/10 to-transparent pointer-events-none z-10"></div>
            <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-gray90/10 to-transparent pointer-events-none z-10"></div>

            <!-- Logo Kominfo -->
            <div class="flex items-center">
                <img class="h-8 w-auto" src="/storage/assets/logo-diskominfo.png" alt="Logo Diskominfo">
            </div>

            <!-- Menu Button for Mobile -->
            <div class="lg:hidden">
                <button @click="openSidebar = true" class="focus:outline-none">
                    <x-heroicon-o-bars-3 class="h-8 w-auto text-white brightness-50 transition duration-200 ease-out hover:brightness-100" />
                </button>
            </div>

            <!-- Menu Items & Icons -->
            <div class="hidden lg:flex items-center space-x-2" id="menu">

                <!-- HOME -->    
                <a href="{{ route('home.index') }}"
                    class="{{ request()->routeIs('home.index') ? $active : $inactive }}">
                    HOME
                </a>

                <!-- PROFIL -->   
                <a href="{{ route('home.profil') }}"
                    class="{{ request()->routeIs('home.profil') ? $active : $inactive }}">
                    PROFIL
                </a>

                <!-- PROGRAM -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        :class="open ? '{{ request()->is("home/customPDF") ? $active : $inactive }}' : '{{ request()->is("home/customPDF") ? $active : $inactive }}'"
                        class="flex items-center space-x-2 group">

                        <span class="text-current">PROGRAM</span>

                        <img src="/storage/assets/dropdown.png" alt="Dropdown"
                            class="w-[12px] transition-all duration-300"
                            :class="{
                                'rotate-180 brightness-100': open || '',
                                'rotate-0 brightness-50 group-hover:brightness-100': !(open || '')
                            }">
                    </button>

                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-1/2 z-10 flex w-screen max-w-max  px-4 transition duration-200 ease-out">
                        <x-header-flyoutmenu :menuItems="[
                            [
                                'title' => 'Rencana Strategis',
                                'desc' => 'Renstra DISKOMINFO Jatim per-periode',
                                'icon' => 'heroicon-o-document-chart-bar',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Rencana Strategis',
                                        'icon' => 'heroicon-o-document-chart-bar',
                                        'desc' => '2014 -2019',
                                        'link' => '/home/customPDF',
                                    ],
                                    [
                                        'title' => 'Rencana Strategis',
                                        'icon' => 'heroicon-o-document-chart-bar',
                                        'desc' => '2019 -2024',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Rencana Strategis',
                                        'icon' => 'heroicon-o-document-chart-bar',
                                        'desc' => '2024 -2025',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Indikator Kerja Utama',
                                'icon' => 'heroicon-o-chart-bar',
                                'desc' => 'IKU DISKOMINFO Jatim tahun ini',
                                'link' => '',
                            ],
                            [
                                'title' => 'Perjanjian Kinerja',
                                'desc' => 'Perkin Kepala DISKOMINFO Jatim per-tahun',
                                'icon' => 'heroicon-o-clipboard-document-check',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Perjanjian Kinerja',
                                        'icon' => 'heroicon-o-clipboard-document-check',
                                        'desc' => 'Tahun 2022',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Perjanjian Kinerja Perubahan',
                                        'icon' => 'heroicon-o-clipboard-document-check',
                                        'desc' => 'Tahun 2023',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Perjanjian Kinerja',
                                        'icon' => 'heroicon-o-clipboard-document-check',
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
                        :class="open ? '{{ request()->is('') ? $active : $inactive }}' : '{{ request()->is('') ? $active : $inactive }}'"
                        class="flex items-center space-x-2 group">

                        <span class="text-current">LAPORAN</span>

                        <img src="/storage/assets/dropdown.png" alt="Dropdown"
                            class="w-[12px] transition-all duration-300"
                            :class="{
                                'rotate-180 brightness-100': open || '',
                                'rotate-0 brightness-50 group-hover:brightness-100': !(open || '')
                            }">
                    </button>

                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-1/2 z-10 flex w-screen max-w-max  px-4 transition duration-200 ease-out">
                        <x-header-flyoutmenu :menuItems="[
                            [
                                'title' => 'LAKIP',
                                'desc' => 'Laporan Kinerja Instansi Pemerintah',
                                'icon' => 'heroicon-o-document-text',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'LAKIP',
                                        'icon' => 'heroicon-o-document-text',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LAKIP',
                                        'icon' => 'heroicon-o-document-text',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LAKIP',
                                        'icon' => 'heroicon-o-document-text',
                                        'desc' => 'Tahun 2022',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LAKIP',
                                        'icon' => 'heroicon-o-document-text',
                                        'desc' => 'Tahun 2023',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LAKIP',
                                        'icon' => 'heroicon-o-document-text',
                                        'desc' => 'Tahun 2024',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'NERACA',
                                'desc' => 'Neraca DISKOMINFO Jatim per-tahun',
                                'icon' => 'heroicon-o-chart-pie',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'NERACA',
                                        'icon' => 'heroicon-o-chart-pie',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'NERACA',
                                        'icon' => 'heroicon-o-chart-pie',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'LRA',
                                'desc' => 'Laporan Realisasi Anggaran per-tahun',
                                'icon' => 'heroicon-o-banknotes',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'LRA',
                                        'icon' => 'heroicon-o-banknotes',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LRA',
                                        'icon' => 'heroicon-o-banknotes',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan LRA',
                                        'icon' => 'heroicon-o-banknotes',
                                        'desc' => 'Tahun 2022',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'RLPPD 2024',
                                        'icon' => 'heroicon-o-banknotes',
                                        'desc' => 'Ringkasan Laporan Penyelenggaraan Pemda Jatim Tahun 2024',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'ASET',
                                'desc' => 'Rekapitulasi Aset DISKOMINFO Jatim',
                                'icon' => 'heroicon-o-archive-box',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Rekapitulasi Aset',
                                        'icon' => 'heroicon-o-archive-box',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Laporan Arus Kas',
                                'desc' => 'Rekapitulasi Aset DISKOMINFO Jatim',
                                'icon' => 'heroicon-o-currency-dollar',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Laporan Arus Kas',
                                        'icon' => 'heroicon-o-currency-dollar',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Ringkasan DPA',
                                'desc' => 'Dokumen Pelaksanaan Anggrana per-tahun',
                                'icon' => 'heroicon-o-clipboard-document',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Ringkasan DPA',
                                        'icon' => 'heroicon-o-clipboard-document',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan DPPA',
                                        'icon' => 'heroicon-o-clipboard-document',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan DPA',
                                        'icon' => 'heroicon-o-clipboard-document',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan DPA',
                                        'icon' => 'heroicon-o-clipboard-document',
                                        'desc' => 'Tahun 2023',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Ringkasan RKA',
                                'desc' => 'Dokumen Rencana Kerja dan Anggaran',
                                'icon' => 'heroicon-o-clipboard-document-check',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Ringkasan RKA',
                                        'icon' => 'heroicon-o-clipboard-document-check',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan RKPA',
                                        'icon' => 'heroicon-o-clipboard-document-check',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan RKA',
                                        'icon' => 'heroicon-o-clipboard-document-check',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan RKA',
                                        'icon' => 'heroicon-o-clipboard-document-check',
                                        'desc' => 'Tahun 2023',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan RKPA',
                                        'icon' => 'heroicon-o-clipboard-document-check',
                                        'desc' => 'Tahun 2023',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan RKA',
                                        'icon' => 'heroicon-o-clipboard-document-check',
                                        'desc' => 'Tahun 2024',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Ringkasan LRA',
                                'desc' => 'Ringkasan Laporan Realisasi Anggaran',
                                'icon' => 'heroicon-o-document-text',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Ringkasan LRA',
                                        'icon' => 'heroicon-o-document-text',
                                        'desc' => 'Tahun 2020',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'Ringkasan LRA',
                                        'icon' => 'heroicon-o-document-text',
                                        'desc' => 'Tahun 2021',
                                        'link' => '',
                                    ],
                                    [
                                        'title' => 'LRA',
                                        'icon' => 'heroicon-o-document-text',
                                        'desc' => 'Tahun 2022',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Laporan Keuangan Terbaru',
                                'icon' => 'heroicon-o-clipboard-document-list',
                                'desc' => 'Laporan Keuangan DISKOMINFO JATIM terbaru',
                                'link' => '',
                            ],
                        ]" />
                    </div>
                </div>

                <!-- LAYANAN -->
                <div x-data="{ open: false }" class="relative">

                    <button @click="open = !open"
                        :class="open ? '{{ request()->is('') ? $active : $inactive }}' : '{{ request()->is('') ? $active : $inactive }}'"
                        class="flex items-center space-x-2 group">

                        <span class="text-current">LAYANAN</span>

                        <img src="/storage/assets/dropdown.png" alt="Dropdown"
                            class="w-[12px] transition-all duration-300"
                            :class="{
                                'rotate-180 brightness-100': open || '',
                                'rotate-0 brightness-50 group-hover:brightness-100': !(open || '')
                            }">
                    </button>

                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-1/2 z-10 flex w-screen max-w-max  px-4 transition duration-200 ease-out">
                        <x-header-flyoutmenu :menuItems="[
                            [
                                'title' => 'Layanan Informasi',
                                'desc' => 'Layanan Informasi Seputar DISKOMINFO JATIM',
                                'icon' => 'heroicon-o-information-circle',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Prosedur Permohonan Informasi',
                                        'icon' => 'heroicon-o-information-circle',
                                        'desc' => 'Prosedur Permohonan Informasi',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Pendaftaran PSE Lingkup Publik',
                                'icon' => 'heroicon-o-pencil-square',
                                'desc' => 'Daftar PSE Lingkup Publik di sini',
                                'link' => '/home/customteks',
                            ],
                            [
                                'title' => 'Dasbor BPJS TK',
                                'icon' => 'heroicon-o-presentation-chart-line',
                                'desc' => 'Dasbor BPJS Tenaga Kerja',
                                'link' => 'https://lookerstudio.google.com/reporting/9a445f15-09cf-42bb-8792-61b1bdd85ccb/page/p_k42d72ajnd',
                            ],
                            [
                                'title' => 'SATA',
                                'desc' => 'Menu Satu Data',
                                'icon' => 'heroicon-o-folder-open',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'SATA JATIM',
                                        'icon' => 'heroicon-o-folder-open',
                                        'desc' => 'Satuan Data Jawa Timur',
                                        'link' => 'https://sata.jatimprov.go.id/login',
                                    ],
                                    [
                                        'title' => 'SATA AWARD',
                                        'icon' => 'heroicon-o-folder-open',
                                        'desc' => 'Satuan Data Penghargaan',
                                        'link' => 'https://sata.jatimprov.go.id/award',
                                    ],
                                    [
                                        'title' => 'OPEN DATA',
                                        'icon' => 'heroicon-o-folder-open',
                                        'desc' => 'Open Data',
                                        'link' => 'https://opendata.jatimprov.go.id/',
                                    ],
                                    [
                                        'title' => 'Panduan SATA',
                                        'icon' => 'heroicon-o-folder-open',
                                        'desc' => 'Panduan Satuan Data',
                                        'link' => 'https://drive.jatimprov.go.id/index.php/s/n94wwixcHXLNyyW',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Klinik HOAKS',
                                'icon' => 'heroicon-o-shield-check',
                                'desc' => 'Cek Hoaks di Sekitarmu',
                                'link' => 'https://klinikhoaks.jatimprov.go.id/',
                            ],
                            [
                                'title' => 'Pendaftaran Aplikasi',
                                'desc' => 'Pelajari mengenai APPS',
                                'icon' => 'heroicon-o-device-phone-mobile',
                                'hasDropdown' => true,
                                'subItems' => [
                                    [
                                        'title' => 'Akses APPS',
                                        'icon' => 'heroicon-o-device-phone-mobile',
                                        'desc' => 'Akses APPS DISKOMINFO Jatim',
                                        'link' => 'https://apps.jatimprov.go.id/login',
                                    ],
                                    [
                                        'title' => 'Pedoman Pengisian APPS',
                                        'icon' => 'heroicon-o-device-phone-mobile',
                                        'desc' => 'Akses APPS DISKOMINFO Jatim',
                                        'link' => '',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Penetapan Standar Pelayanan',
                                'icon' => 'heroicon-o-adjustments-horizontal',
                                'desc' => 'Penetapan Standar Pelayanan DISKOMINFO Jatim',
                                'link' => '',
                            ],
                            [
                                'title' => 'Maklumat Pelayanan',
                                'icon' => 'heroicon-o-chat-bubble-left-right',
                                'desc' => 'Maklumat Pelayanan DISKOMINFO Jatim',
                                'link' => '',
                            ],
                        ]" />
                    </div>
                </div>

                <!-- REGULASI -->
                <div x-data="{ open: false }" class="relative">

                    <button @click="open = !open"
                        :class="open ? '{{ request()->is('') ? $active : $inactive }}' : '{{ request()->is('') ? $active : $inactive }}'"
                        class="flex items-center space-x-2 group">

                        <span class="text-current">REGULASI</span>

                        <img src="/storage/assets/dropdown.png" alt="Dropdown"
                            class="w-[12px] transition-all duration-300"
                            :class="{
                                'rotate-180 brightness-100': open || '',
                                'rotate-0 brightness-50 group-hover:brightness-100': !(open || '')
                            }">
                    </button>

                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-1/2 z-10 flex w-screen max-w-max  px-4 transition duration-200 ease-out">
                        <x-header-flyoutmenu :menuItems="[
                            [
                                'title' => 'Undang-Undang',
                                'icon' => 'heroicon-o-book-open',
                                'desc' => 'Undang-Undang Replublik Indonesia',
                                'link' => '/home/regulasi',
                            ],
                            [
                                'title' => 'Peraturan Pemerintah',
                                'icon' => 'heroicon-o-clipboard-document',
                                'desc' => 'Peraturan Pemerintah Republik Indonesia',
                                'link' => '',
                            ],
                            [
                                'title' => 'Instruksi Presiden',
                                'icon' => 'heroicon-o-megaphone',
                                'desc' => 'Instruksi Presiden Republik Indonesia',
                                'link' => '',
                            ],
                            [
                                'title' => 'Peraturan Menteri',
                                'icon' => 'heroicon-o-identification',
                                'desc' => 'Peraturan Menteri Komunikasi dan Informatika',
                                'link' => '',
                            ],
                            [
                                'title' => 'Peraturan Gubernur',
                                'icon' => 'heroicon-o-user-group',
                                'desc' => 'Peraturan Gubernur Jawa Timur',
                                'link' => '',
                            ],
                        ]" />
                    </div>
                </div>

                <!-- PPID -->   
                <a href="https://ppid.kominfo.jatimprov.go.id/"
                    class="{{ request()->is('ppid') ? $active : $inactive }}">
                    PPID
                </a>

                <!-- PUBLIKASI -->
                <div x-data="{ open: false }" class="relative">

                    <button @click="open = !open"
                        class="{{ request()->is('home/berita') || request()->is('home/galerifoto') || request()->is('home/video') || request()->is('home/download') || request()->is('home/majalah') ? $active : $inactive }} flex items-center space-x-2 group">
                        <span>PUBLIKASI</span>
                        <img src="/storage/assets/dropdown.png" alt="Dropdown"
                            class="w-[12px] transition-all duration-300"
                            :class="{
                                'rotate-180 brightness-100': open || '',
                                'rotate-0 brightness-50 group-hover:brightness-100': !(open || '')
                            }">
                    </button>

                    <div x-show="open" @click.away="open = false" x-transition
                        class="absolute left-1/2 z-10 flex w-screen max-w-max  px-4 transition duration-200 ease-out">
                        <x-header-flyoutmenu :menuItems="[
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

                <!-- SELEKSI KPID -->   
                <a href="https://seleksikpid.jatimprov.go.id/"
                    class="{{ request()->is('seleksikpid') ? $active : $inactive }}">
                    <span class="whitespace-nowrap">SELEKSI KPID</span>
                </a>

            </div>

            <!-- Icons -->
            <div class="hidden lg:flex items-center space-x-8" id="icons">
                <a href="#"><img
                        class="w-[18px] filter brightness-50 hover:brightness-100 hover:drop-shadow-xl transition duration-50 ease-out"
                        src="/storage/assets/search.png" alt="Search"></a>
                <a href="#"><img
                        class="w-[19px] filter brightness-50 hover:brightness-100 hover:drop-shadow-xl transition duration-50 ease-out"
                        src="/storage/assets/youtube.png" alt="YouTube"></a>
                <a href="#"><img
                        class="w-[16px] filter brightness-50 hover:brightness-100 hover:drop-shadow-xl transition duration-50 ease-out"
                        src="/storage/assets/instagram.png" alt="Instagram"></a>
                <a href="#"><img
                        class="w-[12px] filter brightness-50 hover:brightness-100 hover:drop-shadow-xl transition duration-50 ease-out"
                        src="/storage/assets/x.png" alt="X"></a>
            </div>
        </div>

        <!-- SIDEBAR MOBILE -->
        <x-header-sidebar />

    </nav>

    <script defer src="https://unpkg.com/alpinejs"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('sidebar', {
                open: false
            })
        })
    </script>

</body>

</html>