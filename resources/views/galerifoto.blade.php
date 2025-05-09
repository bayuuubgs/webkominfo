<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Galeri Foto</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-white">
    <x-header />
    <x-breadcrumb />

    <div class="px-5 md:px-16 py-5 w-full flex justify-center">
        <x-search-bar-publikasi judulHighlight="Galeri Foto" :kategoriList="['Agenda Liputan', 'Pendidikan', 'Kesehatan']" :tagList="['#Kegiatan', '#Anggaran', '#Pemerintahan']" />
    </div>
    </div>

    <div class="flex justify-center px-5 md:px-16">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-5 w-full">
            <x-card-list-publikasi image="{{ asset('storage/assets/galeri1.jpeg') }}"
                title="Mandiri U20 Challenge Series 2025" category="UMUM" date="11 Februari 2025 08:38"
                description="Indonesia U20 vs Suriah U20 pada pertandingan Mandiri U20 Challenge Series 2025, Senin, 27/1/2025. di Stadion Gelora..."
                ratio="3:2" link="{{ route('home.galerifoto.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/galeri2.jpg') }}" title="PON XXI Aceh-Sumut 2024"
                category="UMUM" date="11 Februari 2025 08:38" description="Cabang Olahraga Sepak Bola Putra Jawa Timur"
                ratio="3:2" link="{{ route('home.galerifoto.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/galeri3.jpg') }}" title="PON XXI Aceh-Sumut 2024"
                category="UMUM" date="11 Februari 2025 08:38"
                description="Cabang Olahraga Tenis Lapangan Beregu Putra Jawa Timur" ratio="3:2"
                link="{{ route('home.galerifoto.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/galeri4.jpeg') }}"
                title="Kadis Kominfo Lepas Kontingen E-Sport Jatim" category="UMUM" date="11 Februari 2025 08:38"
                description="Kepala Dinas Komunikasi dan Informatika Provinsi Jawa Timur (sedang berdiri) memberikan arahan dan semangat kepada..."
                ratio="3:2" link="{{ route('home.galerifoto.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/galeri5.jpg') }}"
                title="Grand Final Kerapan Sapi Piala Presiden Tahun 2024" category="UMUM" date="11 Februari 2025 08:38"
                description="Grand Final Kerapan Sapi Piala Presiden Tahun 2024 di Stadion Kerapan Sapi R.M Noer Bangkalan, Minggu 1 September 2024..."
                ratio="3:2" link="{{ route('home.galerifoto.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/galeri6.jpg') }}"
                title="Pj Gubernur Jawa Timur Lakukan Penandatangan Berita Acara Pelantikan Penjabat Kepala Daerah"
                category="UMUM" date="11 Februari 2025 08:38"
                description="Seorang rohaniawan (kiri) mengambil sumpah jabatan pada acara pelantikan dua penjabat (Pj) kepala daerah di Gedung..."
                ratio="3:2" link="{{ route('home.galerifoto.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/galeri7.jpg') }}"
                title="Peresmian Bus Trans Jatim Koridor IV" category="UMUM" date="11 Februari 2025 08:38"
                description="Pejabat (Pj) Gubernur Jawa Timur, Adhy Karyono (kanan) memecahkan kendi pada acara peresmian operasional Bus..."
                ratio="3:2" link="{{ route('home.galerifoto.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/galeri8.jpg') }}" title="Peresmian Bus Trans Jatim"
                category="UMUM" date="11 Februari 2025 08:38"
                description="Penjabat (Pj) Gubernur Jawa Timur, Adhy Karyono memberikan sambutan pada peresmian operasional Bus Trans Jatim"
                ratio="3:2" link="{{ route('home.galerifoto.detail') }}" />
        </div>
    </div>

    <div class="flex justify-center gap-4 pt-6 pb-6">
        <x-button text="Sebelumnya" variant="blue" type="button" />
        <x-button text="Selanjutnya" variant="blue" type="button" />
    </div>

    <div class="bg-background px-5 md:px-16">
        <x-card-kategori-unitkerja titleFirst="Rekomendasi" titleSecond="Kategori" :items="[
        ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto')],
        ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto')],
        ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto')],
        ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto')],
        ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto')]
    ]" />
    </div>

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
    ]" />
    </div>

    <div class="flex justify-center pt-6">
        <x-footer />
    </div>
</body>

</html>