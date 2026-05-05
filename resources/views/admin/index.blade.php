@extends('admin.layouts.adminlte')

@section('title', 'Dashboard Admin | VitaGuard')
@section('menu-dashboard', 'active')
@section('page-title', 'Dashboard')

@section('content')
	<div class="row">
		<div class="col-lg-3 col-6">
			<div class="small-box text-bg-primary">
				<div class="inner">
					<h3>Pasien</h3>
					<p>Kelola data pasien</p>
				</div>
				<div class="small-box-icon"><i class="bi bi-people"></i></div>
				<a
					href="{{ route('admin.fitur', ['fitur' => 'members']) }}"
					class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
				>
					Lihat data <i class="bi bi-arrow-right-circle"></i>
				</a>
			</div>
		</div>

		<div class="col-lg-3 col-6">
			<div class="small-box text-bg-success">
				<div class="inner">
					<h3>Dokter</h3>
					<p>Kelola data dokter</p>
				</div>
				<div class="small-box-icon"><i class="bi bi-person-badge"></i></div>
				<a
					href="{{ route('admin.fitur', ['fitur' => 'doctors']) }}"
					class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
				>
					Lihat data <i class="bi bi-arrow-right-circle"></i>
				</a>
			</div>
		</div>

		<div class="col-lg-3 col-6">
			<div class="small-box text-bg-warning">
				<div class="inner">
					<h3>Transaksi</h3>
					<p>Kelola transaksi</p>
				</div>
				<div class="small-box-icon"><i class="bi bi-receipt"></i></div>
				<a
					href="{{ route('admin.fitur', ['fitur' => 'transactions']) }}"
					class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
				>
					Lihat data <i class="bi bi-arrow-right-circle"></i>
				</a>
			</div>
		</div>

		<div class="col-lg-3 col-6">
			<div class="small-box text-bg-danger">
				<div class="inner">
					<h3>Kategori</h3>
					<p>Kelola kategori layanan</p>
				</div>
				<div class="small-box-icon"><i class="bi bi-tags"></i></div>
				<a
					href="{{ route('admin.fitur', ['fitur' => 'categories']) }}"
					class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
				>
					Lihat data <i class="bi bi-arrow-right-circle"></i>
				</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Ringkasan</h3>
				</div>
				<div class="card-body">
					Pilih menu di sidebar untuk mengelola data pasien, dokter, transaksi, dan kategori.
				</div>
			</div>
		</div>
	</div>
@endsection
