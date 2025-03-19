@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="position-relative">
    <img src="{{ asset('images/atasan.png') }}" alt="Hero Image" class="img-fluid w-100" style="height: 670px; object-fit: cover;">
    <div class="position-absolute bottom-0 start-0 end-0 p-4 text-white" style="background: linear-gradient(to top, rgba(26, 35, 126, 0.8), transparent);">
        <h1 class="fw-bold mb-2">Resmi Dilantik, Gubernur Khofifah dan Wagub Emil Siap Sinergikan Nawa Bhakti Satya dengan Azta Cita</h1>
        <p class="small mb-3">Gubernur Jawa Timur Khofifah Indar Parawansa dan Wakil Gubernur Jawa Timur Emil Elestianto Dardak resmi dilantik oleh Presiden Republik Indonesia Prabowo Subianto di Istana Negara, Rabu (13/3/2024).</p>
    </div>
</div>

<!-- News Search -->
<div class="bg-white py-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Eksplorasi Menu -->
            <h5 class="fw-bold mb-0">Eksplorasi Menu</h5>
            
            <!-- Search Bar -->
            <div class="flex-grow-1 mx-4">
                <input type="text" class="form-control form-control-sm" placeholder="Cari berita...">
            </div>

            <!-- Buttons -->
            <div>
                <button class="btn btn-primary btn-sm">Cari</button>
                <button class="btn btn-danger btn-sm">Reset</button>
            </div>
        </div>
    </div>
</div>

<!-- Video Section -->
<div class="bg-light py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold">Video Popular5<span class="text-primary">Jawa Timur</span></h5>
            <button class="btn btn-primary btn-sm">Selengkapnya</button>
        </div>
        
        <div class="row">
            <!-- Gambar Utama (Linked to YouTube) -->
            <div class="col-md-8">
                <div class="position-relative mb-3">
                    <a href="https://www.youtube.com/watch?v=kQGaB7urZ2Y" target="_blank">
                        <img src="{{ asset('images/video-featured.jpg') }}" 
                             alt="Featured Video" class="img-fluid w-100" 
                             style="height: 256px; object-fit: cover;">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <div class="bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center" 
                                 style="width: 64px; height: 64px;">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 48px; height: 48px;">
                                    <i class="fas fa-play text-white"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="position-absolute bottom-0 start-0 end-0 p-3 text-white" 
                         style="background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);">
                        <div class="fw-bold small">
                            INFO JATIM: RESMI JATIM DILANTIK PIMPIN JATIM PERIODE KEDUA, 
                            GUBERNUR JATIM KHOFIFAH INDAR PARAWANSA
                        </div>
                    </div>
                </div>
            </div>

            <!-- Thumbnail Video List -->
            <div class="col-md-4">
                @for ($i = 1; $i <= 3; $i++)
                <div class="d-flex mb-3">
                    <div class="flex-shrink-0 me-2">
                        <a href="https://www.youtube.com/watch?v=kQGaB7urZ2Y{{ $i }}" target="_blank">
                            <img src="{{ asset('images/video-featured.jpg') }}" 
                                 alt="Video {{ $i }}" 
                                 style="width: 96px; height: 64px; object-fit: cover;">
                        </a>
                    </div>
                    <div>
                        <p class="small fw-medium mb-1">INFO JAWA TIMUR MINGGU KE-2 BULAN FEBRUARI I 14 FEBRUARI 2025</p>
                        <p class="small text-muted">13 Mar 2024</p>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>

<!-- FontAwesome untuk ikon Play -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>

<!-- News Sections -->
@php
$sections = [
    'usda' => 'USDA / Pemerintah Daerah',
    'gubernur' => 'Gubernur',
    'wakil' => 'Wakil Gubernur',
    'FORDA' => 'FORDA Jatim 2024'
];
@endphp

