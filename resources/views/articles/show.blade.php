<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article->title }} - VitaGuard</title>
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
        .btn-primary { background: var(--primary); border: none; padding: 12px 30px; font-weight: 600; border-radius: 8px; transition: all 0.3s; }
        .btn-primary:hover { background: #164778; transform: translateY(-2px); box-shadow: 0 6px 16px rgba(31, 88, 160, 0.3); color: white; }
        .page-header { background: linear-gradient(135deg, var(--primary) 0%, #0d96d1 100%); color: white; display: flex; align-items: center; }
        .page-header .container-lg { display: flex; align-items: center; justify-content: flex-start; }
        .article-container {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }
        .article-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }
        .article-meta {
            display: flex;
            gap: 2rem;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        .article-meta-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #666;
        }
        .article-meta-item i {
            color: var(--secondary);
            font-size: 1.2rem;
        }
        .article-meta-item strong {
            color: var(--primary);
        }
        .article-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            text-align: justify;
            margin-bottom: 2rem;
        }
        .article-content p {
            margin-bottom: 1.5rem;
        }
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }
        .back-button:hover {
            color: #0d96d1;
            transform: translateX(-5px);
        }
        .back-button i {
            transition: transform 0.3s ease;
        }
        .back-button:hover i {
            transform: translateX(-5px);
        }
        .article-thumbnail {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .article-thumbnail-placeholder {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, var(--primary) 0%, #0d96d1 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        main { flex: 1; }
        footer { flex-shrink: 0; margin-top: auto; background: #2c3e50; color: white; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-lg">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-heartbeat" style="color: var(--secondary)"></i> VitaGuard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('categories.index') ? 'active' : '' }}" href="{{ route('categories.index') }}">Kategori</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('services.index') ? 'active' : '' }}" href="{{ route('services.index') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('doctors.index') ? 'active' : '' }}" href="{{ route('doctors.index') }}">Dokter</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('articles.index', 'articles.show') ? 'active' : '' }}" href="{{ route('articles.index') }}">Artikel</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('transactions.index') ? 'active' : '' }}" href="{{ route('transactions.index') }}">Transaksi</a></li>
                <li class="nav-item ms-2"><a href="{{ route('menu') }}" class="btn btn-primary btn-sm">Mulai Sekarang</a></li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container-lg">
            <a href="{{ route('articles.index') }}" class="back-button" style="color: white; margin-bottom: 1rem;">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Artikel
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <div class="container-lg py-4">
            <div class="article-container">
                @if($article->thumbnail)
                    <img src="{{ $article->thumbnail }}" alt="{{ $article->title }}" class="article-thumbnail">
                @else
                    <div class="article-thumbnail-placeholder">
                        <div style="text-align: center;">
                            <i class="fas fa-image" style="font-size: 4rem; color: white; opacity: 0.3; margin-bottom: 1rem;"></i>
                            <p style="color: white; opacity: 0.5; margin: 0;">Tidak ada gambar thumbnail</p>
                        </div>
                    </div>
                @endif
                <h1 class="article-title">{{ $article->title }}</h1>

                <div class="article-meta">
                    <div class="article-meta-item">
                        <i class="fas fa-user-circle"></i>
                        <div>
                            <span style="color: #999; font-size: 0.9rem;">Penulis</span><br>
                            <strong>{{ $article->author ? $article->author->name : 'Unknown' }}</strong>
                        </div>
                    </div>
                    <div class="article-meta-item">
                        <i class="fas fa-calendar-alt"></i>
                        <div>
                            <span style="color: #999; font-size: 0.9rem;">Tanggal Publikasi</span><br>
                            <strong>{{ $article->published_at ? $article->published_at->format('d M Y H:i') : '-' }}</strong>
                        </div>
                    </div>
                    <div class="article-meta-item">
                        <i class="fas fa-eye"></i>
                        <div>
                            <span style="color: #999; font-size: 0.9rem;">Dilihat</span><br>
                            <strong>{{ $article->views ?? 0 }}</strong>
                        </div>
                    </div>
                </div>

                <div class="article-content">
                    {!! nl2br(e($article->content)) !!}
                </div>

                <a href="{{ route('articles.index') }}" class="back-button">
                    <i class="fas fa-arrow-left"></i>
                    Kembali ke Artikel
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-3 mt-5">
        <div class="container-lg text-center">
            <p class="mb-0">&copy; 2026 VitaGuard. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
