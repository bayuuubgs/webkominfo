<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Video</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-white">
    <x-header />
    <x-breadcrumb />

    <div class="px-5 md:px-16 py-5 w-full flex justify-center">
        <x-search-bar-publikasi judulHighlight="Video" :kategoriList="['Agenda Liputan', 'Pendidikan', 'Kesehatan']"
            :tagList="['#Kegiatan', '#Anggaran', '#Pemerintahan']" />
    </div>
    </div>

    <div class="flex justify-center px-5 md:px-16">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-5 w-full">
            <x-card-list-publikasi image="{{ asset('storage/assets/video4.jpg') }}"
                title="INFO JAWA TIMUR MINGGU KE-4 BULAN MARET I 28 MARET 2025" category="UMUM"
                date="28 Maret 2025 08:38"
                description="INFO JATIM edisi Minggu ke-4 bulan Maret 2025 menyajikan beragam kegiatan di lingkungan Pemprov Jatim dalam sepekan"
                link="{{ route('home.video.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/video1.jpg') }}"
                title="INFO JATIM EDISI MINGGU KE-2 BULAN APRIL | 18 APRIL 2025" category="UMUM"
                date="11 Februari 2025 08:38"
                description="Kilas Informasi Kegiatan Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah Provinsi Jawa Timur. Edisi Pekan Ke-2"
                link="{{ route('home.video.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/video2.jpg') }}"
                title="INFO JATIM EDISI MINGGU KE-1 BULAN APRIL 2025" category="UMUM" date="11 Februari 2025 08:38"
                description="INFO JATIM EDISI MINGGU KE-1 BULAN APRIL 2025" link="{{ route('home.video.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/video3.jpg') }}"
                title="INFO JAWA TIMUR MINGGU KE-4 BULAN MARET I 28 MARET 2025" category="UMUM"
                date="11 Februari 2025 08:38"
                description="Kilas Informasi Kegiatan Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah Provinsi Jawa Timur. Edisi Pekan Ke-4"
                link="{{ route('home.video.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/video5.jpg') }}"
                title="INFO JAWA TIMUR MINGGU KE-3 BULAN MARET I 22 MARET 2025" category="UMUM"
                date="11 Februari 2025 08:38"
                description="Kilas Informasi Kegiatan Pj. Gubernur Jawa Timur dan Kegiatan di Lingkungan Pemerintah Provinsi Jawa Timur. Edisi Pekan Ke-3"
                link="{{ route('home.video.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/video6.jpg') }}"
                title="Kesiapan Angkutan Laut dan Udara dalam Menghadapi Libur Lebaran 2025" category="UMUM"
                date="11 Februari 2025 08:38"
                description="#SobatJatim, lebaran sudah di depan mata, dan seperti biasa, momen ini identik dengan tradisi mudik."
                link="{{ route('home.video.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/video7.jpg') }}"
                title="Mudik Aman dan Nyaman, Ini Peran Dishub dan BPTD Kelas II Jatim?" category="UMUM"
                date="11 Februari 2025 08:38"
                description="Sobat, Lebaran bukan sekadar waktu untuk bersilaturahmi, tapi juga salah satu tradisi budaya yang sangat mendalam bagi"
                link="{{ route('home.video.detail') }}" />
            <x-card-list-publikasi image="{{ asset('storage/assets/video8.jpg') }}"
                title="Kereta Siap Jalan! Kesiapan PT KAI Sambut Mudik Lebaran" category="UMUM"
                date="11 Februari 2025 08:38"
                description="Tamu podcast kita kali sangat luar biasa tentunya, yaitu Executive Vice Presiden PT KAI Daops 8 Surabaya, Bapak Wisnu"
                link="{{ route('home.video.detail') }}" />
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
