<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokter - VitaGuard</title>
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
        .table-doctors thead th {
            background: linear-gradient(135deg, #9b59b6 0%, #b56dc9 100%) !important;
            color: white !important;
            border: none;
            font-weight: 600;
            padding: 1rem 0.75rem;
        }
        .table tbody tr:hover { background-color: #f8f9fa; }
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
            <h1><i class="fas fa-user-md me-3"></i>Tim Dokter Profesional</h1>
            <p class="mb-0 mt-2">Dokter berpengalaman siap melayani kesehatan Anda</p>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <div class="container-lg py-4">
            @if($allDoctors->isEmpty())
                <div class="text-center py-5">
                    <i class="fas fa-inbox" style="font-size: 4rem; color: #ccc; margin-bottom: 1rem;"></i>
                    <h3 class="text-muted">Tidak Ada Dokter</h3>
                </div>
            @else
                <div class="card border-0 shadow-sm">
                    <div class="table-responsive">
                        <table class="table table-hover table-doctors">
                            <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th style="width: 20%">Nama Dokter</th>
                                    <th style="width: 15%">Spesialisasi</th>
                                    <th style="width: 15%">Nomor Lisensi</th>
                                    <th style="width: 10%">Pengalaman</th>
                                    <th style="width: 10%">Rating</th>
                                    <th style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allDoctors as $key => $doctor)
                                    <tr>
                                        <td><span class="badge bg-light text-dark">{{ $key + 1 }}</span></td>
                                        <td><strong>{{ $doctor->user ? $doctor->user->name : 'Unknown' }}</strong></td>
                                        <td><span class="badge bg-info">{{ $doctor->specialty }}</span></td>
                                        <td>{{ $doctor->license_number }}</td>
                                        <td><span class="badge bg-warning text-dark">{{ $doctor->experience_years }} thn</span></td>
                                        <td>{{ $doctor->rating }}</td>
                                        <td>
                                            <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye me-1"></i>View
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="7" class="text-center py-4 text-muted">Tidak ada dokter</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
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
