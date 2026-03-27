@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

{{-- ===================== HERO SECTION ===================== --}}
<section class="hero">
    <div class="container hero-inner">
        <div class="hero-text">
            <span class="badge">Sanggar Seni Tradisional</span>
            <h1 class="hero-title">Melestarikan Budaya Melalui Seni</h1>
            <p class="hero-desc">
                Bergabunglah dengan komunitas pecinta seni tari tradisional Indonesia.
                Belajar, berkreasi, dan lestarikan warisan budaya bersama kami.
            </p>
            <a href="{{ route('register') }}" class="btn-primary">Daftar Anggota →</a>
        </div>
        <div class="hero-image">
            <div class="hero-img-wrapper">
                {{-- Ganti dengan <img src="{{ asset('images/hero.jpg') }}" alt="Sanggar"> jika ada gambar --}}
                <div class="img-placeholder hero-placeholder">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#C65D2E" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                </div>
                <div class="hero-badge-float">
                    <span class="float-number">49+</span>
                    <span class="float-title">Penghargaan</span>
                    <span class="float-sub">Tingkat Nasional</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== STATS SECTION ===================== --}}
<section class="stats">
    <div class="container stats-grid">
        <div class="stat-item">
            <div class="stat-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#C65D2E" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <div class="stat-number">200+</div>
            <div class="stat-label">Anggota Aktif</div>
        </div>
        <div class="stat-item">
            <div class="stat-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#C65D2E" stroke-width="1.5"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
            </div>
            <div class="stat-number">49+</div>
            <div class="stat-label">Penghargaan</div>
        </div>
        <div class="stat-item">
            <div class="stat-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#C65D2E" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </div>
            <div class="stat-number">100+</div>
            <div class="stat-label">Menghadiri Event</div>
        </div>
    </div>
</section>

{{-- ===================== TENTANG KAMI SECTION ===================== --}}
<section class="about">
    <div class="container about-inner">
        <div class="about-image">
            <div class="img-placeholder about-placeholder">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#C65D2E" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
            </div>
        </div>
        <div class="about-text">
            <span class="badge">Tentang Kami</span>
            <h2>Sanggar Mulya Bhakti</h2>
            <p class="about-subtitle">DIISI SEJARAH SANGGAR MULYA BHAKTI</p>
            <p class="about-desc">
                Sanggar Mulya Bhakti adalah komunitas seni tari tradisional yang berdedikasi
                untuk melestarikan kekayaan budaya Indonesia. Didirikan dengan semangat
                pelestarian budaya, kami telah melahirkan ratusan penari berbakat yang
                bangga membawa seni tradisional ke panggung nasional maupun internasional.
            </p>
            <a href="{{ route('profile') }}" class="btn-primary">Selengkapnya →</a>
        </div>
    </div>
</section>

{{-- ===================== DIGITAL ARCHIVE SECTION ===================== --}}
<section class="archive-section">
    <div class="container">
        <span class="badge">Digital Archive</span>
        <div class="archive-grid">
            @for($i = 0; $i < 4; $i++)
            <div class="archive-card">
                <div class="img-placeholder archive-placeholder">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#C65D2E" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

{{-- ===================== DOKUMENTASI KEGIATAN ===================== --}}
<section class="dokumentasi">
    <div class="container">
        <h2 class="section-title">Dokumentasi Kegiatan</h2>
        <div class="dokumentasi-grid">
            @for($i = 0; $i < 4; $i++)
            <div class="dok-card">
                <div class="img-placeholder dok-placeholder">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

{{-- ===================== CTA SECTION ===================== --}}
<section class="cta">
    <div class="container cta-inner">
        <h2>Bergabung dengan Komunitas Kami</h2>
        <p>
            Jadilah bagian dari gerakan pelestarian budaya Indramayu. Daftarkan diri Anda
            sekarang dan mulai perjalanan seni Anda bersama kami.
        </p>
        <a href="{{ route('register') }}" class="btn-cta">Daftar Sekarang</a>
    </div>
</section>

@endsection