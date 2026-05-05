@extends('admin.layouts.adminlte')

@section('title', 'Daftar Dokter | VitaGuard Admin')
@section('menu-doctors', 'active')
@section('page-title', 'Daftar Dokter')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Dokter</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th style="width: 4%">#</th>
                        <th style="width: 13%">Nama</th>
                        <th style="width: 13%">Email</th>
                        <th style="width: 13%">Spesialisasi</th>
                        <th style="width: 13%">Nomor Lisensi</th>
                        <th style="width: 13%">Pengalaman</th>
                        <th style="width: 9%">Status</th>
                        <th style="width: 8%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($doctors as $key => $doctor)
                        <tr>
                            <td><span class="badge text-bg-light">{{ $key + 1 }}</span></td>
                            <td><strong>{{ $doctor->user ? $doctor->user->name : '-' }}</strong></td>
                            <td>{{ $doctor->user ? $doctor->user->email : '-' }}</td>
                            <td>{{ $doctor->specialty ?? '-' }}</td>
                            <td>{{ $doctor->license_number ?? '-' }}</td>
                            <td>{{ $doctor->experience_years ?? '-' }} tahun</td>
                            <td>
                                @if($doctor->status == 'active')
                                    <span class="badge text-bg-success">Aktif</span>
                                @else
                                    <span class="badge text-bg-secondary">Nonaktif</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.doctors.show', $doctor->id) }}" class="btn btn-sm btn-primary">
                                    <i class="bi bi-eye me-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="8" class="text-center py-4 text-muted">Tidak ada data dokter</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
