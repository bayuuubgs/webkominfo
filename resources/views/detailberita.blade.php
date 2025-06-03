<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-background">
    <x-header />

    <x-breadcrumb />



    <section>
        <div class="min-h-screen p-6">
            <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-6">
                {{-- Konten Utama --}}
                <div class="w-full max-w-[850px] space-y-4 bg-gray10 p-6 rounded-xl">
                    <!-- <img class="rounded-xl" src="{{ asset('storage/assets/detailberita2.png') }}" alt="Foto Berita">
                    <p class="text-xs text-gray-500">Menteri Komunikasi dan Digital (Menkomdigri), Meutya Hafid, bersama jajaran Kemkomdigri RI. Foto: dok. Kemkomdigri</p> -->

                    <div class="space-y-[10px] text-p leading-7 text-gray-800 font-jakarta font-medium">
                        <p><strong>Jatim Newsroom</strong> - Menteri Komunikasi dan Digital (Menkomdigi), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence Action Summit (AIAS) yang berlangsung di Paris, Prancis pada 10-11 Februari 2025.</p>

                        <p>Melalui siaran pers Menkkomdigi, Sabtu (8/2/2025), disebutkan bahwa Konferensi tersebut merupakan forum internasional yang mempertemukan perwakilan lebih dari 100 negara, termasuk kepala negara, menteri, CEO perusahaan, dan pimpinan organisasi internasional.</p>

                        <p>“AIAS bertujuan untuk mendorong diskusi dan langkah nyata terkait perkembangan dan tata kelola AI di tingkat global. Forum itu juga menjadi lanjutan dari AI Safety Summit yang digelar di Inggris pada November 2023 dan AI Seoul Summit (AISS) di Korea Selatan pada Mei 2024 lalu,” ujar Menkomdigi.</p>

                        <p>Sebelumnya Presiden Prancis, Emmanuel Macron, telah mengirimkan undangan kepada Presiden Republik Indonesia, Prabowo Subianto untuk hadir secara langsung pada AIAS, yang merupakan pertemuan tingkat tinggi para Kepala Negara.</p>

                        <p>Selain menghadiri AIAS, Menkomdigi juga diminta oleh UNESCO untuk mempresentasikan metodologi penilaian kesiapan atau "readiness assessment method" pada acara sampingan (side event) yang akan digelar pada 10 Februari 2025.</p>

                        <img class="rounded-xl" src="{{ asset('storage/assets/detailberita2.png') }}" alt="Foto Berita">
                        <p class="text-xs text-gray-500">Menteri Komunikasi dan Digital (Menkomdigri), Meutya Hafid, bersama jajaran Kemkomdigri RI. Foto: dok. Kemkomdigri</p>

                        <p><strong>Rangkaian Acara AIAS 2025 di Paris</strong><br>
                            Rangkaian acara AIAS dimulai pada 6 Februari 2025, dengan perjamuan peserta di Elysee Palace dan acara High Level Segment di Grand Palais. Selama beberapa hari, berbagai diskusi dan acara akan digelar, termasuk Science Day pada 6-7 Februari, Cultural Weekend pada 8-9 Februari, serta Diskusi Meja Bundar dan Jamuan Kepala Negara pada 10 Februari. Puncak acara akan dilanjutkan dengan Leaders Plenary dan Penutupan pada 11 Februari.</p>

                        <p>Peluang untuk terlibat dalam ekosistem AI global akan semakin terbuka apabila Indonesia memiliki regulasi yang tepat dalam pengembangan teknologi tersebut. Kolaborasi antara pemerintah, industri, akademisi, dan masyarakat sangat penting untuk menciptakan kebijakan yang optimal dalam penggunaan dan pengembangan AI.</p>

                        <p>"Keterlibatan proaktif seluruh pemangku kepentingan dalam regulasi dan pengembangan AI sangat penting, sehingga Indonesia dapat memanfaatkan potensi teknologi AI yang dapat memberikan manfaat maksimal bagi masyarakat dan sektor-sektor terkait," ujar Menkomdigi.</p>

                        <p>Sebagai langkah awal, Kementerian Komunikasi dan Digital (Kemkomdigi) juga telah menginisiasi Dialog Kebijakan AI yang membahas tantangan serta potensinya di berbagai sektor seperti e-commerce, perbankan, kesehatan, pendidikan, hingga keberlanjutan.</p>

                        <p>Sektor e-commerce Indonesia yang diproyeksikan mencapai USD150 miliar pada 2030 harus siap mengadopsi AI untuk memberikan manfaat yang lebih besar bagi semua pihak.</p>

                        <p>Dengan pengaturan yang tepat, Menkomdigi meyakini Indonesia akan menjadi pemain utama dalam ekosistem teknologi AI global. Sebagai negara yang aktif berpartisipasi dalam forum internasional seperti AIAS, Indonesia dapat memastikan bahwa perkembangan teknologi ini berjalan seiring dengan kebutuhan dan tantangan yang dihadapi dunia, termasuk dalam hal regulasi dan pemanfaatannya.</p>

                        <p><strong>#Kemkomdigi RI</strong></p>
                    </div>

                </div>

                {{-- Berita Terkait --}}
                    <div class="flex flex-col">
                        <x-card-lainnya title="Berita" highlight="Lainnya">
                            <x-card-list-lainnya
                                image="{{ asset('storage/assets/videolainnya.png') }}"
                                title="INFO JAWA TIMUR MINGGU KE-2 BULAN FEBRUARI | 14 FEBRUARI 2025"
                                date="14 Februari 2025 18:12"
                                category="UMUM" 
                                alt="Thumbnail Gambar Terkait"/>
                            <x-card-list-lainnya
                                image="{{ asset('storage/assets/videolainnya3.png') }}"
                                title="INFO JAWA TIMUR MINGGU KE-3 BULAN FEBRUARI | 22 FEBRUARI 2025"
                                date="22 Februari 2025 09:26"
                                category="WAKIL GUBERNUR" 
                                alt="Thumbnail Gambar Terkait"/>
                            <x-card-list-lainnya
                                image="{{ asset('storage/assets/videolainnya2.png') }}"
                                title="Lapor SPT Tahunan Hari Ini, Lebih Awal Lebih Nyaman"
                                date="9 Februari 2025 10:49"
                                category="GUBERNUR" 
                                alt="Thumbnail Gambar Terkait"/>
                            <x-card-list-lainnya
                                image="{{ asset('storage/assets/videolainnya.png') }}"
                                title="INFO JAWA TIMUR MINGGU KE-5 BULAN JANUARI 2025 | 31 Januari"
                                date="1 Februari 2025 15:04"
                                category="SETDA" 
                                alt="Thumbnail Gambar Terkait"/>
                                <x-card-list-lainnya
                                image="{{ asset('storage/assets/videolainnya.png') }}"
                                title="INFO JAWA TIMUR MINGGU KE-2 BULAN FEBRUARI | 14 FEBRUARI 2025"
                                date="14 Februari 2025 18:12"
                                category="UMUM" 
                                alt="Thumbnail Gambar Terkait"/>
                            <x-card-list-lainnya
                                image="{{ asset('storage/assets/videolainnya3.png') }}"
                                title="INFO JAWA TIMUR MINGGU KE-3 BULAN FEBRUARI | 22 FEBRUARI 2025"
                                date="22 Februari 2025 09:26"
                                category="WAKIL GUBERNUR" 
                                alt="Thumbnail Gambar Terkait"/>
                            <x-card-list-lainnya
                                image="{{ asset('storage/assets/videolainnya2.png') }}"
                                title="Lapor SPT Tahunan Hari Ini, Lebih Awal Lebih Nyaman"
                                date="9 Februari 2025 10:49"
                                category="GUBERNUR" 
                                alt="Thumbnail Gambar Terkait"/>
                            <x-card-list-lainnya
                                image="{{ asset('storage/assets/videolainnya.png') }}"
                                title="INFO JAWA TIMUR MINGGU KE-5 BULAN JANUARI 2025 | 31 Januari"
                                date="1 Februari 2025 15:04"
                                category="SETDA" 
                                alt="Thumbnail Gambar Terkait"/>
                        </x-card-lainnya>
                    </div>
            </div>
        </div>
    </section>
    <x-footer/>
</body>
</html>
