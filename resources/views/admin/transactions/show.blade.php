@extends('admin.layouts.adminlte')

@section('title', 'Detail Transaksi ' . $transaction->transaction_code . ' | VitaGuard Admin')
@section('menu-transactions', 'active')
@section('page-title', 'Detail Transaksi')

@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h3 class="card-title mb-0">{{ $transaction->transaction_code }}</h3>
            <a href="{{ route('admin.fitur', ['fitur' => 'transactions']) }}" class="btn btn-sm btn-secondary ms-auto">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="mb-3">
                @if($transaction->status === 'completed')
                    <span class="badge text-bg-success">Selesai</span>
                @elseif($transaction->status === 'pending')
                    <span class="badge text-bg-warning">Pending</span>
                @else
                    <span class="badge text-bg-danger">Batal</span>
                @endif
                @if($transaction->payment_status === 'paid')
                    <span class="badge text-bg-success">Terbayar</span>
                @else
                    <span class="badge text-bg-danger">Belum Dibayar</span>
                @endif
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h5>Informasi Pasien</h5>
                    <table class="table table-sm">
                        <tr>
                            <th style="width: 40%">Nama Pasien</th>
                            <td>{{ $transaction->member && $transaction->member->user ? $transaction->member->user->name : '-' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h5>Informasi Dokter</h5>
                    <table class="table table-sm">
                        <tr>
                            <th style="width: 40%">Nama Dokter</th>
                            <td>{{ $transaction->doctor && $transaction->doctor->user ? $transaction->doctor->user->name : '-' }}</td>
                        </tr>
                        <tr>
                            <th>Spesialisasi</th>
                            <td>{{ $transaction->doctor ? $transaction->doctor->specialty : '-' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-6">
                    <h5>Informasi Layanan</h5>
                    <table class="table table-sm">
                        <tr>
                            <th style="width: 40%">Nama Layanan</th>
                            <td>{{ $transaction->service ? $transaction->service->service_name : '-' }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>{{ $transaction->service && $transaction->service->description ? $transaction->service->description : '-' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h5>Informasi Konsultasi</h5>
                    <table class="table table-sm">
                        <tr>
                            <th style="width: 40%">Tanggal</th>
                            <td>{{ $transaction->consultation_date ? $transaction->consultation_date->format('d M Y H:i') : '-' }}</td>
                        </tr>
                        <tr>
                            <th>Keluhan</th>
                            <td>{{ $transaction->patient_complaints ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Diagnosis</th>
                            <td>{{ $transaction->doctor_diagnosis ?? '-' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-6">
                    <h5>Informasi Pembayaran</h5>
                    <table class="table table-sm">
                        <tr>
                            <th style="width: 40%">Nominal</th>
                            <td>Rp {{ number_format($transaction->amount, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th>Metode</th>
                            <td>{{ $transaction->payment_method ? ucfirst($transaction->payment_method) : '-' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h5>Catatan</h5>
                    <div class="border rounded p-2 bg-light">
                        {{ $transaction->notes ?? '-' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
