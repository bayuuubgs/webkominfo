<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card List Regulasi</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-background">
    <x-header/>
    <x-breadcrumb/>

    <section>
    <div class="py-[76px] px-[16px] sm:px-[24px] md:px-[48px] lg:px-[80px] font-jakarta">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md p-8">
            <p class="text-h1 font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#4F9CF9] to-[#3B2CB5] text-center">
              PERATURAN MENTERI
            </p>

            <div class="flex flex-col gap-6 pt-6 w-full">
                <x-card-list-regulasi 
                    title="PERATURAN MENTERI KOMUNIKASI DAN INFORMATIKA NOMOR: 41/PER/MEN.KOMINFO/11/2007 TENTANG PANDUAN UMUM TATA KELOLA TEKNOLOGI INFORMASI DAN KOMUNIKASI NASIONAL" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN MENTERI DALAM NEGERI NOMOR 35 TAHUN 2010 TENTANG PEDOMAN PENGELOLAAN PELAYANAN INFORMASI DAN DOKUMENTASI DI LINGKUNGAN KEMENTERIAN DALAM NEGERI DAN PEMERINTAHAN DAERAH" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN MENTERI KOMUNIKASI DAN INFORMATIKA REPUBLIK INDONESIA NOMOR 23 TAHUN 2013 TENTANG PENGELOLAAN NAMA DOMAIN" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN MENTERI KOMUNIKASI DAN INFORMATIKA REPUBLIK INDONESIA NOMOR 36 TAHUN 2014 TENTANG TATA CARA PENDAFTARAN PENYELENGGARA SISTEM ELEKTRONIK" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN MENTERI KOMUNIKASI DAN INFORMATIKA REPUBLIK INDONESIA NOMOR 5 TAHUN 2015 TENTANG REGISTRAR NAMA DOMAIN INSTANSI PENYELENGGARA NEGARA" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN MENTERI KOMUNIKASI DAN INFORMATIKA REPUBLIK INDONESIA NOMOR 10 TAHUN 2015 TENTANG TATA CARA PENDAFTARAN SISTEM ELEKTRONIK INSTANSI PENYELENGGARA NEGARA" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN MENTERI KOMUNIKASI DAN INFORMATIKA REPUBLIK INDONESIA NOMOR 12 TAHUN 2015 TENTANG STANDAR KOMPETENSI JABATAN FUNGSIONAL PRANATA HUBUNGAN MASYARAKAT" 
                    link="{{ route('home.customPDF') }}"
                />
            </div>
        </div>
    </section>

    <x-footer/>
</body>
</html>
