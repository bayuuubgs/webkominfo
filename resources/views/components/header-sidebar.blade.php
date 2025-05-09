<!-- Sidebar Overlay -->
<div x-show="openSidebar" x-transition.opacity x-cloak class="fixed inset-0 z-40 bg-black bg-opacity-50"
    @click="openSidebar = false">
</div>

<!-- Sidebar Panel -->
<div x-show="openSidebar" x-transition:enter="transition ease-in-out duration-300 transform"
    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full" x-cloak
    class="fixed top-0 right-0 w-64 h-full z-50 bg-white text-pM text-gray70 shadow-lg p-4 overflow-y-auto">

    <!-- Close Button -->
    <button @click="openSidebar = false" class="mb-4 p-2 focus:outline-none">
        <x-heroicon-o-x-mark class="w-6 h-6" />
    </button>

    @php
        $menuItems = [
            [
                'title' => 'Home',
                'icon' => 'heroicon-o-home',
                'href' => '/home',
            ],
            [
                'title' => 'Profil Kami',
                'icon' => 'heroicon-o-user-circle',
                'href' => '/home/profil',
            ],
            [
                'title' => 'Program',
                'icon' => 'heroicon-o-clipboard-document-list',
                'href' => '#',
                'submenus' => [
                    [
                        'title' => 'Rencana Strategis',
                        'icon' => 'heroicon-o-document-chart-bar',
                        'href' => '#',
                        'submenus' => [
                            ['title' => '2014 - 2019', 'icon' => 'heroicon-o-document-chart-bar', 'href' => '/home/customPDF'],
                            ['title' => '2019 - 2024', 'icon' => 'heroicon-o-document-chart-bar', 'href' => ''],
                            ['title' => '2024 - 2025', 'icon' => 'heroicon-o-document-chart-bar', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'Indikator Kerja Utama',
                        'icon' => 'heroicon-o-chart-bar',
                        'href' => '',
                    ],
                    [
                        'title' => 'Perjanjian Kinerja',
                        'icon' => 'heroicon-o-clipboard-document-check',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Tahun 2022', 'icon' => 'heroicon-o-clipboard-document-check', 'href' => ''],
                            ['title' => 'Perubahan 2023', 'icon' => 'heroicon-o-clipboard-document-check', 'href' => ''],
                            ['title' => 'Tahun 2024', 'icon' => 'heroicon-o-clipboard-document-check', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'Rencana Anggaran',
                        'icon' => 'heroicon-o-currency-dollar',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'APBD Tahun 2022', 'icon' => 'heroicon-o-currency-dollar', 'href' => ''],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Laporan',
                'icon' => 'heroicon-o-folder',
                'href' => '#',
                'submenus' => [
                    [
                        'title' => 'LAKIP',
                        'icon' => 'heroicon-o-document-text',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Tahun 2020', 'icon' => 'heroicon-o-document-text', 'href' => ''],
                            ['title' => 'Tahun 2021', 'icon' => 'heroicon-o-document-text', 'href' => ''],
                            ['title' => 'Tahun 2022', 'icon' => 'heroicon-o-document-text', 'href' => ''],
                            ['title' => 'Tahun 2023', 'icon' => 'heroicon-o-document-text', 'href' => ''],
                            ['title' => 'Tahun 2024', 'icon' => 'heroicon-o-document-text', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'NERACA',
                        'icon' => 'heroicon-o-chart-pie',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Tahun 2020', 'icon' => 'heroicon-o-chart-pie', 'href' => ''],
                            ['title' => 'Tahun 2021', 'icon' => 'heroicon-o-chart-pie', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'LRA',
                        'icon' => 'heroicon-o-banknotes',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Tahun 2020', 'icon' => 'heroicon-o-banknotes', 'href' => ''],
                            ['title' => 'Tahun 2021', 'icon' => 'heroicon-o-banknotes', 'href' => ''],
                            ['title' => 'Ringkasan LRA 2022', 'icon' => 'heroicon-o-banknotes', 'href' => ''],
                            ['title' => 'RLPPD 2024', 'icon' => 'heroicon-o-banknotes', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'ASET',
                        'icon' => 'heroicon-o-archive-box',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Tahun 2020', 'icon' => 'heroicon-o-archive-box', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'Laporan Arus Kas',
                        'icon' => 'heroicon-o-currency-dollar',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Tahun 2020', 'icon' => 'heroicon-o-currency-dollar', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'Ringkasan DPA',
                        'icon' => 'heroicon-o-clipboard-document',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Ringkasan DPA 2020', 'icon' => 'heroicon-o-clipboard-document', 'href' => ''],
                            ['title' => 'Ringkasan DPPA 2020', 'icon' => 'heroicon-o-clipboard-document', 'href' => ''],
                            ['title' => 'Ringkasan DPA 2021', 'icon' => 'heroicon-o-clipboard-document', 'href' => ''],
                            ['title' => 'Ringkasan DPA 2023', 'icon' => 'heroicon-o-clipboard-document', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'Ringkasan RKA',
                        'icon' => 'heroicon-o-clipboard-document-check',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Ringkasan RKA 2020', 'icon' => 'heroicon-o-clipboard-document-check', 'href' => ''],
                            ['title' => 'Ringkasan RKPA 2020', 'icon' => 'heroicon-o-clipboard-document-check', 'href' => ''],
                            ['title' => 'Ringkasan RKA 2021', 'icon' => 'heroicon-o-clipboard-document-check', 'href' => ''],
                            ['title' => 'Ringkasan RKA 2023', 'icon' => 'heroicon-o-clipboard-document-check', 'href' => ''],
                            ['title' => 'Ringkasan RKPA 2023', 'icon' => 'heroicon-o-clipboard-document-check', 'href' => ''],
                            ['title' => 'Ringkasan RKA 2024', 'icon' => 'heroicon-o-clipboard-document-check', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'Ringkasan LRA',
                        'icon' => 'heroicon-o-document-text',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Ringkasan LRA 2020', 'icon' => 'heroicon-o-document-text', 'href' => ''],
                            ['title' => 'Ringkasan LRA 2021', 'icon' => 'heroicon-o-document-text', 'href' => ''],
                            ['title' => 'LRA 2022', 'icon' => 'heroicon-o-document-text', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'Laporan Keuangan Terbaru',
                        'icon' => 'heroicon-o-clipboard-document-list',
                        'href' => '',
                    ],
                ],
            ],
            [
                'title' => 'Layanan',
                'icon' => 'heroicon-o-server-stack',
                'href' => '#',
                'submenus' => [
                    [
                        'title' => 'Layanan Informasi',
                        'icon' => 'heroicon-o-information-circle',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Prosedur Permohonan Informasi', 'icon' => 'heroicon-o-information-circle', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'Pendaftaran PSE Lingkup Publik',
                        'icon' => 'heroicon-o-pencil-square',
                        'href' => '/home/customteks',
                    ],
                    [
                        'title' => 'Dasbor BPJS TK',
                        'icon' => 'heroicon-o-presentation-chart-line',
                        'href' => 'https://lookerstudio.google.com/reporting/9a445f15-09cf-42bb-8792-61b1bdd85ccb/page/p_k42d72ajnd',
                    ],
                    [
                        'title' => 'SATA',
                        'icon' => 'heroicon-o-folder-open',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'SATA JATIM', 'icon' => 'heroicon-o-folder-open', 'href' => 'https://sata.jatimprov.go.id/login'],
                            ['title' => 'SATA AWARD', 'icon' => 'heroicon-o-folder-open', 'href' => 'https://sata.jatimprov.go.id/award'],
                            ['title' => 'OPEN DATA', 'icon' => 'heroicon-o-folder-open', 'href' => 'https://opendata.jatimprov.go.id/'],
                            ['title' => 'Panduan SATA', 'icon' => 'heroicon-o-folder-open', 'href' => 'https://drive.jatimprov.go.id/index.php/s/n94wwixcHXLNyyW'],
                        ],
                    ],
                    [
                        'title' => 'Klinik HOAKS',
                        'icon' => 'heroicon-o-shield-check',
                        'href' => 'https://klinikhoaks.jatimprov.go.id/',
                    ],
                    [
                        'title' => 'Pendaftaran Aplikasi',
                        'icon' => 'heroicon-o-device-phone-mobile',
                        'href' => '#',
                        'submenus' => [
                            ['title' => 'Akses APPS', 'icon' => 'heroicon-o-device-phone-mobile', 'href' => 'https://apps.jatimprov.go.id/login'],
                            ['title' => 'Pedoman Pengisian APPS', 'icon' => 'heroicon-o-device-phone-mobile', 'href' => ''],
                        ],
                    ],
                    [
                        'title' => 'Penetapan Standar Pelayanan',
                        'icon' => 'heroicon-o-adjustments-horizontal',
                        'href' => '',
                    ],
                    [
                        'title' => 'Maklumat Pelayanan',
                        'icon' => 'heroicon-o-chat-bubble-left-right',
                        'href' => '',
                    ],
                ],
            ],
            [
                'title' => 'Regulasi',
                'icon' => 'heroicon-o-scale',
                'href' => '#',
                'submenus' => [
                    ['title' => 'Undang-Undang', 'icon' => 'heroicon-o-book-open', 'href' => '/home/regulasi'],
                    ['title' => 'Peraturan Pemerintah', 'icon' => 'heroicon-o-clipboard-document', 'href' => ''],
                    ['title' => 'Instruksi Presiden', 'icon' => 'heroicon-o-megaphone', 'href' => ''],
                    ['title' => 'Peraturan Menteri', 'icon' => 'heroicon-o-identification', 'href' => ''],
                    ['title' => 'Peraturan Gubernur', 'icon' => 'heroicon-o-user-group', 'href' => ''],
                ],
            ],
            [
                'title' => 'PPID',
                'icon' => 'heroicon-o-link',
                'href' => 'https://ppid.kominfo.jatimprov.go.id/',
            ],
            [
                'title' => 'Publikasi',
                'icon' => 'heroicon-o-megaphone',
                'href' => '#',
                'submenus' => [
                    ['title' => 'Berita', 'icon' => 'heroicon-o-newspaper', 'href' => '/home/berita'],
                    ['title' => 'Galeri Foto', 'icon' => 'heroicon-o-photo', 'href' => '/home/galerifoto'],
                    ['title' => 'Video', 'icon' => 'heroicon-o-play', 'href' => '/home/video'],
                    ['title' => 'Download', 'icon' => 'heroicon-o-arrow-down-tray', 'href' => '/home/download'],
                    ['title' => 'Majalah', 'icon' => 'heroicon-o-book-open', 'href' => '/home/majalah'],
                ],
            ],
            [
                'title' => 'Seleksi KPID',
                'icon' => 'heroicon-o-user-plus',
                'href' => 'https://seleksikpid.jatimprov.go.id/',
            ],

        ];
    @endphp

    <!-- Sidebar Menu Items -->
    <nav class=" text-pM lg:text-p">
        @foreach($menuItems as $menu)
            <x-header-sidebaritems :item="$menu" />
        @endforeach
    </nav>
    
</div>