@foreach ($sections as $key => $title)
<div class="py-4 border-top">
    <div class="container">
        <!-- Header Berita -->
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
            <h5 class="fw-bold mb-0">Berita {{ $title }}</h5>
            <button class="btn btn-primary btn-sm">Selengkapnya</button>
        </div>

        <!-- Isi Berita (Dibaris Bawah) -->
        <div class="row g-3">
            @for ($i = 1; $i <= 3; $i++)
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('images/setda.jpeg') }}" class="card-img-top" 
                         alt="News Image" style="height: 192px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Kunjungan Kerja ke Pacitan Perkuat Sinergitas Pembangunan Infrastruktur</h6>
                        <div class="d-flex justify-content-between small">
                            <span class="text-muted">13 Mar 2024</span>
                            <button class="btn btn-primary btn-sm">Kategori</button>
                        </div>
                        <p class="card-text small">
                            Gubernur Jawa Timur Khofifah Indar Parawansa melakukan kunjungan kerja ke Kabupaten Pacitan 
                            untuk memperkuat sinergitas pembangunan infrastruktur daerah...
                        </p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endforeach


<!-- Gallery Section -->
<div class="py-4 border-top">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold">Galeri Foto</h5>
            <button class="btn btn-primary btn-sm">Selengkapnya</button>
        </div>

        <!-- Panoramic Gallery -->
        <div class="panoramic-gallery">
            @for ($i = 1; $i <= 3; $i++)
            <div class="panoramic-item">
                <img src="{{ asset('images/galeri2.jpg') }}" 
                     class="img-fluid" 
                     alt="Gallery Image">
            </div>
            @endfor
        </div>
    </div>
</div>

<!-- Custom Styling -->
<style>
    .panoramic-gallery {
        display: flex;
        gap: 10px;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        width: 100%;
        max-width: 1200px;
        margin: auto;
    }

    .panoramic-item {
        flex: 1;
        height: 250px;
        overflow: hidden;
        border-radius: 10px;
    }

    .panoramic-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .panoramic-gallery {
            flex-direction: column;
            gap: 15px;
        }

        .panoramic-item {
            height: 200px;
        }
    }
</style>


<div class="py-4 border-top">
    <div class="container">
        <!-- Header Majalah -->
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
            <h5 class="fw-bold mb-0">Majalah</h5>
            <button class="btn btn-primary btn-sm">Selengkapnya</button>
        </div>

        <!-- Isi Majalah -->
        <div class="row g-3">
            @for ($i = 1; $i <= 4; $i++)
            <div class="col-md-3 col-sm-6">
                <div class="card majalah-card">
                    <img src="{{ asset('images/hero.jpg') }}" 
                         class="card-img-top" alt="Majalah Image">
                    <div class="card-body text-center">
                        <h6 class="fw-bold majalah-title">MAJALAH POTENSI EDISI {{ $i }} 2024</h6>
                        <p class="text-muted small">1 Januari 2024</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

<!-- Custom Styling -->
<style>
    .py-4 {
        background-color: #ffffff; /* Background putih */
        padding: 60px 0;
    }

    .majalah-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .majalah-card:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .majalah-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        border-bottom: 3px solid #ddd;
    }

    .majalah-title {
        font-size: 14px;
        font-weight: bold;
        color: #333;
        margin-top: 8px;
    }

    .text-muted {
        font-size: 12px;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .col-md-3 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media (max-width: 576px) {
        .col-md-3 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>

<!-- Survey Section -->
<div class="py-4 border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h5 class="fw-bold mb-3">Artikel Lainnya</h5>
                @for ($i = 1; $i <= 5; $i++)
                <div class="d-flex align-items-center bg-light p-2 rounded mb-2">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px;">
                        {{ $i }}
                    </div>
                    <p class="small mb-0">Artikel penting tentang pemerintahan dan pembangunan daerah Jawa Timur</p>
                </div>
                @endfor
            </div>
            
            <div class="col-md-6">
                <h5 class="fw-bold mb-3">Survey Pengunjung</h5>
                <div class="card">
                    <div class="card-body">
                        <div style="height: 256px;" class="d-flex align-items-end justify-content-between">
                            @for ($i = 1; $i <= 12; $i++)
                            <div class="d-flex flex-column align-items-center">
                                <div class="bg-primary" style="width: 24px; height: {{ rand(50, 200) }}px;"></div>
                                <span class="small mt-1">{{ $i }}</span>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection