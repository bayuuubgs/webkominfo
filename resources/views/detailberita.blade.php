<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-background font-jakarta text-pM lg:text-p">
    <x-header />

    <x-breadcrumb />



    <section class="py-5 md:py-10 font-responsive">
        <div class="px-5 md:px-16 grid grid-cols-1 xl:grid-cols-3 gap-4 lg:ml-0">
            {{-- Konten Utama --}}
            <div class="lg:col-span-2 space-y-5 flex flex-col bg-gray10 p-4 md:p-5 rounded-xl shadow-md">

                <div class="space-y-2 flex flex-col rounded-md">
                    <p class="text-gray70 text-h1M md:text-h1">Menkomdigi Wakili Presiden RI di
                        AI
                        Action Summit Paris</p>
                    <p class="text-gray50 text-justify"><strong>Tayang:</strong> Selasa, 3 Juni 2025 10:31 WIB</p>
                </div>

                <div class="space-y-3 flex flex-col rounded-md">
                    <img class="rounded-t-md md:rounded-lg" src="{{ asset('storage/assets/detailberita2.png') }}"
                        alt="Foto Berita">
                    <p class="text-gray50 text-center italic">Menteri Komunikasi dan Digital (Menkomdigri), Meutya
                        Hafid, bersama jajaran
                        Kemkomdigri RI. Foto: dok. Kemkomdigri</p>
                </div>


                <div class="space-y-5 text-gray70 text-justify">
                    <p><strong>Jatim Newsroom</strong> - Menteri Komunikasi dan Digital (Menkomdigi), Meutya Hafid,
                        mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan
                        atau Artificial Intelligence Action Summit (AIAS) yang berlangsung di Paris, Prancis pada 10-11
                        Februari 2025.</p>

                    <p>Melalui siaran pers Menkkomdigi, Sabtu (8/2/2025), disebutkan bahwa Konferensi tersebut merupakan
                        forum internasional yang mempertemukan perwakilan lebih dari 100 negara, termasuk kepala negara,
                        menteri, CEO perusahaan, dan pimpinan organisasi internasional.</p>

                    <p>“AIAS bertujuan untuk mendorong diskusi dan langkah nyata terkait perkembangan dan tata kelola AI
                        di tingkat global. Forum itu juga menjadi lanjutan dari AI Safety Summit yang digelar di Inggris
                        pada November 2023 dan AI Seoul Summit (AISS) di Korea Selatan pada Mei 2024 lalu,” ujar
                        Menkomdigi.</p>

                    <p>Sebelumnya Presiden Prancis, Emmanuel Macron, telah mengirimkan undangan kepada Presiden Republik
                        Indonesia, Prabowo Subianto untuk hadir secara langsung pada AIAS, yang merupakan pertemuan
                        tingkat tinggi para Kepala Negara.</p>

                    <p>Selain menghadiri AIAS, Menkomdigi juga diminta oleh UNESCO untuk mempresentasikan metodologi
                        penilaian kesiapan atau "readiness assessment method" pada acara sampingan (side event) yang
                        akan digelar pada 10 Februari 2025.</p>

                    <p><strong>Rangkaian Acara AIAS 2025 di Paris</strong><br>
                        Rangkaian acara AIAS dimulai pada 6 Februari 2025, dengan perjamuan peserta di Elysee Palace dan
                        acara High Level Segment di Grand Palais. Selama beberapa hari, berbagai diskusi dan acara akan
                        digelar, termasuk Science Day pada 6-7 Februari, Cultural Weekend pada 8-9 Februari, serta
                        Diskusi Meja Bundar dan Jamuan Kepala Negara pada 10 Februari. Puncak acara akan dilanjutkan
                        dengan Leaders Plenary dan Penutupan pada 11 Februari.</p>

                    <p>Peluang untuk terlibat dalam ekosistem AI global akan semakin terbuka apabila Indonesia memiliki
                        regulasi yang tepat dalam pengembangan teknologi tersebut. Kolaborasi antara pemerintah,
                        industri, akademisi, dan masyarakat sangat penting untuk menciptakan kebijakan yang optimal
                        dalam penggunaan dan pengembangan AI.</p>

                    <p>"Keterlibatan proaktif seluruh pemangku kepentingan dalam regulasi dan pengembangan AI sangat
                        penting, sehingga Indonesia dapat memanfaatkan potensi teknologi AI yang dapat memberikan
                        manfaat maksimal bagi masyarakat dan sektor-sektor terkait," ujar Menkomdigi.</p>

                    <p>Sebagai langkah awal, Kementerian Komunikasi dan Digital (Kemkomdigi) juga telah menginisiasi
                        Dialog Kebijakan AI yang membahas tantangan serta potensinya di berbagai sektor seperti
                        e-commerce, perbankan, kesehatan, pendidikan, hingga keberlanjutan.</p>

                    <p>Sektor e-commerce Indonesia yang diproyeksikan mencapai USD150 miliar pada 2030 harus siap
                        mengadopsi AI untuk memberikan manfaat yang lebih besar bagi semua pihak.</p>

                    <p>Dengan pengaturan yang tepat, Menkomdigi meyakini Indonesia akan menjadi pemain utama dalam
                        ekosistem teknologi AI global. Sebagai negara yang aktif berpartisipasi dalam forum
                        internasional seperti AIAS, Indonesia dapat memastikan bahwa perkembangan teknologi ini berjalan
                        seiring dengan kebutuhan dan tantangan yang dihadapi dunia, termasuk dalam hal regulasi dan
                        pemanfaatannya.</p>

                    <p><strong>#Kemkomdigi RI</strong></p>
                </div>

            </div>

            {{-- Berita Terkait --}}
            <div class="flex flex-col">
                <x-card-lainnya title="Berita" highlight="Lainnya">
                    {{-- Berita Gubernur --}}
                    <x-card-list-lainnya image="{{ asset('storage/assets/gubernur_1.jpg') }}"
                        title="Pemprov Jatim Terus Dekatkan Layanan bagi Warga Kepulauan" date="31 Mei 2025 17:29:32"
                        category="GUBERNUR" alt="Berita Gubernur" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/gubernur_2.jpg') }}"
                        title="Gubernur Khofifah : Targetkan Dividen Rp.150 M dari BPR Jatim Usai Suntikan Modal Rp.500 M"
                        date="28 Mei 2025 21:27:33" category="GUBERNUR" alt="Berita Gubernur" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/gubernur_3.jpg') }}"
                        title="Peringati HLUN 2025, Gubernur Jatim Kunjungi Panti Werdha Usia Anugerah di Surabaya"
                        date="29 Mei 2025 16:25:41" category="GUBERNUR" alt="Berita Gubernur" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/gubernur4.jpg') }}"
                        title="Gubernur Jatim Resmi Lantik Bupati-Wakil Bupati Magetan Periode 2025-2030"
                        date="24 Mei 2025 7:48:50" category="GUBERNUR" alt="Berita Gubernur" />

                    {{-- Berita Wakil Gubernur --}}
                    <x-card-list-lainnya image="{{ asset('storage/assets/wagub1.jpg') }}"
                        title="Wagub Emil Dardak Paparkan Konsep Jatim Gerbang Baru Nusantara di Halal Bihalal ASN Pemprov"
                        date="8 April 2025 15:34:15" category="WAKIL GUBERNUR" alt="Berita Wakil Gubernur" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/wagub2.jpeg') }}"
                        title="Wagub Emil Ajak DPD REI Jatim Dorong Pertumbuhan Ekonomi Lewat Multiplier Effect Sektor Properti"
                        date="13 Maret 2025 23:25:09" category="WAKIL GUBERNUR" alt="Berita Wakil Gubernur" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/wagub3.jpeg') }}"
                        title="Wagub Emil Komitmen Dorong Pelaku Usaha Menengah Lebih Maju"
                        date="12 Maret 2025 21:32:21" category="WAKIL GUBERNUR" alt="Berita Wakil Gubernur" />
                    <x-card-list-lainnya image="{{ asset('storage/assets/wagub4.jpg') }}"
                        title="Wagub Emil : Perguruan Tinggi Jadi Pendorong Kemajuan Ekonomi Syariah di Jatim"
                        date="25 Januari 2024 10:47:34" category="WAKIL GUBERNUR" alt="Berita Wakil Gubernur" />
                </x-card-lainnya>
            </div>

        </div>
        </div>
    </section>
    <x-footer />
</body>

</html>