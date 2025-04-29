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

    <div class="flex justify-center py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 w-full max-w-screen-xl">
            <x-card-list-publikasi
                image="{{ asset('storage/assets/beritasetda1.jpg') }}"
                title="Guru Besar Unair Inovasikan Model Peningkatan Kualitas Hidup Anak Penderita Kanker"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Jatim Newsroom - Kanker anak merupakan salah satu tantangan yang besar dalam dunia kesehatan. Menurut..."
                ratio="3:2"
                link="{{ route('home.berita.detail') }}"
            />
            <x-card-list-publikasi
                image="{{ asset('storage/assets/beritasetda2.jpeg') }}"
                title="Pesan Rektor Unair Pada Lulusan ke-251, Pentingnya Adaptasi dan Belajar Sepanjang Hayat"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Jatim Newsroom – Rektor Universitas Airlangga (Unair) Surabaya berpesan pada lulusan periode..."
                ratio="3:2"
                link="{{ route('home.berita.detail') }}"
             />
            <x-card-list-publikasi
                image="{{ asset('storage/assets/beritasetda3.jpeg') }}"
                title="Bertemu Ikawangi Pusat, Bupati Ipuk Ajak Soliditas Bangun Banyuwangi"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Jatim Newsroom - Bupati Banyuwangi Ipuk Fiestiandani mengajak seluruh anggota Ikatan Keluarga Banyuwangi..."
                ratio="3:2"
                link="{{ route('home.berita.detail') }}"
             />
            <x-card-list-publikasi
                image="{{ asset('storage/assets/beritasetda4.jpeg') }}"
                title="Ribuan Pelari Ramaikan Wonorejo Run Challenge 2025, Dorong Sport Tourism Tulungagung"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Jatim Newsroom - Ribuan pelari dari berbagai daerah, bahkan mancanegara, memadati kawasan Waduk..."
                ratio="3:2"
                link="{{ route('home.berita.detail') }}"
            />
            <x-card-list-publikasi
                image="{{ asset('storage/assets/beritasetda5.jpg') }}"
                title="Perum Jasa Tirta I Targetkan 500 Ribu Meter Kubik Sedimen Terbuang dari Bendungan Wlingi dan Lodoyo"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Jatim Newsroom- Kegiatan flushing atau yang dikenal masyarakat sebagai pladu resmi dimulai di Bendunngan..."
                ratio="3:2"
                link="{{ route('home.berita.detail') }}"
                />
            <x-card-list-publikasi
                image="{{ asset('storage/assets/forda1.jpg') }}"
                title="Jatim Retreat 2025 Rampung, Gubernur Khofifah Tekankan Penguatan Karakter dan Integritas"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Jatim Newsroom - Jatim Retreat 2025 resmi berakhir pada Minggu (27/4/2025) di Pusat Pendidikan..."
                ratio="3:2"
                link="{{ route('home.berita.detail') }}"
            />
            <x-card-list-publikasi
                image="{{ asset('storage/assets/forda2.jpg') }}"
                title="Sejak 2020 Banyuwangi Tanam 1,2 Juta Pohon, Bupati Ipuk Terus Kolaborasi Cegah Lahan Kritis Lewat..."
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Jatim Newsroom - Bupati Banyuwangi, Ipuk Fiestiandani, mengajak berbagai pihak untuk berkolaborasi..."
                ratio="3:2"
                link="{{ route('home.berita.detail') }}"
            />
            <x-card-list-publikasi
                image="{{ asset('storage/assets/forda3.jpeg') }}"
                title="Ada Sekolah Rakyat Ala Kota Surabaya untuk Anak dari Keluarga Prasejahtera"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Jatim Newsroom - Program 1 Keluarga Miskin, 1 Sarjana yang diinisiasi Pemerintah Kota (Pemkot)"
                ratio="3:2"
                link="{{ route('home.berita.detail') }}"
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
                ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto')],
                ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto')],
                ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto')],
                ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto')]
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
