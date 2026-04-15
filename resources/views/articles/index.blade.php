<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel - VitaGuard</title>
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
        .carousel-content .btn-primary { background: #FFD557; color: #fff; }
        .carousel-content .btn-primary:hover { background: #FFC107; box-shadow: 0 6px 16px rgba(255, 193, 7, 0.3); color: #fff; }
        .carousel-control-prev, .carousel-control-next { z-index: 10; opacity: 0.7; transition: opacity 0.3s; }
        .carousel-control-prev:hover, .carousel-control-next:hover { opacity: 1; }
        .carousel-control-prev-icon, .carousel-control-next-icon { padding: 10px; }
        .stats-section { background: linear-gradient(135deg, #1f58a0 0%, #0d96d1 100%); color: white; padding: 40px 0; }
        .stat-item { text-align: center; padding: 20px; }
        .stat-number { font-size: 2rem; font-weight: 700; }
        .page-header { background: linear-gradient(135deg, var(--primary) 0%, #0d96d1 100%); color: white; padding: 3rem 0; margin-bottom: 2rem; }
        .page-header h1 { margin: 0; font-size: 2rem; font-weight: 700; }
        .table-responsive { border-radius: 8px; overflow: hidden; }
        .table { margin-bottom: 0; }
        .table thead th {
            background: linear-gradient(135deg, #9b59b6 0%, #b56dc9 100%) !important;
            color: white !important;
            border: none;
            font-weight: 600;
            padding: 1rem 0.75rem;
        }
        .table-articles thead th {
            background: linear-gradient(135deg, #9b59b6 0%, #b56dc9 100%) !important;
            color: white !important;
            border: none;
            font-weight: 600;
            padding: 1rem 0.75rem;
        }
        .article-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            cursor: pointer;
            height: 100%;
            display: flex;
            flex-direction: column;
            background: white;
        }
        .article-card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .article-card:hover .article-card-image {
            transform: scale(1.05);
        }
        .article-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(31, 88, 160, 0.15);
        }
        .article-card-header {
            background: linear-gradient(135deg, var(--primary) 0%, #0d96d1 100%);
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            min-height: 80px;
        }
        .article-card-header h5 {
            margin: 0;
            font-weight: 700;
            line-height: 1.4;
        }
        .article-card-body {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .article-author {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .article-author i {
            margin-right: 8px;
            color: var(--secondary);
        }
        .article-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: 15px;
            border-top: 1px solid #eee;
            font-size: 0.9rem;
            color: #666;
        }
        .article-meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .article-meta-item i {
            color: var(--tertiary);
        }
        .article-date {
            color: #999;
            font-size: 0.85rem;
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
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('articles.index') ? 'active' : '' }}" href="{{ route('articles.index') }}">Artikel</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('transactions.index') ? 'active' : '' }}" href="{{ route('transactions.index') }}">Transaksi</a></li>
                <li class="nav-item ms-2"><a href="{{ route('menu') }}" class="btn btn-primary btn-sm">Mulai Sekarang</a></li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container-lg">
            <h1><i class="fas fa-newspaper me-3"></i>Artikel</h1>
            <p class="mb-0 mt-2">Baca artikel kesehatan terkini dan tips bermanfaat untuk gaya hidup sehat</p>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <div class="container-lg py-4">
            @if($allArticles->isEmpty())
                <div class="text-center py-5">
                    <i class="fas fa-inbox" style="font-size: 4rem; color: #ccc; margin-bottom: 1rem;"></i>
                    <h3 class="text-muted">Tidak Ada Artikel</h3>
                </div>
            @else
                <div class="row g-4">
                    @forelse($allArticles as $article)
                        <div class="col-md-6 col-lg-4">
                            <a href="{{ route('articles.show', $article->id) }}" style="text-decoration: none; color: inherit;">
                                <div class="article-card">
                                    @if($article->thumbnail)
                                        <img src="{{ $article->thumbnail }}" alt="{{ $article->title }}" class="article-card-image">
                                    @else
                                        <div class="article-card-image" style="background: linear-gradient(135deg, var(--primary) 0%, #0d96d1 100%); display: flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-image" style="font-size: 3rem; color: white; opacity: 0.5;"></i>
                                        </div>
                                    @endif
                                    <div class="article-card-header">
                                        <h5>{{ $article->title }}</h5>
                                    </div>
                                    <div class="article-card-body">
                                        <div class="article-author">
                                            <i class="fas fa-user-circle"></i>
                                            <strong>{{ $article->author ? $article->author->name : 'Unknown' }}</strong>
                                        </div>
                                        <div class="article-meta">
                                            <div class="article-meta-item">
                                                <i class="fas fa-eye"></i>
                                                <span>{{ $article->views ?? 0 }} views</span>
                                            </div>
                                        </div>
                                        <div class="article-date">
                                            <i class="fas fa-calendar-alt"></i>
                                            {{ $article->published_at ? $article->published_at->format('d M Y') : '-' }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="text-center py-4 text-muted">Tidak ada artikel</div>
                        </div>
                    @endforelse
                </div>
            @endif
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
