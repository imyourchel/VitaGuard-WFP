<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Transaksi | VitaGuard Admin</title>
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
        <span class="navbar-text ms-auto fw-bold">Admin - Daftar Transaksi</span>
    </div>
</nav>

<main>
<div class="container-lg py-5">
    <a href="{{ route('admin') }}" class="btn btn-secondary btn-back">
        <i class="fas fa-arrow-left me-2"></i>Kembali ke Dashboard
    </a>

    <h1 class="page-title"><i class="fas fa-receipt me-2"></i>Daftar Transaksi</h1>

    <div class="card border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width: 4%">#</th>
                        <th style="width: 11%">Kode Transaksi</th>
                        <th style="width: 11%">Pasien</th>
                        <th style="width: 11%">Dokter</th>
                        <th style="width: 11%">Layanan</th>
                        <th style="width: 11%">Tanggal</th>
                        <th style="width: 11%">Nominal</th>
                        <th style="width: 11%">Status</th>
                        <th style="width: 12%">Pembayaran</th>
                        <th style="width: 8%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($transactions as $key => $transaction)
                        <tr>
                            <td><span class="badge bg-light text-dark">{{ $key + 1 }}</span></td>
                            <td><span class="badge bg-secondary">{{ $transaction->transaction_code }}</span></td>
                            <td><strong>{{ $transaction->member && $transaction->member->user ? $transaction->member->user->name : '-' }}</strong></td>
                            <td>{{ $transaction->doctor && $transaction->doctor->user ? $transaction->doctor->user->name : '-' }}</td>
                            <td>{{ $transaction->service ? $transaction->service->service_name : '-' }}</td>
                            <td>{{ $transaction->consultation_date ? $transaction->consultation_date->format('d-m-Y H:i') : '-' }}</td>
                            <td><span class="badge bg-success">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</span></td>
                            <td>
                                @if($transaction->status === 'completed')
                                    <span class="badge bg-success">Selesai</span>
                                @elseif($transaction->status === 'pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @else
                                    <span class="badge bg-danger">Batal</span>
                                @endif
                            </td>
                            <td>
                                @if($transaction->payment_status === 'paid')
                                    <span class="badge bg-success">Terbayar</span>
                                @else
                                    <span class="badge bg-danger">Belum Bayar</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('transactions.show', $transaction->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye me-1"></i>View
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="10" class="text-center py-4 text-muted">Tidak ada data transaksi</td></tr>
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
