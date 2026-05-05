@extends('admin.layouts.adminlte')

@section('title', 'Daftar Transaksi | VitaGuard Admin')
@section('menu-transactions', 'active')
@section('page-title', 'Daftar Transaksi')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Transaksi</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-hover align-middle mb-0">
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
                            <td><span class="badge text-bg-light">{{ $key + 1 }}</span></td>
                            <td><span class="badge text-bg-secondary">{{ $transaction->transaction_code }}</span></td>
                            <td><strong>{{ $transaction->member && $transaction->member->user ? $transaction->member->user->name : '-' }}</strong></td>
                            <td>{{ $transaction->doctor && $transaction->doctor->user ? $transaction->doctor->user->name : '-' }}</td>
                            <td>{{ $transaction->service ? $transaction->service->service_name : '-' }}</td>
                            <td>{{ $transaction->consultation_date ? $transaction->consultation_date->format('d-m-Y H:i') : '-' }}</td>
                            <td><span class="badge text-bg-success">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</span></td>
                            <td>
                                @if($transaction->status === 'completed')
                                    <span class="badge text-bg-success">Selesai</span>
                                @elseif($transaction->status === 'pending')
                                    <span class="badge text-bg-warning">Pending</span>
                                @else
                                    <span class="badge text-bg-danger">Batal</span>
                                @endif
                            </td>
                            <td>
                                @if($transaction->payment_status === 'paid')
                                    <span class="badge text-bg-success">Terbayar</span>
                                @else
                                    <span class="badge text-bg-danger">Belum Bayar</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.transactions.show', $transaction->id) }}" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye me-1"></i>Detail
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
@endsection
