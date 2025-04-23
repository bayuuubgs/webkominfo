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
                    INI CUSTOM PAGE PDF
                </p>

                <div class="space-y-[24px] text-gray70 text-justify pt-[25px]">
                    <div>
                        <h2 class="text-blue-700 font-semibold">INI CUSTOM PAGE</h2>
                        <p class="mt-[4px] text-sm sm:text-base">Berikut adalah perjanjian kinerja Kepala Dinas Komunikasi dan Informatika Provinsi Jawa Timur kepada Gubernur Provinsi Jawa Timur dalam rangka mewujudkan manajemen pemerintahan yang efektif, transparan, akuntabel dan berorientasi pada hasil :</p>
                    </div>
                </div>
                <div class="pt-[20px]">
                    <div class="w-full aspect-[9/13] sm:aspect-video">
                        <embed class="w-full h-full rounded-md shadow" src="https://api.minio.jatimprov.go.id/kominfo-jatim/files/LAKIP%20DISKOMINFO%20JATIM%202020%20(Rev%2031-3-21)%20Tanpa%20Surat%20Pengantar%20(1).pdf" type="application/pdf">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer/>
</body>
</html>
