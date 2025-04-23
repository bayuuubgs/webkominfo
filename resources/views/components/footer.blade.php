<div class="w-full bg-primary100 text-white font-jakarta py-6">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-x-10 gap-y-8 text-[14px] leading-snug">

            <div class="flex flex-col">
                <h2 class="text-h2 font-bold mb-3">DISKOMINFO JATIM</h2>
                <p class="text-gray-300 text-p">
                    Jl. A. Yani 242 - 244, Gayungan, Surabaya<br>
                    Telp: (031) 8294608<br>
                    Fax: (031) 8294517
                </p>
                <p class="text-gray-300 mt-1 break-words text-p">
                    Email: kominfo@jatimprov.go.id
                </p>
                <div class="flex gap-3 mt-3">
                    <a href="#" class="text-gray-300 hover:text-white">
                        <img src="{{ asset('storage/assets/Path.png') }}" alt="Path" class="w-6 h-6">
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <img src="{{ asset('storage/assets/x.png') }}" alt="X" class="w-6 h-6">
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white">
                        <img src="{{ asset('storage/assets/youtube.png') }}" alt="YouTube" class="w-6 h-6">
                    </a>
                </div>
                <p class="text-gray-400 mt-3 text-p font-bold">
                    © {{ date('Y') }} Dinas Komunikasi dan Informatika
                </p>
            </div>

            <div class="flex flex-col">
                <h3 class="text-h3 font-bold mb-2">Hubungi Kami</h3>
                <div class="grid grid-cols-[20px_auto] gap-x-2 gap-y-2 text-gray-300">

                    <a href="https://www.instagram.com/kominfojatim" target="_blank" class="flex items-center gap-2 col-span-2">
                        <img src="{{ asset('storage/assets/instagram.png') }}" alt="Instagram" class="w-5 h-5">
                        @kominfojatim
                    </a>

                    <img src="{{ asset('storage/assets/phone.png') }}" alt="Telepon" class="w-5 h-5">
                    <p class="text-gray-300">(031) 8294608</p>

                    <a href="mailto:kominfo@jatimprov.go.id" class="flex items-center gap-2 col-span-2">
                        <img src="{{ asset('storage/assets/mail.png') }}" alt="Email" class="w-5 h-5">
                        <span class="break-words leading-snug">kominfo@jatimprov.go.id</span>
                    </a>

                </div>
            </div>

            <div class="flex flex-col">
    <h3 class="text-h3 font-bold mb-2">Publikasi</h3>
    <ul class="space-y-2">
        @php
            $publikasiList = [
                'Berita' => 'berita',
                'Galeri Foto' => 'galerifoto',
                'Video' => 'video',
                'Download' => 'download',
                'Majalah' => 'majalah'
            ];
        @endphp
        @foreach($publikasiList as $label => $file)
            <li>
                <a href="{{ url($file) }}" class="text-gray-300 hover:text-white">
                    {{ $label }}
                </a>
            </li>
        @endforeach
    </ul>
</div>


            <div class="flex flex-col">
                <h3 class="text-h3 font-bold mb-2">Kategori</h3>
                <ul class="space-y-2">
                    @foreach(['Setda / Perangkat Daerah', 'Gubernur', 'Wakil Gubernur', 'Forda Jatim II 2024'] as $category)
                        <li><a href="#" class="text-gray-300 hover:text-white">{{ $category }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('storage/assets/gambarfooter.png') }}" alt="Logo Diskominfo Jatim"
                     class="w-[244px] h-[75px] object-contain mb-2">
                <p class="text-gray-300 text-center text-p font-bold">
                    Pemerintah Provinsi Jawa Timur
                </p>
            </div>

        </div>
    </div>
</div>
