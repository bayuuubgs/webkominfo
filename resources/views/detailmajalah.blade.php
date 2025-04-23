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
    <x-header/>
    <x-breadcrumb/>

    <section class="bg-gray10">
        <div class="px-[101px] py-[81px]">
            <img src="{{ asset('storage/assets/detailmajalah.png') }}" alt="detail majalah">
        </div>
    </section>

    <section class="font-jakarta">
        <div class="px-[60px] py-[31px]">
            <div class="bg-white p-[20px] rounded-xl shadow-lg">
                <div class="flex items-center gap-[24px] mb-[8px]">
                    <x-label-kategori text="PON XXI ACEH-SUMUT 2024"/>
                    <p class="text-p font-light text-gray-500">11 Februari 2025 08:38</p>
                </div>
                <p class="text-h3 font-bold mb-[8px]">PON XXI Aceh-Sumut 2024 Sepatu Roda Beregu Putra</p>
                <p class="text-p text-gray-700 leading-relaxed text-justify">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui  consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore Baca Selengkapnya
                </p>
            </div>
        </div>
    </section>

    <section class="bg-gray10 relative font-jakarta mt-[15px]">
        <div class="pl-[60px] pr-[32px] pb-[25px] pt-[28px]">
            <x-section-header
                title="Majalah "
                highlight="Terkait"
                buttonText="Selengkapnya"
                buttonVariant="blue"
                type="blue"
                buttonHref="{{ route('home.index') }}"
            />

            <x-card-slider :row="1">
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        fontColor="text-gray70"
                        link="{{ route('home.berita') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        fontColor="text-gray70"
                        link="{{ route('home.berita') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        fontColor="text-gray70"
                        link="{{ route('home.berita') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        fontColor="text-gray70"
                        link="{{ route('home.berita') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        fontColor="text-gray70"
                        link="{{ route('home.berita') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        fontColor="text-gray70"
                        link="{{ route('home.berita') }}"
                    />
                </div>
                <div class="min-w-[300px] h-auto">
                    <x-card-majalah-home
                        image="{{ asset('storage/assets/majalah.png') }}"
                        title="Jatim Peringati Hari Lahir Pancasila 2024"
                        date="11 Februari 2025 08:38"
                        fontColor="text-gray70"
                        link="{{ route('home.berita') }}"
                    />
                </div>
            </x-card-slider>
        </div>
    </section>
    <x-footer/>
</body>
</html>
