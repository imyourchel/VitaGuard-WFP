<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VitaGuard | Portal Kesehatan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        :root { --primary: #1f58a0; --secondary: #00a651; --tertiary: #f39200; }
        html, body { height: 100%; margin: 0; padding: 0; }
        html { display: flex; flex-direction: column; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fa; display: flex; flex-direction: column; flex: 1; }
        .navbar { background: white !important; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .navbar-brand { font-weight: 700; font-size: 1.3rem; color: var(--primary) !important; }
        .nav-link { transition: all 0.3s ease; }
        .nav-link.active {
            background: #00a651 !important;
            color: white !important;
            border-radius: 6px;
            font-weight: 600;
        }
        .carousel-item { height: 500px; position: relative; }
        .carousel-item::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.3); z-index: 1; }
        .carousel-content { position: relative; z-index: 2; display: flex; align-items: center; justify-content: center; height: 100%; color: white; text-align: center; padding: 20px; }
        .carousel-content h1 { font-weight: 700; font-size: 2.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); margin-bottom: 15px; }
        .carousel-content p { font-size: 1.1rem; text-shadow: 1px 1px 2px rgba(0,0,0,0.3); margin-bottom: 20px; }
        .feature-card { border: none; border-radius: 12px; padding: 30px; text-align: center; background: white; box-shadow: 0 4px 12px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .feature-card:hover { transform: translateY(-8px); box-shadow: 0 12px 24px rgba(31, 88, 160, 0.15); }
        .feature-icon { font-size: 3rem; margin-bottom: 15px; color: var(--primary); }
        .btn-primary { background: var(--primary); border: none; padding: 12px 30px; font-weight: 600; border-radius: 8px; transition: all 0.3s; }
        .btn-primary:hover { background: #164778; transform: translateY(-2px); box-shadow: 0 6px 16px rgba(31, 88, 160, 0.3); color: white; }
        .carousel-content .btn-primary { background: #FFD557; color: #333; }
        .carousel-content .btn-primary:hover { background: #FFC107; box-shadow: 0 6px 16px rgba(255, 193, 7, 0.3); color: #333; }
        .carousel-control-prev, .carousel-control-next { z-index: 10; opacity: 0.7; transition: opacity 0.3s; }
        .carousel-control-prev:hover, .carousel-control-next:hover { opacity: 1; }
        .carousel-control-prev-icon, .carousel-control-next-icon { padding: 10px; }
        .stats-section { background: linear-gradient(135deg, #1f58a0 0%, #0d96d1 100%); color: white; padding: 40px 0; }
        .stat-item { text-align: center; padding: 20px; }
        .stat-number { font-size: 2rem; font-weight: 700; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-lg">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fas fa-heartbeat" style="color: var(--primary)"></i> VitaGuard
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('categories.index') ? 'active' : '' }}" href="{{ route('categories.index') }}">Kategori</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('services.index') ? 'active' : '' }}" href="{{ route('services.index') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('doctors.index') ? 'active' : '' }}" href="{{ route('doctors.index') }}">Dokter</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('articles.index') ? 'active' : '' }}" href="{{ route('articles.index') }}">Artikel</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('transactions.index') ? 'active' : '' }}" href="{{ route('transactions.index') }}">Transaksi</a></li>
                <li class="nav-item ms-2"><a href="{{ route('menu') }}" class="btn btn-primary btn-sm">Mulai Sekarang</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" style="background: linear-gradient(135deg, #1f58a0 0%, #0d96d1 100%);">
            <div class="carousel-content">
                <div>
                    <h1>Konsultasi dengan Dokter Terbaik</h1>
                    <p>Layanan kesehatan online 24/7 hanya untuk Anda</p>
                    <a href="{{ route('menu.layanan', ['jenis' => 'konsultasi']) }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-stethoscope"></i> Mulai Konsultasi
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background: linear-gradient(135deg, #00a651 0%, #2ab055 100%);">
            <div class="carousel-content">
                <div>
                    <h1>Buat Janji Temu dengan Mudah</h1>
                    <p>Pesan jadwal kunjungan dokter kapan saja, di mana saja</p>
                    <a href="{{ route('menu.layanan', ['jenis' => 'janji']) }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-calendar-alt"></i> Buat Janji
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background: linear-gradient(135deg, #f39200 0%, #ff9d2e 100%);">
            <div class="carousel-content">
                <div>
                    <h1>Akses Artikel Kesehatan Terpercaya</h1>
                    <p>Pelajari tips dan informasi kesehatan dari para ahli</p>
                    <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-book"></i> Baca Artikel</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<section class="stats-section">
    <div class="container-lg">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="stat-item">
                    <div class="stat-number">20+</div>
                    <p>Pasien Aktif</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-item">
                    <div class="stat-number">5+</div>
                    <p>Dokter Profesional</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <p>Konsultasi Selesai</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="fitur" class="py-5">
    <div class="container-lg">
        <h2 class="text-center mb-5 fw-bold" style="color: var(--primary);">Fitur Unggulan VitaGuard</h2>
        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-video"></i></div>
                    <h5>Konsultasi Video</h5>
                    <p class="text-secondary small">Berkonsultasi langsung dengan dokter melalui video call</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-calendar-check"></i></div>
                    <h5>Booking Mudah</h5>
                    <p class="text-secondary small">Pesan jadwal konsultasi dengan sekali klik</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-file-medical"></i></div>
                    <h5>Riwayat Digital</h5>
                    <p class="text-secondary small">Simpan semua catatan kesehatan Anda dengan aman</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-lock"></i></div>
                    <h5>Privasi Terjamin</h5>
                    <p class="text-secondary small">Data Anda dilindungi dengan enkripsi tingkat tinggi</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('menu') }}" class="btn btn-primary btn-lg">
                Mulai Layanan Kesehatan Sekarang
            </a>
        </div>
    </div>
</section>

<footer class="bg-dark text-white py-4">
    <div class="container-lg text-center">
        <p class="mb-0">&copy; 2026 VitaGuard. Layanan Kesehatan Digital Terpercaya.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
