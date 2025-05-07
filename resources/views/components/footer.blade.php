<div class="w-full bg-primary100 text-white font-responsive py-12 px-4 sm:px-6 lg:px-[60px] relative overflow-hidden">

    <!-- Top & Bottom Gradient -->
    <div class="absolute top-0 left-0 w-full h-10 bg-gradient-to-b from-gray90/10 to-transparent pointer-events-none z-10"></div>
    <div class="absolute bottom-0 left-0 w-full h-10 bg-gradient-to-t from-gray90/10 to-transparent pointer-events-none z-10"></div>

    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-x-10 gap-y-8 text-[14px] leading-snug text-center md:text-left">

            <!-- Diskominfo Info -->
            <div class="flex flex-col items-center md:items-start">
                <h2 class="text-h2 font-bold mb-3">DISKOMINFO JATIM</h2>
                <p class="text-gray-300 text-p">
                    Jl. A. Yani 242 - 244, Gayungan, Surabaya<br>
                    Telp: (031) 8294608<br>
                    Fax: (031) 8294517
                </p>
                <p class="text-gray-300 mt-1 break-words text-p">
                    Email: kominfo@jatimprov.go.id
                </p>
                <div class="flex gap-3 mt-3 justify-center md:justify-start">
                    <a href="https://x.com/kominfojatim" class="text-gray-300 hover:text-white">
                        <img src="{{ asset('storage/assets/icon-x.png') }}" alt="X" class="w-6 h-6">
                    </a>
                    <a href="http://www.youtube.com/@KOMINFOMMC" class="text-gray-300 hover:text-white">
                        <img src="{{ asset('storage/assets/icon-youtube.png') }}" alt="YouTube" class="w-6 h-6">
                    </a>
                    <a href="https://www.instagram.com/kominfojatim/" class="text-gray-300 hover:text-white">
                        <img src="{{ asset('storage/assets/icon-instagram.png') }}" alt="Instagram" class="w-6 h-6">
                    </a>
                </div>
                <p class="text-gray-400 mt-3 text-p font-bold">
                    © {{ date('Y') }} Dinas Komunikasi dan Informatika
                </p>
            </div>

            <!-- Kontak -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-h3 font-bold mb-2">Hubungi Kami</h3>
                <div class="grid grid-cols-[20px_auto] gap-x-2 gap-y-2 text-gray-300 justify-center md:justify-start">
                    <a href="https://www.instagram.com/kominfojatim" target="_blank" class="flex items-center gap-2 col-span-2 justify-center md:justify-start">
                        <img src="{{ asset('storage/assets/instagram.png') }}" alt="Instagram" class="w-5 h-5">
                        @kominfojatim
                    </a>

                    <div class="flex items-center justify-center md:justify-start col-span-2">
                        <img src="{{ asset('storage/assets/phone.png') }}" alt="Telepon" class="w-5 h-5 mr-2">
                        <p>(031) 8294608</p>
                    </div>

                    <a href="mailto:kominfo@jatimprov.go.id" class="flex items-center gap-2 col-span-2 justify-center md:justify-start">
                        <img src="{{ asset('storage/assets/mail.png') }}" alt="Email" class="w-5 h-5">
                        <span class="break-words leading-snug">kominfo@jatimprov.go.id</span>
                    </a>
                </div>
            </div>

            <!-- Publikasi -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-h3 font-bold mb-2">Publikasi</h3>
                <ul class="space-y-2">
                    @php
                        $publikasiRoutes = [
                            'Berita' => 'home.berita',
                            'Galeri Foto' => 'home.galerifoto',
                            'Video' => 'home.video',
                            'Download' => 'home.download',
                            'Majalah' => 'home.majalah',
                        ];
                    @endphp

                    @foreach($publikasiRoutes as $label => $routeName)
                        <li>
                            <a href="{{ route($routeName) }}" class="text-gray-300 hover:text-white">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Kategori -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-h3 font-bold mb-2">Kategori</h3>
                <ul class="space-y-2">
                    @php
                        $publikasiRoutes = [
                            'Setda / Perangkat Daerah' => 'home.berita',
                            'Gubernur' => 'home.galerifoto',
                            'Wakil Gubernur' => 'home.video',
                            'Forda Jatim II 2024' => 'home.download',
                        ];
                    @endphp

                    @foreach($publikasiRoutes as $label => $routeName)
                        <li>
                            <a href="{{ route($routeName) }}" class="text-gray-300 hover:text-white">
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Logo -->
            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('storage/assets/gambarfooter.png') }}" alt="Logo Diskominfo Jatim" class="w-full max-w-[244px] h-auto object-contain mb-2">
                <p class="text-gray-300 text-center text-p font-bold">
                    Pemerintah Provinsi Jawa Timur
                </p>
            </div>

        </div>
    </div>
</div>
