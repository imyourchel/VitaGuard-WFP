@extends('admin.layouts.adminlte')

@section('title', 'Daftar Pasien | VitaGuard Admin')
@section('menu-members', 'active')
@section('page-title', 'Daftar Pasien')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pasien</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th style="width: 4%">#</th>
                        <th style="width: 12%">Nama</th>
                        <th style="width: 12%">Email</th>
                        <th style="width: 11%">No. Telepon</th>
                        <th style="width: 10%">Jenis Kelamin</th>
                        <th style="width: 10%">Tanggal Lahir</th>
                        <th style="width: 12%">Alamat</th>
                        <th style="width: 8%">Gol. Darah</th>
                        <th style="width: 8%">Berat (kg)</th>
                        <th style="width: 9%">Tinggi (cm)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($members as $key => $member)
                        <tr>
                            <td><span class="badge text-bg-light">{{ $key + 1 }}</span></td>
                            <td><strong>{{ $member->user ? $member->user->name : '-' }}</strong></td>
                            <td>{{ $member->user ? $member->user->email : '-' }}</td>
                            <td>{{ $member->phone ?? '-' }}</td>
                            <td>
                                @if($member->gender === 'Laki-laki')
                                    <span class="badge text-bg-primary">Laki-laki</span>
                                @elseif($member->gender === 'Perempuan')
                                    <span class="badge text-bg-danger">Perempuan</span>
                                @else
                                    <span class="badge text-bg-secondary">-</span>
                                @endif
                            </td>
                            <td>{{ $member->date_of_birth ? \Carbon\Carbon::parse($member->date_of_birth)->format('d-m-Y') : '-' }}</td>
                            <td>{{ $member->address ?? '-' }}</td>
                            <td><span class="badge text-bg-info">{{ $member->blood_type ?? '-' }}</span></td>
                            <td>{{ $member->weight ?? '-' }}</td>
                            <td>{{ $member->height ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="10" class="text-center py-4 text-muted">Tidak ada data pasien</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
