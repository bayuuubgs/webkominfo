<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Video</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-white">
    <x-header />
    <x-breadcrumb />

    <div class="pt-6 flex justify-center">
            <x-search-bar-publikasi 
                judulHighlight="Video"
                :kategoriList="['Agenda Liputan', 'Pendidikan', 'Kesehatan']"
                :tagList="['#Kegiatan', '#Anggaran', '#Pemerintahan']"
            />
        </div>
    </div>

    <div class="flex justify-center py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 w-full max-w-screen-xl">
            <!-- Card 1 -->
            <x-card-list-publikasi 
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."        
            />

            <!-- Card 2 -->
            <x-card-list-publikasi 
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
             />

            <!-- Card 3 -->
            <x-card-list-publikasi 
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
             />

            <!-- Card 4 -->
            <x-card-list-publikasi 
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
            />

            <!-- Card 5 -->
            <x-card-list-publikasi 
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
                />

            <!-- Card 6 -->
            <x-card-list-publikasi 
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
            />

            <!-- Card 7 -->
            <x-card-list-publikasi 
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
            />

            <!-- Card 8 -->
            <x-card-list-publikasi 
                image="{{ asset('storage/assets/videolainnya.png') }}"
                title="Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim"
                category="UMUM"
                date="11 Februari 2025 08:38"
                description="Menteri Komunikasi dan Digital (Menkomdig), Meutya Hafid, mewakili Presiden Prabowo Subianto menghadiri Pertemuan Tingkat Tinggi Aksi Kecerdasan Buatan atau Artificial Intelligence..."
            />
            </div>
        </div>
        
        <div class="flex justify-center gap-4 pt-6 pb-6">
        <x-button 
            text="Sebelumnya" 
            variant="blue" 
            type="button"
        />
        <x-button 
            text="Selanjutnya" 
            variant="blue" 
            type="button"
        />
    </div>

        <x-card-kategori-unitkerja
            titleFirst="Rekomendasi" 
            titleSecond="Kategori"
            :items="[
                ['image' => asset('storage/assets/ahza.jpeg')],
                ['image' => asset('storage/assets/ahza.jpeg')],
                ['image' => asset('storage/assets/ahza.jpeg')],
                ['image' => asset('storage/assets/ahza.jpeg')],
            ]"
        />
            <div class="flex justify-center pt-6">
                <x-footer/>
            </div>
        </body>
        </html>
