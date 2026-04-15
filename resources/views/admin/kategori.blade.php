<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kategori | VitaGuard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        :root { --primary: #1f58a0; --secondary: #00a651; --tertiary: #f39200; }
        html, body { height: 100%; margin: 0; padding: 0; }
        html { display: flex; flex-direction: column; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fa; display: flex; flex-direction: column; flex: 1; }
        .navbar { background: white !important; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .navbar-brand { font-weight: 700; font-size: 1.3rem; color: var(--primary) !important; }
        .page-title { color: var(--primary); font-weight: 700; margin-bottom: 30px; }
        .table-responsive { border-radius: 12px; overflow: hidden; }
        .table thead th { background: linear-gradient(135deg, #9b59b6 0%, #b56dc9 100%) !important; color: white !important; border: none; font-weight: 600; padding: 1rem 0.75rem; }
        .table thead th:first-child { border-radius: 12px 0 0 0; }
        .table thead th:last-child { border-radius: 0 12px 0 0; }
        .table tbody tr:hover { background-color: #f8f9fa; }
        .table tbody tr:last-child td:first-child { border-radius: 0 0 0 12px; }
        .table tbody tr:last-child td:last-child { border-radius: 0 0 12px 0; }
        .btn-back { margin-bottom: 20px; }
        main { flex: 1; }
        footer { flex-shrink: 0; margin-top: auto; background: #2c3e50; color: white; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-lg">
        <a class="navbar-brand" href="{{ url('/admin') }}">
            <i class="fas fa-heartbeat" style="color: var(--secondary)"></i> VitaGuard
        </a>
        <span class="navbar-text ms-auto fw-bold">Admin - Daftar Kategori</span>
    </div>
</nav>

<main>
<div class="container-lg py-5">
    <a href="{{ route('admin') }}" class="btn btn-secondary btn-back">
        <i class="fas fa-arrow-left me-2"></i>Kembali ke Dashboard
    </a>

    <h1 class="page-title"><i class="fas fa-list me-2"></i>Daftar Kategori</h1>

    <div class="card border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 30%">Nama Kategori</th>
                        <th style="width: 65%">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $key => $category)
                        <tr>
                            <td><span class="badge bg-light text-dark">{{ $key + 1 }}</span></td>
                            <td><strong>{{ $category->category_name ?? '-' }}</strong></td>
                            <td>{{ $category->description ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="3" class="text-center py-4 text-muted">Tidak ada data kategori</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>

<footer class="bg-dark text-white py-3 mt-5">
    <div class="container-lg text-center">
        <p class="mb-0">&copy; 2026 VitaGuard Admin Panel</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
