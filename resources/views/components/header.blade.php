<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Navbar Responsif</title>
</head>

<body class="bg-white">
    <nav class="bg-primary100">
        <div class="relative flex h-16 mx-auto px-16 py-9 space-x-5 items-center justify-between w-full">

            <!-- Menu Button for Mobile -->
            <div class="sm:hidden">
                <button id="menu-btn" class="text-white focus:outline-none">
                    <img class="h-8 w-auto brightness-50 transition duration-200 ease-out hover:brightness-100" src="/storage/assets/mobile-menu.png" alt="Mobile Menu">
                </button>
            </div>

            <!-- Logo Kominfo -->
            <div class="flex items-center">
                <img class="h-8 w-auto" src="/storage/assets/logo-diskominfo.png" alt="Logo Diskominfo">
            </div>

            <!-- Menu Items & Icons -->
            <div class="hidden sm:flex flex-auto justify-center space-x-3" id="menu">
                <a href="#" class="rounded-lg px-3 py-2 text-sm font-jakarta font-medium text-white drop-shadow-2xl"
                    aria-current="page">HOME</a>
                <a href="#"
                    class="rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out">PROFIL</a>

                <!-- Flyout Menus -->
                <x-flyoutmenu title="PROGRAM" :items="[
                    ['text' => 'Rencana Strategi', 'link' => '/rencana-strategi'],
                    ['text' => 'Indikator Kinerja Utama', 'link' => '/indikator-kinerja'],
                    ['text' => 'Perjanjian Kinerja', 'link' => '/perjanjian-kinerja'],
                    ['text' => 'Rencana Anggaran', 'link' => '/rencana-anggaran'],
                ]"/>

                <x-flyoutmenu title="LAPORAN" :items="[
                    ['text' => 'Laporan Tahunan', 'link' => '/laporan-tahunan'],
                    ['text' => 'Laporan Bulanan', 'link' => '/laporan-bulanan'],
                    ['text' => 'Audit Keuangan', 'link' => '/audit-keuangan'],
                ]"/>

                <x-flyoutmenu title="LAYANAN" :items="[
                    ['text' => 'E-Government', 'link' => '/e-government'],
                    ['text' => 'Layanan Publik', 'link' => '/layanan-publik'],
                    ['text' => 'Pengaduan', 'link' => '/pengaduan'],
                ]"/>

                <a href="#"
                    class="rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out">REGULASI</a>
                <a href="#"
                    class="rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out">PPID</a>

                <x-flyoutmenu title="PUBLIKASI" :items="[
                    ['text' => 'Berita', 'link' => '/berita'],
                    ['text' => 'Galeri Foto', 'link' => '/galeri-foto'],
                    ['text' => 'Dokumen', 'link' => '/dokumen'],
                ]"/>

                <a href="#"
                    class="rounded-md px-3 py-2 font-jakarta text-p font-medium text-gray50 hover:text-white hover:drop-shadow-2lx transition duration-200 ease-out">SELEKSI</a>
            </div>

            <!-- Icons -->
            <div class="hidden sm:flex items-center space-x-9" id="icons">
                <a href="#"><img class="w-5 filter brightness-50 hover:brightness-100 hover:drop-shadow-xl"
                        src="/storage/assets/search.png" alt="Search"></a>
                <a href="#"><img class="w-5 filter brightness-50 hover:brightness-100 hover:drop-shadow-xl"
                        src="/storage/assets/youtube.png" alt="YouTube"></a>
                <a href="#"><img class="w-5 filter brightness-50 hover:brightness-100 hover:drop-shadow-xl"
                        src="/storage/assets/instagram.png" alt="Instagram"></a>
                <a href="#"><img class="w-4 filter brightness-50 hover:brightness-100 hover:drop-shadow-xl"
                        src="/storage/assets/x.png" alt="X"></a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden sm:hidden flex flex-col bg-primary1009 py-4 space-y-2">
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