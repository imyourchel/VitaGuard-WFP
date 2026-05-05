@extends('admin.layouts.adminlte')

@section('title', ($doctor->user->name ?? 'Detail Dokter') . ' | VitaGuard Admin')
@section('menu-doctors', 'active')
@section('page-title', 'Detail Dokter')

@section('content')
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h3 class="card-title mb-0">Profil Dokter</h3>
      <a href="{{ route('admin.fitur', ['fitur' => 'doctors']) }}" class="btn btn-sm btn-secondary ms-auto">
        <i class="bi bi-arrow-left"></i> Kembali
      </a>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-3 text-center">
          @if($doctor->photo)
            <img src="{{ $doctor->photo }}" alt="{{ $doctor->user->name }}" class="img-fluid rounded">
          @else
            <div class="bg-secondary-subtle rounded d-flex align-items-center justify-content-center" style="height: 150px;">
              <i class="bi bi-person-badge fs-1 text-secondary"></i>
            </div>
          @endif
        </div>
        <div class="col-md-9">
          <h4 class="mb-1">{{ $doctor->user->name }}</h4>
          <p class="text-muted mb-2">{{ $doctor->specialty ?? '-' }}</p>
          <div class="mb-3">
            @if($doctor->status == 'active')
              <span class="badge text-bg-success">Aktif</span>
            @else
              <span class="badge text-bg-secondary">Nonaktif</span>
            @endif
            <span class="badge text-bg-warning">Rating {{ $doctor->rating ?? 0 }}/5</span>
          </div>
          @if($doctor->bio)
            <p class="mb-0">{{ $doctor->bio }}</p>
          @endif
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-6">
          <h5>Informasi Pribadi</h5>
          <table class="table table-sm">
            <tr>
              <th style="width: 40%">Jenis Kelamin</th>
              <td>{{ $doctor->gender ?? '-' }}</td>
            </tr>
            <tr>
              <th>Tanggal Lahir</th>
              <td>{{ $doctor->date_of_birth ? \Carbon\Carbon::parse($doctor->date_of_birth)->format('d-m-Y') : '-' }}</td>
            </tr>
            <tr>
              <th>Pengalaman</th>
              <td>{{ $doctor->experience_years ?? '-' }} tahun</td>
            </tr>
            <tr>
              <th>Nomor Lisensi</th>
              <td>{{ $doctor->license_number ?? '-' }}</td>
            </tr>
          </table>
        </div>
        <div class="col-md-6">
          <h5>Kontak</h5>
          <table class="table table-sm">
            <tr>
              <th style="width: 40%">Email</th>
              <td>{{ $doctor->email ?? '-' }}</td>
            </tr>
            <tr>
              <th>Telepon</th>
              <td>{{ $doctor->phone ?? '-' }}</td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td>{{ $doctor->address ?? '-' }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
