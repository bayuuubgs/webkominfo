<div class="w-[1440px] h-[309px] bg-[#1D1D57] text-white mx-auto py-6 flex flex-col justify-center">
    <div class="container mx-auto px-10">
        <div class="grid grid-cols-[1.5fr_1fr_1fr_1fr_1.2fr] gap-x-10 text-[14px] leading-snug">
            
            <!-- DISKOMINFO JATIM (Lebih ke kiri) -->
            <div class="flex flex-col">
                <h3 class="text-[24px] font-bold mb-3">DISKOMINFO JATIM</h3>
                <p class="text-gray-300">
                    Jl. A. Yani 242 - 244, Gayungan, Surabaya<br>
                    Telp: (031) 8294608<br>
                    Fax: (031) 8294517
                </p>
                <p class="text-gray-300 mt-1 break-words">
                    Email: kominfo@jatimprov.go.id
                </p>
                <div class="flex gap-3 mt-3">
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-youtube"></i></a>
                </div>
                <p class="text-gray-400 mt-3">
                    © {{ date('Y') }} Dinas Komunikasi dan Informatika
                </p>
            </div>

        <!-- HUBUNGI KAMI -->
        <div class="flex flex-col">
            <h3 class="text-[18px] font-bold mb-2">Hubungi Kami</h3>
            <div class="grid grid-cols-[20px_auto] gap-x-2 gap-y-2">
                <i class="fab fa-instagram text-sm w-fit text-gray-300"></i> 
                <p class="text-gray-300">@kominfojatim</p>

                <i class="fas fa-phone-alt text-sm w-fit text-gray-300"></i> 
                <p class="text-gray-300">(031) 8294608</p>

                <i class="fas fa-envelope text-sm w-fit text-gray-300"></i> 
                <p class="text-gray-300 break-words leading-snug">kominfo@jatimprov.go.id</p>
            </div>
        </div>


            <!-- PUBLIKASI -->
            <div class="flex flex-col">
                <h3 class="text-[18px] font-bold mb-2">Publikasi</h3>
                <ul class="space-y-2">
                    @foreach(['Berita', 'Galeri Foto', 'Video', 'Download', 'Majalah'] as $item)
                        <li><a href="#" class="text-gray-300 hover:text-white">{{ $item }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- KATEGORI -->
            <div class="flex flex-col">
                <h3 class="text-[18px] font-bold mb-2">Kategori</h3>
                <ul class="space-y-2">
                    @foreach(['Setda / Perangkat Daerah', 'Gubernur', 'Wakil Gubernur', 'Forda Jatim II 2024'] as $category)
                        <li><a href="#" class="text-gray-300 hover:text-white">{{ $category }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- LOGO & TEKS -->
            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('storage/assets/gambarfooter.png') }}" alt="Logo Diskominfo Jatim" 
                     class="w-[244px] h-[75px] object-contain mb-2">
                <p class="text-gray-300 text-center">
                    Pemerintah Provinsi Jawa Timur
                </p>
            </div>

        </div>
    </div>
</div>
