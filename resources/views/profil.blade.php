@vite(['resources/css/app.css'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>

<body class="bg-white">
    <x-header />
    <x-breadcrumb />
    <div class="absolute left-16 z-10 mt-8 w-56 origin-top-right gap-2">
    <x-dropdown :dropdownItems="[
        [
            'link' => '',
            'desc' => 'Kategori',
        ],
        [
            'link' => '',
            'desc' => 'Kategori',
        ],
        [
            'link' => '',
            'desc' => 'Kategori',
        ],
        [
            'link' => '',
            'desc' => 'Kategori',
        ],
        [
            'link' => '',
            'desc' => 'Kategori',
        ],
    ]" />
        </div>

</body>