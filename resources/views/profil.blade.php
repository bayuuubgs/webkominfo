@vite(['resources/css/app.css'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>

<body class="bg-background">
    <x-header />
    <x-breadcrumb />

    <x-section-header title="Video Seputar" highlight="Jawa Timur" buttonText="Selengkapnya" buttonVariant="blue"
        type="blue" />

    <x-section-header title="Berita SETDA /" highlight="Pemerintah Daerah" buttonText="Selengkapnya"
        buttonVariant="white" type="white" buttonHref="{{ route('home.index') }}" />




</body>