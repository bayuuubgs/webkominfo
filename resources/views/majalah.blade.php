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
                image="{{ asset('storage/assets/majalah.png') }}"
                title="Jatim Peringati Hari Lahir Pancasila 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah.png') }}"
                title="Jatim Peringati Hari Lahir Pancasila 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah.png') }}"
                title="Jatim Peringati Hari Lahir Pancasila 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah.png') }}"
                title="Jatim Peringati Hari Lahir Pancasila 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah.png') }}"
                title="Jatim Peringati Hari Lahir Pancasila 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah.png') }}"
                title="Jatim Peringati Hari Lahir Pancasila 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah.png') }}"
                title="Jatim Peringati Hari Lahir Pancasila 2024"
                date="11 Februari 2025 08:38"
                fontColor="text-gray70"
                link="{{ route('home.majalah.detail') }}"
        />
        <x-card-majalah-home
                image="{{ asset('storage/assets/majalah.png') }}"
                title="Jatim Peringati Hari Lahir Pancasila 2024"
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
                ['image' => asset('storage/assets/ahza.jpeg'), 'link' => route('home.berita')],
                ['image' => asset('storage/assets/ahza.jpeg'), 'link' => route('home.berita')],
                ['image' => asset('storage/assets/ahza.jpeg'), 'link' => route('home.berita')],
                ['image' => asset('storage/assets/ahza.jpeg'), 'link' => route('home.berita')]
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
