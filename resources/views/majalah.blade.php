<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Majalah</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-white">
    <x-header />
    <x-breadcrumb />

    <div class="pt-6 flex justify-center">
            <x-search-bar-publikasi
                judulHighlight="Majalah"
                :kategoriList="['Agenda Liputan', 'Pendidikan', 'Kesehatan']"
                :tagList="['#Kegiatan', '#Anggaran', '#Pemerintahan']"
            />
        </div>
    </div>

    <div class="flex justify-center py-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 w-full max-w-screen-xl">
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah1.jpg') }}"
                title="MAJALAH POTENSI JAWA TIMUR EDISI 156 JANUARI - FEBRUARI 2025"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah2.jpeg') }}"
                title="MAJALAH POTENSI EDISI 155 AGUSTUS 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah3.jpg') }}"
                title="MAJALAH POTENSI EDISI 153 JUNI 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah4.jpg') }}"
                title="MAJALAH POTENSI EDISI 152 MEI 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah5.jpg') }}"
                title="MAJALAH POTENSI EDISI 155 APRIL 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah6.jpg') }}"
                title="MAJALAH POTENSI JAWA TIMUR EDISI 149 SEPTEMBER 2022"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah7.jpg') }}"
                title="MAJALAH POTENSI EDISI 148 APRIL 2023"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah8.jpeg') }}"
                title="MAJALAH POTENSI JAWA TIMUR EDISI 147 MARET 2023"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
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
                ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.berita')],
                ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.berita')],
                ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.berita')],
                ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.berita')]
            ]"
        />

        <div class="flex justify-center">
            <x-tagarpopuler :tags="[
                    ['label' => 'PemkotSurabaya', 'url' => ''],
                    ['label' => 'GubernurJatim', 'url' => ''],
                    ['label' => 'DPRDJatim', 'url' => ''],
                    ['label' => 'KominfoJatim', 'url' => ''],
                    ['label' => 'UPNVJT', 'url' => ''],
                    ['label' => 'Mojokerto', 'url' => ''],
                    ['label' => 'KabLamongan', 'url' => ''],
                    ['label' => 'Bojonegoro', 'url' => ''],
                ]"
            />
        </div>

        <div class="flex justify-center pt-6">
                <x-footer/>
            </div>
        </body>
        </html>
