<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Berita</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-white">
    <x-header />
    <x-breadcrumb />

    <div class="pt-6 flex justify-center">
            <x-search-bar-publikasi
                judulHighlight="Berita"
                :kategoriList="['Agenda Liputan', 'Pendidikan', 'Kesehatan']"
                :tagList="['#Kegiatan', '#Anggaran', '#Pemerintahan']"
            />
        </div>
    </div>

    <section class="bg-primary100 relative mt-[15px]">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header title="Berita SETDA /" highlight="Pemerintah Daerah" buttonText="Selengkapnya"
                buttonVariant="white" type="white" buttonHref="{{ route('home.index') }}" />

            <x-card-slider :rows="1">
                <div class="min-w-[404px] h-auto">
                    <x-card-berita
                        image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="{{ route('home.berita.detail') }}" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita
                        image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita
                        image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita
                        image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita
                        image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita
                        image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita
                        image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita
                        image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
                <div class="min-w-[404px] h-auto">
                    <x-card-berita
                        image="{{ asset('storage/assets/card-bg-biru.png') }}"
                        title="Kominfo Tulungagung Target Percepat Layanan Informasi dan Pengaduan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH"
                        description="Berdasarkan hasil monitoring dan evaluasi (monev) yang disampaikan Dinas Komunikasi dan Informatika (Kominfo) Provinsi Jawa Timur, Pemkab Tulungagung masih perlu memperbaiki layanan informasi publik dan pengaduan masyarakat."
                        link="https://www.instagram.com/__bayubgs/" type="secondary" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <div class="flex justify-center py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 w-full max-w-screen-xl">
            <!-- Card 1 -->
            <x-card-list-publikasi
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
                ratio="3:2"
            />

            <!-- Card 2 -->
            <x-card-list-publikasi
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
                ratio="3:2"
             />

            <!-- Card 3 -->
            <x-card-list-publikasi
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
                ratio="3:2"
             />

            <!-- Card 4 -->
            <x-card-list-publikasi
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
                ratio="3:2"
            />

            <!-- Card 5 -->
            <x-card-list-publikasi
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
                ratio="3:2"
                />

            <!-- Card 6 -->
            <x-card-list-publikasi
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
                ratio="3:2"
            />

            <!-- Card 7 -->
            <x-card-list-publikasi
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
                ratio="3:2"
            />

            <!-- Card 8 -->
            <x-card-list-publikasi
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
                ratio="3:2"
            />
            </div>
        </div>

     <div class="flex justify-center gap-4 pt-6 pb-6">
        <x-button
            text="Sebelumnya"
            variant="blue"
            type="button"
        />
        <x-button
            text="Selanjutnya"
            variant="blue"
            type="button"
        />
    </div>

        <x-card-kategori-unitkerja
            titleFirst="Rekomendasi"
            titleSecond="Kategori"
            :items="[
                ['image' => asset('storage/assets/ahza.jpeg')],
                ['image' => asset('storage/assets/ahza.jpeg')],
                ['image' => asset('storage/assets/ahza.jpeg')],
                ['image' => asset('storage/assets/ahza.jpeg')],
            ]"
        />
            <div class="flex justify-center pt-6">
                <x-footer/>
            </div>
        </body>
        </html>
