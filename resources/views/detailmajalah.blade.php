<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majalah Kominfo</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dearflip@2.3.0/css/dflip.min.css" />
</head>

<body class="bg-background">
    <x-header />
    <x-breadcrumb />

    <section class="bg-white">
        <div class="px-4 md:px-[60px] py-8 flex justify-center">
            <img src="{{ asset('storage/assets/detailmajalah.png') }}" alt="detail majalah"
                class="h-auto md:h-dvh w-full max-w-5xl object-contain">
        </div>
    </section>

    <section class="font-responsive">
        <div class="px-5 md:px-16 py-[30px]">
            <div class="bg-white px-5 md:px-[30px] py-[30px] rounded-xl shadow-sm" x-data="{ expanded: false }">

                <div class="flex flex-wrap items-center gap-4 md:gap-6 mb-3">
                    <x-label-kategori text="PON XXI ACEH-SUMUT 2024" />
                    <p class="text-pM md:text-p text-gray50">11 Februari 2025 08:38</p>
                </div>
                <p class="text-h3M md:text-h3 font-bold mb-2">PON XXI Aceh-Sumut 2024 Sepatu Roda Beregu Putra</p>
                <p x-ref="deskripsi" class="text-pM md:text-p text-gray70 leading-relaxed text-justify transition-all"
                    :class="{ 'line-clamp-3': !expanded }">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                    est, qui consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.
                </p>
                <button class="mt-2 text-primary font-semibold" @click="expanded = !expanded"
                    x-text="expanded ? 'Sembunyikan' : 'Baca Selengkapnya'"></button>
                </template>
            </div>
        </div>
    </section>

    <section class="bg-gray10 relative font-jakarta">
        <div class="px-4 md:px-[60px] py-[30px]">
            <x-section-header title="Majalah " highlight="Terkait" buttonText="Selengkapnya" buttonVariant="blue"
                type="blue" buttonHref="{{ route('home.index') }}" />
            <x-card-slider :row="1">
                <div class="min-w-[200px] md:min-w-[250px] lg:min-w-[300px] xl:min-w-[350px] h-auto">
                    <x-card-majalah-home image="{{ asset('storage/assets/majalah1.jpg') }}"
                        title="Jatim Waspadai Potensi Bencana Hidrometeorologi" date="11 Februari 2025 08:38"
                        fontColor="text-gray70" link="{{ route('home.majalah.detail') }}" />
                </div>
                <div class="min-w-[200px] md:min-w-[250px] lg:min-w-[300px] xl:min-w-[350px] h-auto">
                    <x-card-majalah-home image="{{ asset('storage/assets/majalah2.jpeg') }}"
                        title="Jatim Gerbang Nusantara Baru" date="11 Februari 2025 08:38" fontColor="text-gray70"
                        link="{{ route('home.majalah.detail') }}" />
                </div>
                <div class="min-w-[200px] md:min-w-[250px] lg:min-w-[300px] xl:min-w-[350px] h-auto">
                    <x-card-majalah-home image="{{ asset('storage/assets/majalah3.jpg') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024" date="11 Februari 2025 08:38"
                        fontColor="text-gray70" link="{{ route('home.majalah.detail') }}" />
                </div>
                <div class="min-w-[200px] md:min-w-[250px] lg:min-w-[300px] xl:min-w-[350px] h-auto">
                    <x-card-majalah-home image="{{ asset('storage/assets/majalah4.jpg') }}"
                        title="Jatim Genjot Penggunaan Produk Dalam Negeri" date="11 Februari 2025 08:38"
                        fontColor="text-gray70" link="{{ route('home.majalah.detail') }}" />
                </div>
                <div class="min-w-[200px] md:min-w-[250px] lg:min-w-[300px] xl:min-w-[350px] h-auto">
                    <x-card-majalah-home image="{{ asset('storage/assets/majalah5.jpg') }}"
                        title="Gadisku Rumah Berkarya untuk Disabilitas" date="11 Februari 2025 08:38"
                        fontColor="text-gray70" link="{{ route('home.majalah.detail') }}" />
                </div>
                <div class="min-w-[200px] md:min-w-[250px] lg:min-w-[300px] xl:min-w-[350px] h-auto">
                    <x-card-majalah-home image="{{ asset('storage/assets/majalah6.jpg') }}"
                        title="Memadamkan Api di Lereng Gunung Arjuno" date="11 Februari 2025 08:38"
                        fontColor="text-gray70" link="{{ route('home.majalah.detail') }}" />
                </div>
                <div class="min-w-[200px] md:min-w-[250px] lg:min-w-[300px] xl:min-w-[350px] h-auto">
                    <x-card-majalah-home image="{{ asset('storage/assets/majalah7.jpg') }}"
                        title="Puluhan Bus Siap Angkut Pemudik Jatim" date="11 Februari 2025 08:38"
                        fontColor="text-gray70" link="{{ route('home.majalah.detail') }}" />
                </div>
                <div class="min-w-[200px] md:min-w-[250px] lg:min-w-[300px] xl:min-w-[350px] h-auto">
                    <x-card-majalah-home image="{{ asset('storage/assets/majalah8.jpeg') }}"
                        title="Jatim Pangkas Kasus Balita Stunting" date="11 Februari 2025 08:38"
                        fontColor="text-gray70" link="{{ route('home.majalah.detail') }}" />
                </div>
                <div class="min-w-[200px] md:min-w-[250px] lg:min-w-[300px] xl:min-w-[350px] h-auto">
                    <x-card-majalah-home image="{{ asset('storage/assets/majalah9.jpg') }}"
                        title="Luncurkan Dua Inovasi, Jatim Perkuat Ekosistem Investasi" date="11 Februari 2025 08:38"
                        fontColor="text-gray70" link="{{ route('home.majalah.detail') }}" />
                </div>
                <div class="min-w-[200px] md:min-w-[250px] lg:min-w-[300px] xl:min-w-[350px] h-auto">
                    <x-card-majalah-home image="{{ asset('storage/assets/majalah10.jpg') }}"
                        title="Hutan Mangrove Jatim Terluas di Pulau Jawa" date="11 Februari 2025 08:38"
                        fontColor="text-gray70" link="{{ route('home.majalah.detail') }}" />
                </div>
            </x-card-slider>
        </div>
    </section>

    <x-footer />
</body>

</html>
