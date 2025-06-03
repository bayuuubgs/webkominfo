@vite(['resources/css/app.css'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Galeri Foto</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-background font-responsive text-pM lg:text-p">
    <x-header />
    <x-breadcrumb />

    <!-- Gambar Utama -->
    <section class="bg-white relative max-h-dvh overflow-hidden">
        <img x-ref="heroImg" src="/storage/assets/galeri.png" alt="Foto Utama"
            class="w-full h-auto max-h-dvh object-cover mx-auto block -z-40"
            @load="updateOffset()">
        <div class="absolute w-full inset-0 bg-gradient-to-b from-primary100/25 via-transparent to-primary100/100 pointer-events-none"></div>
    </section>

    <!-- Section Melayang -->
    <section x-data="{ expanded: false }" class="relative z-20 -mt-[15%] md:-mt-[122px] px-5 md:px-20">

        <div class="bg-white rounded-xl shadow-md pt-4">

            <!-- Kategori & Tanggal -->
            <div class="flex p-[20px] flex-wrap items-center gap-6 mb-2 -mt-2">
                <x-label-kategori text="PON XXI ACEH–SUMUT 2024" />
                <p class="text-p font-light text-gray-500">17 Oktober 2024 20:49</p>
            </div>

            <!-- Judul -->
            <p class="text-h2M lg:text-h1 px-5 mb-2 -mt-4">PON XXI Aceh–Sumut 2024</p>

            <!-- Deskripsi -->
            <div :class="expanded ? 'max-h-full px-5' : 'max-h-[96px] overflow-hidden px-5'"
                class="relative px-5 text-gray-700 leading-relaxed text-justify transition-all duration-300 ease-in-out">
                <span>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo.
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos
                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                    voluptatem...
                    <span x-show="expanded">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos
                        qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui consectetur, adipisci
                        velit,
                        sed quia non numquam eius modi tempora incidunt ut labore totam rem aperiam, eaque ipsa quae ab
                        illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi architecto beatae vitae
                        dicta sunt explicabo.
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                        quasi architecto beatae vitae
                        dicta sunt explicabo.
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos
                    </span>
                </span>

                <!-- Tombol "Baca Selengkapnya" & "Lebih Sedikit" -->
                <div class="text-right">
                    <button x-show="!expanded" @click="expanded = true" class="text-primary font-semibold">
                        Baca Selengkapnya
                    </button>
                    <button x-show="expanded" @click="expanded = false" class="text-primary font-semibold">
                        Lebih Sedikit
                    </button>
                </div>
            </div>

            <!-- Galeri Foto -->
            @php
                $galeri = [
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu'],
                    ['image' => '/storage/assets/galeri.png', 'alt' => 'Galeri satu']
                ];
            @endphp

            <div class="mt-6 flex justify-center">
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-[1px]">
                    @foreach ($galeri as $image)
                        <x-card-galeri :image="$image['image']" :alt="$image['alt']"/>
                    @endforeach
                </div>
            </div>

        </div>

    </section>

    <!-- Tombol Navigasi -->
    <div class="flex justify-center gap-4 py-6">
        <x-button text="Sebelumnya" variant="blue" type="button" />
        <x-button text="Selanjutnya" variant="blue" type="button" />
    </div>

    <!-- Galeri Lainnya -->
    <section class="bg-white relative px-5 md:px-20 py-10">

        <div>
            <x-section-header title="Galeri " highlight="Terkait" buttonText="Selengkapnya" buttonVariant="blue"
                type="blue" buttonHref="{{ route('home.index') }}" />
        </div>
        <div class="">
            <x-card-slider :rows="1">
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="/storage/assets/galeri1.jpeg" title="Mandiri U20 Challenge Series 2025"
                        date="1 April 2025 22:16:48" category="OLAH RAGA" description="" link=""
                        type="isBlue" read-more-text=""/>
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="/storage/assets/galeri2.jpg" title="PON XXI Aceh-Sumut 2024 - CABOR Sepak Bola Putra"
                        date="17 Oktober 2024 20:49:12" category="PON XXI ACEH-SUMUT" description="" link=""
                        type="isBlue" read-more-text="" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="/storage/assets/galeri4.jpeg" title="PON XXI Aceh-Sumut 2024 - CABOR Tenis Lapangan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH" description="" link=""
                        type="isBlue" read-more-text="" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="/storage/assets/galeri5.jpg" title="Kadis Kominfo Lepas Kontingen E-Sport Jatim"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH" description="" link=""
                        type="isBlue" read-more-text="" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="/storage/assets/galeri6.jpg" title="Grand Final Kerapan Sapi Piala Presiden Tahun 2024"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH" description="" link=""
                        type="isBlue" read-more-text="" />
                </div>
                <div class="min-w-[300px] md:min-w-[400px] h-auto">
                    <x-card-berita image="/storage/assets/galeri7.jpg" title="Pj Gubernur Jawa Timur Lakukan Penandatangan Berita Acara Pelantikan"
                        date="18-Februari-2025 09.30" category="SETDA / PERANGKAT DAERAH" description="" link=""
                        type="isBlue" read-more-text="" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <x-footer />
</body>

</html>
