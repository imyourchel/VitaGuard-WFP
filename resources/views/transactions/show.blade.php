<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Transaksi {{ $transaction->transaction_code }} - VitaGuard</title>
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
        .transaction-card {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }
        .section-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--secondary);
        }
        .info-row {
            display: flex;
            gap: 2rem;
            margin-bottom: 1rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
        }
        .info-label {
            font-weight: 600;
            color: var(--primary);
            min-width: 180px;
        }
        .info-value {
            color: #333;
            flex: 1;
        }
        .status-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
        }
        .status-completed {
            background: #d4edda;
            color: #155724;
        }
        .status-pending {
            background: #fff3cd;
            color: #856404;
        }
        .status-cancelled {
            background: #f8d7da;
            color: #721c24;
        }
        .payment-completed {
            background: #d4edda;
            color: #155724;
        }
        .payment-unpaid {
            background: #f8d7da;
            color: #721c24;
        }
        .amount-display {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--secondary);
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
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('transactions.index', 'transactions.show') ? 'active' : '' }}" href="{{ route('transactions.index') }}">Transaksi</a></li>
                <li class="nav-item ms-2"><a href="{{ route('menu') }}" class="btn btn-primary btn-sm">Mulai Sekarang</a></li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container-lg">
            <a href="{{ route('transactions.index') }}" class="back-button" style="color: white; margin-bottom: 1rem;">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Transaksi
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <div class="container-lg py-4">
            <div class="transaction-card">
                <!-- Header -->
                <div style="margin-bottom: 2rem; padding-bottom: 2rem; border-bottom: 2px solid #eee;">
                    <h1 style="font-size: 2rem; font-weight: 700; color: var(--primary); margin-bottom: 1rem;">
                        {{ $transaction->transaction_code }}
                    </h1>
                    <div style="display: flex; gap: 2rem; flex-wrap: wrap;">
                        <div>
                            <span style="color: #999; font-size: 0.9rem;">Status Transaksi:</span><br>
                            @if($transaction->status === 'completed')
                                <span class="status-badge status-completed">
                                    <i class="fas fa-check-circle me-1"></i>Selesai
                                </span>
                            @elseif($transaction->status === 'pending')
                                <span class="status-badge status-pending">
                                    <i class="fas fa-clock me-1"></i>Pending
                                </span>
                            @else
                                <span class="status-badge status-cancelled">
                                    <i class="fas fa-times-circle me-1"></i>Batal
                                </span>
                            @endif
                        </div>
                        <div>
                            <span style="color: #999; font-size: 0.9rem;">Status Pembayaran:</span><br>
                            @if($transaction->payment_status === 'paid')
                                <span class="status-badge payment-completed">
                                    <i class="fas fa-check-circle me-1"></i>Terbayar
                                </span>
                            @else
                                <span class="status-badge payment-unpaid">
                                    <i class="fas fa-exclamation-circle me-1"></i>Belum Dibayar
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Patient Information -->
                <div style="margin-bottom: 2rem;">
                    <h3 class="section-title"><i class="fas fa-user me-2"></i>Informasi Pasien</h3>
                    <div class="info-row">
                        <div class="info-label">Nama Pasien:</div>
                        <div class="info-value"><strong>{{ $transaction->member && $transaction->member->user ? $transaction->member->user->name : '-' }}</strong></div>
                    </div>
                </div>

                <!-- Service Information -->
                <div style="margin-bottom: 2rem;">
                    <h3 class="section-title"><i class="fas fa-heartbeat me-2"></i>Informasi Layanan</h3>
                    <div class="info-row">
                        <div class="info-label">Nama Layanan:</div>
                        <div class="info-value"><strong>{{ $transaction->service ? $transaction->service->service_name : '-' }}</strong></div>
                    </div>
                    @if($transaction->service && $transaction->service->description)
                        <div class="info-row">
                            <div class="info-label">Deskripsi:</div>
                            <div class="info-value">{{ $transaction->service->description }}</div>
                        </div>
                    @endif
                </div>

                <!-- Doctor Information -->
                <div style="margin-bottom: 2rem;">
                    <h3 class="section-title"><i class="fas fa-user-md me-2"></i>Informasi Dokter</h3>
                    <div class="info-row">
                        <div class="info-label">Nama Dokter:</div>
                        <div class="info-value"><strong>{{ $transaction->doctor && $transaction->doctor->user ? $transaction->doctor->user->name : '-' }}</strong></div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Spesialisasi:</div>
                        <div class="info-value">{{ $transaction->doctor ? $transaction->doctor->specialty : '-' }}</div>
                    </div>
                </div>

                <!-- Consultation Information -->
                <div style="margin-bottom: 2rem;">
                    <h3 class="section-title"><i class="fas fa-calendar-alt me-2"></i>Informasi Konsultasi</h3>
                    <div class="info-row">
                        <div class="info-label">Tanggal Konsultasi:</div>
                        <div class="info-value">{{ $transaction->consultation_date ? $transaction->consultation_date->format('d M Y H:i') : '-' }}</div>
                    </div>
                    @if($transaction->patient_complaints)
                        <div class="info-row">
                            <div class="info-label">Keluhan Pasien:</div>
                            <div class="info-value">{{ $transaction->patient_complaints }}</div>
                        </div>
                    @endif
                    @if($transaction->doctor_diagnosis)
                        <div class="info-row">
                            <div class="info-label">Diagnosis Dokter:</div>
                            <div class="info-value">{{ $transaction->doctor_diagnosis }}</div>
                        </div>
                    @endif
                </div>

                <!-- Payment Information -->
                <div style="margin-bottom: 2rem;">
                    <h3 class="section-title"><i class="fas fa-credit-card me-2"></i>Informasi Pembayaran</h3>
                    <div class="info-row">
                        <div class="info-label">Nominal:</div>
                        <div class="info-value">
                            <span class="amount-display">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    @if($transaction->payment_method)
                        <div class="info-row">
                            <div class="info-label">Metode Pembayaran:</div>
                            <div class="info-value"><strong>{{ ucfirst($transaction->payment_method) }}</strong></div>
                        </div>
                    @endif
                </div>

                <!-- Additional Notes -->
                @if($transaction->notes)
                    <div style="margin-bottom: 2rem;">
                        <h3 class="section-title"><i class="fas fa-sticky-note me-2"></i>Catatan</h3>
                        <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; border-left: 4px solid var(--secondary);">
                            <p style="color: #555; margin: 0;">{{ $transaction->notes }}</p>
                        </div>
                    </div>
                @endif

                <!-- Action Button -->
                <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 2px solid #eee;">
                    <a href="{{ route('transactions.index') }}" class="back-button" style="color: var(--primary); font-size: 1rem;">
                        <i class="fas fa-arrow-left"></i>
                        Kembali ke Daftar Transaksi
                    </a>
                </div>
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
