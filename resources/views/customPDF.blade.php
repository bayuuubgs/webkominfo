<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Page PDF</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-background">
    <x-header/>
    <x-breadcrumb/>

    <section>
        <div class="py-[76px] px-[16px] sm:px-[24px] md:px-[48px] lg:px-[80px] font-jakarta">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md p-8">
                <p class="text-h1 font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#4F9CF9] to-[#3B2CB5] text-center">
                    Rencana Strategis 2014-2019
                </p>

                <div class="space-y-[24px] text-gray70 text-justify pt-[25px]">
                    <div>
                        <h2 class="text-blue-700 font-semibold">Rencana Strategis 2014-2019</h2>
                        <p class="mt-[4px] text-sm sm:text-base">Rencana Strategis (Renstra) Dinas Komunikasi dan Informatika Provinsi Jawa Timur Tahun 2014 s.d. 2019 dapat dilihat atau diunduh pada halaman ini.</p>
                    </div>
                </div>
                <div class="pt-[20px]">
                    <div class="w-full aspect-[9/13] sm:aspect-video">
                        <embed class="w-full h-full rounded-md shadow" src="https://api.minio.jatimprov.go.id/kominfo-jatim/files/Renstra%20Dinas%20Kominfo%202014-2019.pdf" type="application/pdf">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer/>
</body>
</html>
