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
                                'link' => '/program-a',
                                'desc' => 'Rencana Strategis setiap periode',
                                'icon' => '',
                                'hasDropdown' => true
                            ],
                            [
                                'title' => 'Indikator Kerja Utama',
                                'link' => '/program-b',
                                'desc' => 'Indikator Kerja Utama DISKOMINFO JATIM',
                                'icon' => '',
                                'hasDropdown' => false
                            ],
                            [
                                'title' => 'Perjanjian Kinerja',
                                'link' => '/program-b',
                                'desc' => 'Perjanjian Kinerja DISKOMINFO JATIM setiap tahun',
                                'icon' => '',
                                'hasDropdown' => true
                            ],
                            [
                                'title' => 'Rencana Anggaran',
                                'link' => '/program-b',
                                'desc' => 'Rencana APBD DISKOMINFO JATIM setiap tahun',
                                'icon' => '',
                                'hasDropdown' => true
                            ]
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
                                'title' => 'Rencana Strategis',
                                'link' => '/program-a',
                                'desc' => 'Rencana Strategis setiap periode',
                                'icon' => '',
                                'hasDropdown' => true
                            ],
                            [
                                'title' => 'Indikator Kerja Utama',
                                'link' => '/...',
                                'desc' => 'Indikator Kerja Utama DISKOMINFO JATIM',
                                'icon' => '',
                                'hasDropdown' => false
                            ],
                            [
                                'title' => 'Perjanjian Kinerja',
                                'link' => '/...',
                                'desc' => 'Perjanjian Kinerja DISKOMINFO JATIM setiap tahun',
                                'icon' => '',
                                'hasDropdown' => true
                            ],
                            [
                                'title' => 'Rencana Anggaran',
                                'link' => '/...',
                                'desc' => 'Rencana APBD DISKOMINFO JATIM setiap tahun',
                                'icon' => '',
                                'hasDropdown' => true
                            ]
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
                                'title' => 'Rencana Strategis',
                                'link' => '/program-a',
                                'desc' => 'Rencana Strategis setiap periode',
                                'icon' => '',
                                'hasDropdown' => true
                            ],
                            [
                                'title' => 'Indikator Kerja Utama',
                                'link' => '/program-b',
                                'desc' => 'Indikator Kerja Utama DISKOMINFO JATIM',
                                'icon' => '',
                                'hasDropdown' => false
                            ],
                            [
                                'title' => 'Perjanjian Kinerja',
                                'link' => '/program-b',
                                'desc' => 'Perjanjian Kinerja DISKOMINFO JATIM setiap tahun',
                                'icon' => '',
                                'hasDropdown' => true
                            ],
                            [
                                'title' => 'Rencana Anggaran',
                                'link' => '/program-b',
                                'desc' => 'Rencana APBD DISKOMINFO JATIM setiap tahun',
                                'icon' => '',
                                'hasDropdown' => true
                            ]
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
                                'title' => 'Rencana Strategis',
                                'link' => '/program-a',
                                'desc' => 'Rencana Strategis setiap periode',
                                'icon' => '',
                                'hasDropdown' => true
                            ],
                            [
                                'title' => 'Indikator Kerja Utama',
                                'link' => '/program-b',
                                'desc' => 'Indikator Kerja Utama DISKOMINFO JATIM',
                                'icon' => '',
                                'hasDropdown' => false
                            ],
                            [
                                'title' => 'Perjanjian Kinerja',
                                'link' => '/program-b',
                                'desc' => 'Perjanjian Kinerja DISKOMINFO JATIM setiap tahun',
                                'icon' => '',
                                'hasDropdown' => true
                            ],
                            [
                                'title' => 'Rencana Anggaran',
                                'link' => '/program-b',
                                'desc' => 'Rencana APBD DISKOMINFO JATIM setiap tahun',
                                'icon' => '',
                                'hasDropdown' => true
                            ]
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
                                'link' => route('home.berita'),
                                'desc' => 'Jelajahi berita seputar Jawa Timur',
                                'icon' => '<svg class=\'size-6 text-gray-600 group-hover:text-indigo-600\' fill=\'none\' viewBox=\'0 0 24 24\' stroke-width=\'2\' stroke=\'currentColor\' aria-hidden=\'true\'>
                                                                                        <path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z\' /> </svg>',
                                'hasDropdown' => false
                            ],
                            [
                                'title' => 'Galeri Foto',
                                'link' => route('home.galerifoto'),
                                'desc' => 'Jelajahi galeri foto agenda seputar Jawa Timur',
                                'icon' => '<svg class=\'size-6 text-gray-600 group-hover:text-indigo-600\' fill=\'none\' viewBox=\'0 0 24 24\' stroke-width=\'2\' stroke=\'currentColor\' aria-hidden=\'true\'>
                                                                                        <path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z\' /> </svg>',
                                'hasDropdown' => false
                            ],
                            [
                                'title' => 'Video',
                                'link' => route('home.video'),
                                'desc' => 'Jelajahi video terkait Jawa Timur',
                                'icon' => '<svg class=\'size-6 text-gray-600 group-hover:text-indigo-600\' fill=\'none\' viewBox=\'0 0 24 24\' stroke-width=\'2\' stroke=\'currentColor\' aria-hidden=\'true\'>
                                                                                        <path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z\' /> </svg>',
                                'hasDropdown' => false
                            ],
                            [
                                'title' => 'Download',
                                'link' => route('home.download'),
                                'desc' => 'Cari e-document seputar Jawa Timur',
                                'icon' => '<svg class=\'size-6 text-gray-600 group-hover:text-indigo-600\' fill=\'none\' viewBox=\'0 0 24 24\' stroke-width=\'2\' stroke=\'currentColor\' aria-hidden=\'true\'>
                                                                                        <path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3\' /> </svg>',
                                'hasDropdown' => false
                            ],
                            [
                                'title' => 'Majalah',
                                'link' => route('home.majalah'),
                                'desc' => 'Jelajahi majalah-majalah seputar Jawa Timur',
                                'icon' => '<svg class=\'size-6 text-gray-600 group-hover:text-indigo-600\' fill=\'none\' viewBox=\'0 0 24 24\' stroke-width=\'2\' stroke=\'currentColor\' aria-hidden=\'true\'>
                                                                                        <path stroke-linecap=\'round\' stroke-linejoin=\'round\' d=\'M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25\' /> </svg>',
                                'hasDropdown' => false
                            ]
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