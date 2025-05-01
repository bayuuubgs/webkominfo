@vite(['resources/css/app.css'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>

<body class="bg-white text-gray-800 font-Heebo md:font-jakarta text-pM lg:text-p">

    <x-header />
    <x-breadcrumb />

    <!-- Landing Page (DISKOMINFO JATIM) -->
    <div class="relative w-full h-auto md:h-dvh overflow-hidden">

        <img src="/storage/assets/gedungkominfo2.jpg" alt="Background Watermark"
            class="absolute inset-0 w-full h-full object-cover opacity-10 -z-20" />

        <div
            class="absolute inset-0 bg-gradient-to-b from-primary100/15 via-white/100 to-gray30/50 pointer-events-none -z-10">
        </div>

        <section class="flex items-center justify-center px-10 md:pl-14 md:pr-8 py-12 w-full h-full">
            <div class="max-w-screen-xl mx-auto w-full grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-displayM lg:text-display font-bold text-center md:text-left md:mt-5">
                        <span>Dinas Komunikasi</span>
                        <span>dan Informatika</span>
                        <div><span class="text-primary50">Jawa Timur</span></div>
                    </h1>

                    <div class="flex justify-center">
                        <img src="/storage/assets/logo-diskominfo2.png" alt="Kominfo Logo"
                            class="w-[50%] h-auto pt-8 md:hidden">
                    </div>

                    <p class="mt-5 text-justify">
                        Dinas Komunikasi dan Informatika (Diskominfo) Provinsi Jawa Timur adalah perangkat daerah yang
                        bertugas menyiapkan bahan pelaksanaan urusan pemerintahan di bidang komunikasi, informatika,
                        statistik, dan persandian. Dipimpin oleh Kepala Dinas yang bertanggung jawab kepada Gubernur
                        melalui Sekretaris Daerah Provinsi, Diskominfo berperan dalam penyimpanan, pendokumentasian,
                        penyediaan, dan pelayanan informasi publik, serta pengelolaan teknologi informasi dan komunikasi
                        di wilayah Jawa Timur.
                    </p>
                </div>
                <div class="flex justify-center">
                    <img src="/storage/assets/logo-diskominfo2.png" alt="Kominfo Logo" class="w-[70%] h-auto hidden md:block">
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
            <div class="px-10 md:px-16 py-12 text-white">
                <h2 class="text-h1M lg:text-h1 font-bold mb-4">
                    Kedudukan dan <span class="text-secondary50">Alamat</span>
                </h2>
                <p class="lg:text-p text-justify">
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
    <section class="pt-14 pb-10 md:pb-36 md:pt-28 px-10 md:px-16 max-w-screen-xl mx-auto text-center">
        <h2 class="text-h1M lg:text-h1 font-bold mb-4">
            Visi dan <span class="text-primary50">Misi</span> Kami
        </h2>
        <p class="max-w-3xl mx-auto">
            Terwujudnya Tata kelola Pemerintahan yang Bersih, Inovatif, Terbuka dan Partisipatoris Memperkuat Demokrasi
            Kewargaan untuk Menghadirkan Ruang Sosial yang menghargai Provinsi Kebhinekaan
        </p>
    </section>

    <!-- Tugas & Fungsi -->
    <section class="py-10 md:py-16 px-10 md:px-16 -mt-10 md:-mt-32">
        <div class="grid md:grid-cols-2 gap-10 sm:gap-10 md:gap-16 lg:gap-32 items-start">
            <div>
                <h2 class="text-h1M lg:text-h1 font-bold mb-4 text-center">Tugas</h2>
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
            <div class="mb-4 md:mb-14">
                <h2 class="text-h1M lg:text-h1 font-bold mb-4 text-center">Fungsi</h2>
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
    <section class="bg-primary100 relative px-5 md:px-12 py-6 pb-[36px]">

        <div
            class="absolute top-0 left-0 w-full h-10 bg-gradient-to-b from-gray90/10 to-transparent pointer-events-none z-10">
        </div>
        <div
            class="absolute bottom-0 left-0 w-full h-10 bg-gradient-to-t from-gray90/10 to-transparent pointer-events-none z-10">
        </div>

        <div>
            <x-card-kategori-unitkerja titleFirst="Unit Kerja" titleSecond="Dinas Kominfo" bgColor="bg-primary100"
                titleFirstColor="text-white" titleSecondColor="text-secondary50" titleSize="text-h1M lg:text-h1" gap="lg:gap-4"
                titleMarginBottom="mb-10" :items="[
        ['image' => asset('storage/assets/unitkerja1.jpg'), 'text' => 'Sekretariat', 'link' => '/home/bidangsekretariat'],
        ['image' => asset('storage/assets/unitkerja1.jpg'), 'text' => 'Informasi dan Komunikasi Publik', 'link' => '/home/bidangsekretariat'],
        ['image' => asset('storage/assets/unitkerja2.jpg'), 'text' => 'Aplikasi dan Informatika', 'link' => '/home/bidangsekretariat'],
        ['image' => asset('storage/assets/unitkerja3.jpg'), 'text' => 'Data dan Statistik', 'link' => '/home/bidangsekretariat'],
        ['image' => asset('storage/assets/unitkerja4.jpg'), 'text' => 'Pengaduan dan Keamanan Informasi', 'link' => '/home/bidangsekretariat'],
    ]" />
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section class="bg-white relative px-[60px] py-16">
        <div class="w-full">
            <h2 class="px-14 text-h1M lg:text-h1 font-bold mb-4 text-right">
                Struktur <span class="text-primary50">Organisasi</span>
            </h2>
            <img src="/storage/assets/struktur-organisasi.png" alt="Struktur Organisasi"
                class="items-start object-scale-down w-full h-dvh">
        </div>
    </section>

    <!-- Pejabat Struktural -->
    <section class="bg-background relative py-10">

        <div>
            <h2 class="px-14 text-h1M lg:text-h1 font-bold text-left">
                <span class="text-black">Pejabat</span>
                <span class="text-primary50">Struktural</span>
            </h2>
        </div>
        <div class="px-14">
            <x-card-slider :rows="2">
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat1.jpg'" :name="'Sherlita Ratna Dewi Agustin, S.Si., M.IP'" :position="'Kepala Dinas'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat2.jpg'" :name="'Suharlina Kusumawardani, ST., MT'"
                        :position="'Sekretaris'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat3.jpg'" :name="'Ratna Diah Ayuningtyas, SE'"
                        :position="'Ka. Sub. Bagian Umum dan Kepegawaian'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat4.jpg'" :name="'Venus Vebryanan, S.STP'"
                        :position="'Ketua Tim Kerja Penyusunan Program dan Anggaran'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat5.jpg'" :name="'Tugirin, SE'" :position="'Ketua Tim Kerja Keuangan'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat6.jpg'" :name="'Putut Darmawan, S.E, MM'"
                        :position="'Kepala Bidang Informasi dan Komunikasi Publik'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat7.jpg'" :name="'Drs. Agung Sriono, SH, MM'"
                        :position="'Ketua Tim Kerja Layanan Informasi dan Pengaduan Masyarakat'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat8.jpg'" :name="'Dra. Siti Purwatiningsih, M.M'"
                        :position="'Ketua Tim Kerja Relasi Media dan Media Publik'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat9.jpg'" :name="'Eko Setiawan, S.I.Kom., M.Med.Kom'"
                        :position="'Ketua Tim Kerja Kemitraan Komunikasi Publik'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat10.jpg'" :name="'Lenny Martarina, S.E, MM, Ak, CA'"
                        :position="'Ketua Tim Kerja Penyusunan Konten Media'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat11.jpg'" :name="'Sofia Kurniawati, S.E., M.Si'"
                        :position="'Ketua Tim Kerja Manajemen Isu'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat12.jpg'" :name="'Gugi A Wicaksono, S.T, MM'"
                        :position="'Kepala Bidang Aplikasi Informatika'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat13.jpg'" :name="'Nofian Adi Prasetiyawan, S.Kom. M.T'" :position="'Ketua Tim Kerja Pusat Data'" />
                </div>
                <div class="h-auto">
                    <x-card-pejabat :image="'storage/assets/pejabat14.jpg'" :name="'Retno Yuni Widayaningsih, S.T., M.Medkom'" :position="'Ketua Tim Kerja Tata Kelola SPBE'" />
                </div>
            </x-card-slider>
    </section>

    <x-footer />
</body>

</html>