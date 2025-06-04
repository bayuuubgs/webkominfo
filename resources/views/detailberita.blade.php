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
                    <p class="text-gray70 text-h1M md:text-h1">Plt Gubernur Jatim Beri Hadiah Laptop Animator Game Roblox Asal Blitar</p>
                    <p class="text-gray50 text-justify"><strong>Tayang: </strong>2 Juni 2025 22:04:41 </p>
                </div>

                <div class="space-y-3 flex flex-col rounded-md">
                    <img class="rounded-t-md md:rounded-lg" src="{{ asset('storage/assets/detailberita1.jpeg') }}"
                        alt="Foto Berita">
                    <p class="text-gray50 text-center italic">Pelaksana Tugas (Plt) Gubernur Jawa Timur, Emil Elestianto Dardak, menyambangi rumah sekaligus mengapresiasi salah satu siswa berprestasi dari MTsN 1 Kota Blitar, Al Divi Rarindrayana, di Jalan Kenari, Kelurahan Plosorekep,Senin (2/6/2025) Foro: rafli JNR</p>
                </div>


                <div class="space-y-5 text-gray70 text-justify">
                    <p><strong>Jatim Newsroom</strong> - Pelaksana Tugas (Plt) Gubernur Jawa Timur, Emil Elestianto Dardak, menyambangi rumah sekaligus mengapresiasi salah satu siswa berprestasi dari MTsN 1 Kota Blitar, Al Divi Rarindrayana, di Jalan Kenari, Kelurahan Plosorekep,Senin (2/6/2025)</p>

                    <p>Sebagai bentuk apresiasi dan rasa bangga, Emil memberikan hadiah berupa laptop kepada Al Divi untuk menunjang kegiatannya sebagai game animator. Selain itu, Google Indonesia juga memberikan hadiah berupa Galaxy Tab yang diserahkan oleh Emil kepada Al Divi./p>

                    <p>Didampingi Wali Kota Blitar Syauqul Muhibbin, Kepala Dinas Pendidikan Jatim Aries Agung Paewai, dan Kepala Dinas Kominfo Jatim Sherlita Ratna Dewi Agustin, Emil menyampaikan rasa bangganya kepada Al Divi Rarindrayana atas prestasi yang resmi direkrut Perusahaan Developer Game Roblox Internasional sebagai game animator sejak September 2024.</p>

                    <p>“Mas Divi ini sudah lulus dari MTsN 1 Kota Blitar, sekolah almamaternya Mas Wali. Ayah dan Ibunya ini yang luar biasa. Awalnya Mas Divi ini senang main game. Kemudian di satu game ini ditekuni, jangan gampang bosan. Siapa tahu itu akan mengasah konsistensi dan keterampilan,” kata Emil.</p>

                    <p>“Akhirnya ternyata Mas Divi berteman cukup luas dengan anak yang sekarang sudah kuliah. Dari situ, membuat animasi karakter, kemudian ada klien yang mampu beli. Ini ada laptop dan tab semoga semakin menambah semangat untuk berkreasi di animasi,” lanjutnya.</p>

                    <p>Animasi ini, tambah Emil, dilakukan lewat software yang namanya Blended. Komputernya dibuat bagus tidak hanya untuk game saja, tapi buat memproduksi karakter animasi tadi.</p>
                    
                    <p>“Jadi tadi pakai Komputer dengan perangkat dan spesifikasi tertentu. Semua diracik sendiri, artinya, sudah paham bakatnya kemana,” terangnya.</p>
                    
                     <div class="space-y-3 flex flex-col rounded-md">
                    <img class="rounded-t-md md:rounded-lg" src="{{ asset('storage/assets/detailberita2.jpeg') }}"
                        alt="Foto Berita">
                    <p class="text-gray50 text-center italic">Pelaksana Tugas (Plt) Gubernur Jawa Timur, Emil Elestianto Dardak, menyambangi rumah sekaligus mengapresiasi salah satu siswa berprestasi dari MTsN 1 Kota Blitar, Al Divi Rarindrayana, di Jalan Kenari, Kelurahan Plosorekep,Senin (2/6/2025) Foro: rafli JNR</p>
                    </div>

                    <p>“Bisa di animasi, bisa juga teknik informatika. Maka karena itu, hari ini kami hadir ingin melihat langsung tempat kerjanya seperti apa,” imbuhnya.</p>

                    <p>Menurutnya prestasi Al Divi, tentunya tidak lepas dari peran kedua orang tua dan lingkungan sekolah maupun sosialnya. “Apresiasi kepada Ayah dan Ibunya yang memberi dukungan. Anak biasanya kalau main game, ada dua pilihannya, di los ne (dibiarkan) atau justru dilarang total. Nah yang dibutuhkan adalah yang mau invest waktu untuk langsung memfasilitasi dan mengawasi secara bersamaan,” tuturnya.</p>

                    <p>“Karena beberapa waktu lalu saya ke RS Menur, itu di sana ada yang kecanduan game online bahkan membahayakan. Maka ini yang menjadi tantangannya, bagaimana screen time menjadi learning time. Tentu itu akan menjadi sesuatu yang produktif,” jelasnya.</p>

                    <p>Di akhir Emil menyampaikan pesan untuk Al Divi, untuk terus mengasah akal, pikiran dan mental. "Karena nanti akan ketemu kejenuhan, jika sudah terasah maka akan mudah untuk terus mendapatkan ide berkreasi,” pungkasnya.(red)</p>

                    <p><strong>#Emil Elestianto Dardak #Plt Gubernur Jatim #Animator Roblox Blitar</strong></p>
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