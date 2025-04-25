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
                CARD LIST REGULASI
            </p>

            <div class="flex flex-col gap-6 pt-6 w-full">
                <x-card-list-regulasi 
                    title="PERATURAN PEMERINTAH REPUBLIK INDONESIA NOMOR 61 TAHUN 2010 TENTANG PELAKSANAAN UNDANG-UNDANG NOMOR 14 TAHUN 2008 TENTANG KETERBUKAAN INFORMASI PUBLIK" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN PEMERINTAH REPUBLIK INDONESIA NOMOR 61 TAHUN 2010 TENTANG PELAKSANAAN UNDANG-UNDANG NOMOR 14 TAHUN 2008 TENTANG KETERBUKAAN INFORMASI PUBLIK" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN PEMERINTAH REPUBLIK INDONESIA NOMOR 61 TAHUN 2010 TENTANG PELAKSANAAN UNDANG-UNDANG NOMOR 14 TAHUN 2008 TENTANG KETERBUKAAN INFORMASI PUBLIK" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN PEMERINTAH REPUBLIK INDONESIA NOMOR 61 TAHUN 2010 TENTANG PELAKSANAAN UNDANG-UNDANG NOMOR 14 TAHUN 2008 TENTANG KETERBUKAAN INFORMASI PUBLIK" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN PEMERINTAH REPUBLIK INDONESIA NOMOR 61 TAHUN 2010 TENTANG PELAKSANAAN UNDANG-UNDANG NOMOR 14 TAHUN 2008 TENTANG KETERBUKAAN INFORMASI PUBLIK" 
                    link="{{ route('home.customPDF') }}"
                />
                <x-card-list-regulasi 
                    title="PERATURAN PEMERINTAH REPUBLIK INDONESIA NOMOR 61 TAHUN 2010 TENTANG PELAKSANAAN UNDANG-UNDANG NOMOR 14 TAHUN 2008 TENTANG KETERBUKAAN INFORMASI PUBLIK" 
                    link="{{ route('home.customPDF') }}"
                />
            </div>
        </div>
    </section>

    <x-footer/>
</body>
</html>
