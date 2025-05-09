<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Video</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-background">
    <x-header />

    <x-breadcrumb />

    <section class="py-[40px] font-responsive">
        <div class="px-5 md:px-16 grid grid-cols-1 lg:grid-cols-3 gap-4 lg:ml-0">
            <div class="lg:col-span-2 flex flex-col pt-[8px]">
                <x-video-container video-id="s18KVkb4rLE"
                    title="INFO JAWA TIMUR MINGGU KE-4 BULAN MARET I 28 MARET 2025"
                    description="INFO JATIM edisi Minggu ke-4 bulan Maret 2025 menyajikan beragam kegiatan di lingkungan Pemprov Jatim dalam sepekan, di antaranya :
                            1. Kominfo berbagi.
                            2. Laporan Pansus pertanggungjawaban Gubernur Jatim tentang anggaran 2024.
                            3. Seminar Pelatihan Kepemimpinan Administrator (PKA) jatim angkatan I 2025.
                            4. Launching Kalender Event Unggulan 2025 di Gedung Negara Grahadi.
                            5. Lailatul Qiroah di Masjid Nasional Al Al-Akbar Surabaya.
                            Demikian beragam informasi dalam sepekan. Semoga informasi tersebut bermanfaat dan mengedukasi."
                    published-at="11 Februari 2025 08:38" category="SETDA / PERANGKAT DAERAH" />
            </div>
            <div class="flex flex-col pt-[23px]">
                <x-card-lainnya title="Video" highlight="Lainnya">
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-2 BULAN FEBRUARI | 14 FEBRUARI 2025"
                        date="14 Februari 2025 18:12" category="UMUM" link="{{ route('home.video.detail') }}" 
                        alt="Thumbnail Gambar Terkait"/>
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya3.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-3 BULAN FEBRUARI | 22 FEBRUARI 2025"
                        date="22 Februari 2025 09:26" category="WAKIL GUBERNUR"
                        link="{{ route('home.video.detail') }}" 
                        alt="Thumbnail Gambar Terkait"/>
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya2.png') }}"
                        title="Lapor SPT Tahunan Hari Ini, Lebih Awal Lebih Nyaman" date="9 Februari 2025 10:49"
                        category="GUBERNUR" link="{{ route('home.video.detail') }}" 
                        alt="Thumbnail Gambar Terkait"/>
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-5 BULAN JANUARI 2025 | 31 Januari"
                        date="1 Februari 2025 15:04" category="SETDA" link="{{ route('home.video.detail') }}" 
                        alt="Thumbnail Gambar Terkait"/>
                    <x-card-list-lainnya image="{{ asset('storage/assets/videolainnya.png') }}"
                        title="INFO JAWA TIMUR MINGGU KE-5 BULAN JANUARI 2025 | 31 Januari"
                        date="1 Februari 2025 15:04" category="SETDA" link="{{ route('home.video.detail') }}" 
                        alt="Thumbnail Gambar Terkait"/>
                </x-card-lainnya>
            </div>
        </div>
    </section>

    <div class="flex justify-center pt-6">
        <x-footer/>
    </div>

</body>
</html>
