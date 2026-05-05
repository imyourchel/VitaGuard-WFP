@extends('admin.layouts.adminlte')

@section('title', 'Daftar Kategori | VitaGuard Admin')
@section('menu-categories', 'active')
@section('page-title', 'Daftar Kategori')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Kategori Layanan</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 22%">Nama Kategori</th>
                        <th style="width: 30%">Deskripsi</th>
                        <th style="width: 10%">Jumlah Service</th>
                        <th style="width: 33%">List Service</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $key => $category)
                        <tr>
                            <td><span class="badge text-bg-light">{{ $key + 1 }}</span></td>
                            <td><strong>{{ $category->category_name ?? '-' }}</strong></td>
                            <td>{{ $category->description ?? '-' }}</td>
                            <td>
                                <span class="badge text-bg-primary">{{ $category->services_count ?? 0 }}</span>
                            </td>
                            <td>
                                @if($category->services->isNotEmpty())
                                    <div class="d-flex flex-column gap-1">
                                        @foreach($category->services as $service)
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-link text-start text-decoration-none px-0 py-0 shadow-none"
                                                data-bs-toggle="modal"
                                                data-bs-target="#serviceModal-{{ $service->id }}"
                                            >
                                                <i class="bi bi-chevron-right me-1 text-muted"></i>{{ $service->service_name }}
                                            </button>
                                        @endforeach
                                    </div>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center py-4 text-muted">Tidak ada data kategori</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @foreach($categories as $category)
        @foreach($category->services as $service)
            @push('modals')
                <div class="modal fade" id="serviceModal-{{ $service->id }}" tabindex="-1" aria-labelledby="serviceModalLabel-{{ $service->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="serviceModalLabel-{{ $service->id }}">
                                    {{ $service->service_name }}
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <div class="fw-semibold mb-1">Kategori</div>
                                    <span class="badge text-bg-secondary">
                                        {{ $category->category_name ?? '-' }}
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <div class="fw-semibold mb-1">Deskripsi</div>
                                    <div>{{ $service->description ?? '-' }}</div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center py-2 border-top">
                                    <span class="fw-semibold">Ketersediaan</span>
                                    <span>{{ $service->availability ?? '-' }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center py-2 border-top">
                                    <span class="fw-semibold">Harga</span>
                                    <span>Rp {{ number_format($service->price ?? 0, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endpush
        @endforeach
    @endforeach
@endsection
