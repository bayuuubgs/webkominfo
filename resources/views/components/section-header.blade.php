@props([
    'title' => 'Judul Section',
    'highlight' => null,
    'buttonText' => 'Button',
    'buttonVariant' => 'white',
    'class' => '', 
])

<div class="w-full flex items-center justify-between h-[45px] {{ $class }}">
    <h2 class="font-jakarta text-[20px] font-semibold {{ $buttonVariant === 'white' ? 'text-gray10' : 'text-gray90' }}">
        {{ $title }}
        @if ($highlight)
            <span class="text-primary50">{{ $highlight }}</span>
        @endif
    </h2>

    <x-button :text="$buttonText" :variant="$buttonVariant" />
</div>


<!-- Contoh Pemakaian:

<div class="max-w-screen-xl mx-auto px-4">
    <x-section-header
        title="Video Seputar"
        highlight="Jawa Timur"
        buttonText="Semua Video →"
        buttonVariant="blue"
    />

    <x-section-header
        title="Berita SETDA / Pemerintah Daerah"
        buttonText="Selengkapnya →"
        buttonVariant="white"
        class="mt-[55px]"
    />
</div> -->
