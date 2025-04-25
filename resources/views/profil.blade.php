@vite(['resources/css/app.css'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>

<body class="bg-white text-gray-800 font-jakarta text-p">
    <x-header />
    <x-breadcrumb />

    <!-- Landing Page (DISKOMINFO JATIM) -->
    <div class="relative w-full h-auto md:h-dvh overflow-hidden">

        <img src="/storage/assets/gedungkominfo2.jpg" alt="Background Watermark"
            class="absolute inset-0 w-full h-full object-cover opacity-10 -z-10" />

        <div
            class="absolute inset-0 bg-gradient-to-b from-primary100/15 via-white/100 to-gray30/50 pointer-events-none -z-10">
        </div>

        <section class="flex items-center justify-center px-[60px] py-12 w-full h-full">
            <div class="max-w-screen-xl mx-auto w-full grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-display font-bold">
                        Dinas Komunikasi <br>
                        dan Informatika <br>
                        Provinsi <span class="text-primary50">Jawa Timur</span>
                    </h1>
                    <p class="mt-5 leading-relaxed text-justify">
                        Dinas Komunikasi dan Informatika (Diskominfo) Provinsi Jawa Timur adalah perangkat daerah yang
                        bertugas menyiapkan bahan pelaksanaan urusan pemerintahan di bidang komunikasi, informatika,
                        statistik, dan persandian. Dipimpin oleh Kepala Dinas yang bertanggung jawab kepada Gubernur
                        melalui Sekretaris Daerah Provinsi, Diskominfo berperan dalam penyimpanan, pendokumentasian,
                        penyediaan, dan pelayanan informasi publik, serta pengelolaan teknologi informasi dan komunikasi
                        di wilayah Jawa Timur.
                    </p>
                </div>
                <div class="flex justify-center">
                    <img src="/storage/assets/logo-diskominfo2.png" alt="Kominfo Logo" class="w-[70%] h-auto">
                </div>
            </div>
        </section>
    </div>

    <!-- Kedudukan dan Alamat -->
    <section class="relative">
        <div class="grid md:grid-cols-2 items-center bg-primary100">

            <div
                class="absolute top-0 left-0 w-full h-10 bg-gradient-to-b from-gray90/10 to-transparent pointer-events-none z-10">
            </div>
            <div
                class="absolute bottom-0 left-0 w-full h-10 bg-gradient-to-t from-gray90/10 to-transparent pointer-events-none z-10">
            </div>

            <!-- Gambar -->
            <div class="relative h-full w-full">
                <img src="/storage/assets/gedungkominfo.png" alt="Kantor Kominfo"
                    class="object-cover w-full h-full max-h-[500px]">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-l from-indigo-1000 w-[80%] via-[#05003290] to-transparent">
                </div>
            </div>

            <!-- Teks -->
            <div class="px-[60px] py-12 text-white">
                <h2 class="text-h1 font-bold mb-4">
                    Kedudukan dan <span class="text-secondary50">Alamat</span>
                </h2>
                <p class="leading-relaxed">
                    Dinas Komunikasi dan Informatika merupakan unsur pelaksana otonomi daerah, dipimpin oleh seorang
                    kepala dinas, yang berada di bawah dan bertanggung jawab kepada Gubernur melalui Sekretaris Daerah.
                </p>
                <ul class="mt-4 space-y-2">
                    <li><strong>Alamat:</strong> Jl. A Yani 242 - 244 Surabaya</li>
                    <li><strong>Email:</strong> kominfo@jatimprov.go.id</li>
                    <li><strong>Website:</strong> https://kominfo.jatimprov.go.id</li>
                    <li><strong>Telepon:</strong> (031) 8294608 | Fax: (031) 8294517</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section class="py-32 px-[60px] max-w-screen-xl mx-auto text-center">
        <h2 class="text-h1 font-bold mb-4">
            Visi dan <span class="text-primary50">Misi</span> Kami
        </h2>
        <p class="max-w-3xl mx-auto">
            Terwujudnya Tata kelola Pemerintahan yang Bersih, Inovatif, Terbuka dan Partisipatoris Memperkuat Demokrasi
            Kewargaan untuk Menghadirkan Ruang Sosial yang menghargai Provinsi Kebhinekaan
        </p>
    </section>

    <!-- Tugas & Fungsi -->
    <section class="py-32 px-[60px] sm:px-[60px] md:px-32 -mt-32">
        <div class="grid md:grid-cols-2 gap-10 sm:gap-10 md:gap-32 items-start">
            <div>
                <h2 class="text-h1 font-bold mb-4 text-center">Tugas</h2>
                <p class="leading-relaxed text-justify">
                    Sesuai dengan Peraturan Gubernur Provinsi Jawa Timur Nomor : 80 Tahun 2016 bahwa Dinas Komunikasi
                    dan Informatika Provinsi Jawa Timur berkedudukan sebagai unsur pelaksana urusan pemerintahan di
                    bidang komunikasi dan informatika, bidang statistik dan bidang persandian yang dipimpin oleh Kepala
                    Dinas yang berkedudukan di bawah dan bertanggung jawab kepada Gubernur melalui Sekretaris Daerah
                    Provinsi.
                </p>
                <p class="leading-relaxed mt-2 text-justify">
                    Dinas Komunikasi dan Informatika Provinsi Jawa Timur mempunyai tugas membantu Gubernur menyiapkan
                    bahan pelaksanaan urusan pemerintahan yang menjadi kewenangan Pemerintah Provinsi di Bidang
                    Komunikasi dan informatika serta tugas pembantuan.
                </p>
            </div>
            <div>
                <h2 class="text-h1 font-bold mb-4 text-center">Fungsi</h2>
                <p class="leading-relaxed text-justify mb-2">
                    Dalam melaksanakan tugas pokok tersebut Dinas Komunikasi dan Informatika mempunyai fungsi sebagai
                    berikut :
                </p>
                <ol class="list-decimal list-inside space-y-2 leading-relaxed text-justify">
                    <li>Perumusan kebijakan di bidang komunikasi dan informatika, statistik dan persandian;</li>
                    <li>Pelaksanaan kebijakan di bidang komunikasi dan informatika, statistik dan persandian;</li>
                    <li>Pelaksanaan evaluasi dan pelaporan di bidang komunikasi dan informatika, statistik dan
                        persandian;</li>
                    <li>Pelaksanaan administrasi dinas di bidang komunikasi dan informasi dan informatika, statistik dan
                        persandian;</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Unit Kerja -->
    <section class="bg-primary100 relative px-[60px] py-6 pb-[36px]">

        <div
            class="absolute top-0 left-0 w-full h-10 bg-gradient-to-b from-gray90/10 to-transparent pointer-events-none z-10">
        </div>
        <div
            class="absolute bottom-0 left-0 w-full h-10 bg-gradient-to-t from-gray90/10 to-transparent pointer-events-none z-10">
        </div>

        <div>
            <x-card-kategori-unitkerja titleFirst="Unit Kerja" titleSecond="Dinas Kominfo" bgColor="bg-primary100"
                titleFirstColor="text-white" titleSecondColor="text-secondary50" titleSize="text-h1" gap="gap-[36px]"
                titleMarginBottom="mb-10" :items="[
        ['image' => asset('storage/assets/rakha.jpg'), 'text' => 'Informasi dan Komunikasi Publik'],
        ['image' => asset('storage/assets/rakha.jpg'), 'text' => 'Aplikasi dan Informatika'],
        ['image' => asset('storage/assets/rakha.jpg'), 'text' => 'Data dan Statistik'],
        ['image' => asset('storage/assets/rakha.jpg'), 'text' => 'Pengaduan dan Keamanan Informasi'],
    ]" />
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section class="bg-white relative px-[60px] py-16">
        <div class="w-full">
            <h2 class="px-14 text-h1 font-bold mb-4 text-right">
                Struktur <span class="text-primary50">Organisasi</span>
            </h2>
            <img src="/storage/assets/struktur-organisasi.png" alt="Struktur Organisasi"
                class="items-start object-scale-down w-full h-dvh">
        </div>
    </section>

    <!-- Pejabat Struktural -->
    <section class="bg-background relative py-10">

        <div>
            <h2 class="px-14 text-h1 font-bold mb-4 text-left">
                <span class="text-black">Pejabat</span>
                <span class="text-primary50">Struktural</span>
            </h2>
        </div>
        <div class="px-14">
            <x-card-slider :row="2">
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/rakha.jpg'" :name="'Nama Pejabat'" :position="'Jabatan Pejabat'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/rakha.jpg'" :name="'Nama Pejabat'" :position="'Jabatan Pejabat'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/rakha.jpg'" :name="'Nama Pejabat'" :position="'Jabatan Pejabat'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/rakha.jpg'" :name="'Nama Pejabat'" :position="'Jabatan Pejabat'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/rakha.jpg'" :name="'Nama Pejabat'" :position="'Jabatan Pejabat'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/rakha.jpg'" :name="'Nama Pejabat'" :position="'Jabatan Pejabat'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/rakha.jpg'" :name="'Nama Pejabat'" :position="'Jabatan Pejabat'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/rakha.jpg'" :name="'Nama Pejabat'" :position="'Jabatan Pejabat'" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <x-footer />
</body>

</html>