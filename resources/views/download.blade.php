<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Download</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-white">
    <x-header />
    <x-breadcrumb />

    <div class="px-5 md:px-16 py-5 w-full flex justify-center">
        <x-search-bar-publikasi judulHighlight="E-Document" :kategoriList="['Agenda Liputan', 'Pendidikan', 'Kesehatan']" :tagList="['#Kegiatan', '#Anggaran', '#Pemerintahan']" />
    </div>
    </div>

    <div class="flex justify-center px-5 md:px-16">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-5 w-full">
            <x-card-list-publikasi image="{{ asset('storage/assets/download1.png') }}"
                title="MEDIA PUBLIKASI LUAR RUANG HARI JADI KE-79 PROVINSI JAWA TIMUR" category="UMUM"
                date="11 Februari 2025 08:38"
                description="MEDIA PUBLIKASI LUAR RUANG HARI JADI KE-79 PROVINSI JAWA TIMUR"
                link="https://drive.google.com/drive/folders/1Wbw7imivQclHOopIizMSLwE-QMbyFmXj" 
                alt="Thumbnail Gambar Terkait"/>
            <x-card-list-publikasi image="{{ asset('storage/assets/download2.jpg') }}"
                title="PEDOMAN IDENTITAS VISUAL HARI JADI KE-79 PROVINSI JAWA TIMUR" category="UMUM"
                date="11 Februari 2025 08:38" description="PEDOMAN IDENTITAS VISUAL HARI JADI KE-79 PROVINSI JAWA TIMUR"
                link="https://drive.google.com/drive/folders/15vcaD9LXo0-cyiLKVdHzaFKkNdxqDES4" 
                alt="Thumbnail Gambar Terkait"/>
            <x-card-list-publikasi image="{{ asset('storage/assets/download3.jpeg') }}"
                title="BALIHO HARLAH PANCASILA 1 JUNI 2024" category="UMUM" date="11 Februari 2025 08:38"
                description="BALIHO HARLAH PANCASILA 1 JUNI 2024"
                link="https://drive.google.com/drive/folders/1CfQW7Z7MNmwLveJrFbVsMtzoY8CG4wSq" 
                alt="Thumbnail Gambar Terkait"/>
            <x-card-list-publikasi image="{{ asset('storage/assets/download4.jpeg') }}"
                title="BALIHO HARI OTODA TAHUN 2024" category="UMUM" date="11 Februari 2025 08:38"
                description="BALIHO HARI OTODA JAWA TIMUR TAHUN 2024"
                link="https://drive.google.com/drive/folders/1GMHbBmnA2ljRmR96XaN6NfYymkVxsHLm" 
                alt="Thumbnail Gambar Terkait"/>
            <x-card-list-publikasi image="{{ asset('storage/assets/download5.png') }}"
                title="BALIHO HARI SUMPAH PEMUDA 2022" category="UMUM" date="11 Februari 2025 08:38"
                description="Berikut adalah baliho Hari Sumpah Pemuda Tahun 2022 tingkat Provinsi Jawa Timur :"
                link="https://drive.google.com/drive/folders/12d0wOBwJuK8YPL1sj8a67dHlj03Bn_yF" 
                alt="Thumbnail Gambar Terkait"/>
            <x-card-list-publikasi image="{{ asset('storage/assets/download6.jpg') }}" 
                title="BALIHO HARI SANTRI 2022" category="UMUM" date="11 Februari 2025 08:38"
                description="Berikut Baliho Hari Santri 2022 Tingkat Provinsi Jawa Timur"
                link="https://drive.google.com/drive/folders/1GVCEg0iZIE-di9uMzC__IBQrzooRv6Kn" 
                alt="Thumbnail Gambar Terkait"/>
            <x-card-list-publikasi image="{{ asset('storage/assets/download7.jpg') }}"
                title="Baliho Hari Jadi ke-77 Jatim" category="UMUM" date="11 Februari 2025 08:38"
                description="Bahan publikasi Hari Jadi ke-77 Provinsi Jawa Timur"
                link="https://drive.google.com/drive/folders/1XV2kKylFsoySmGrg1l40rud6mdSG0glK" 
                alt="Thumbnail Gambar Terkait"/>
            <x-card-list-publikasi image="{{ asset('storage/assets/download1.png') }}"
                title="MEDIA PUBLIKASI LUAR RUANG HARI JADI KE-79 PROVINSI JAWA TIMUR" category="UMUM"
                date="11 Februari 2025 08:38"
                description="MEDIA PUBLIKASI LUAR RUANG HARI JADI KE-79 PROVINSI JAWA TIMUR"
                link="https://drive.google.com/drive/folders/1Wbw7imivQclHOopIizMSLwE-QMbyFmXj" 
                alt="Thumbnail Gambar Terkait"/>
        </div>
    </div>

    <div class="flex justify-center gap-4 pt-6 pb-6">
        <x-button text="Sebelumnya" variant="blue" type="button" />
        <x-button text="Selanjutnya" variant="blue" type="button" />
    </div>

    <div class="bg-background px-5 md:px-16">
        <x-card-kategori-unitkerja titleFirst="Rekomendasi" titleSecond="Kategori" :items="[
        ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto'), 'alt' => 'Thumbnail Gambar Terkait'],
        ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto'), 'alt' => 'Thumbnail Gambar Terkait'],
        ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto'), 'alt' => 'Thumbnail Gambar Terkait'],
        ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto'), 'alt' => 'Thumbnail Gambar Terkait'],
        ['image' => asset('storage/assets/unitkerja.jpg'), 'link' => route('home.galerifoto'), 'alt' => 'Thumbnail Gambar Terkait'],
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