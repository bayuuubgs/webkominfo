@vite(['resources/css/app.css'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--
    <link href="/resource/css/app.css" rel="stylesheet"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-gray-500 min-h-screen flex flex-col items-center justify-center p-5 font-jakarta">

<div class="flex flex-col items-center gap-3">
    <h1 class="text-3xl font-bold text-white">Trying to Call the Components!</h1>

    <!-- Button Share -->
    <x-button-share/>
    <x-button-share2/>

    @php
        $videos = [
            [
                "image" => asset('storage/assets/galeri2.jpg'),  
                "title" => "Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim",
                "date" => "11 Februari 2025 08:38"
            ],
            [
                "image" => asset('storage/assets/galeri2.jpg'), 
                "title" => "DPRD Kabupaten Malang Bahas Isu Bencana Bersama BPD Jatim",
                "date" => "12 Februari 2025 10:15"
            ],
            [
                "image" => asset('storage/assets/galeri2.jpg'),  
                "title" => "Sharing Masalah Kebencanaan, Komisi III DPRD Kabupaten Malang Kunjungi BPD Jatim",
                "date" => "11 Februari 2025 08:38"
            ],
            [
                "image" => asset('storage/assets/galeri2.jpg'), 
                "title" => "DPRD Kabupaten Malang Bahas Isu Bencana Bersama BPD Jatim",
                "date" => "12 Februari 2025 10:15"
            ]
        ];

        $video = [
            "image" => asset('storage/assets/galeri2.jpg'),
            "title" => "DPRD Kabupaten Malang Bahas Isu Bencana Bersama BPD Jatim",
            "date" => "11 Februari 2025 08:38"
        ];
    @endphp

    <!-- Video Lainnya -->
    <x-card-video-home :videos="$videos" />

    <!-- List Video Lainnya -->
    <x-list-video-lainnya :videos="[$video]" />

    <!-- Card Majalah Home -->
    <x-card-majalah-home 
        image="{{ asset('storage/assets/setda.jpeg') }}" 
        title="Jatim Peringati Hari Lahir Pancasila 2024"
        date="11 Februari 2025 08:38"
    />

    <x-footer/>
</div>

</body>

<body class="bg-white">
    <x-header />
</body>

</html>