<!doctype html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Konsultasi Online | VitaGuard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
	<style>
		:root { --primary: #1f58a0; --secondary: #00a651; }
		body { background: #f8f9fa; }
		.navbar { background: white !important; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
		.navbar-brand { font-weight: 700; color: var(--primary) !important; }
		.service-item { border: 1px solid #e0e0e0; border-radius: 12px; padding: 25px; margin-bottom: 20px; background: white; transition: all 0.3s; }
		.service-item:hover { box-shadow: 0 8px 20px rgba(31, 88, 160, 0.12); border-color: var(--primary); }
		.service-icon { width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 15px; color: white; }
		.icon-umum { background: var(--primary); }
		.icon-anak { background: #00a651; }
		.icon-kulit { background: #f39200; }
		.service-title { font-weight: 700; font-size: 1.1rem; color: var(--primary); margin-bottom: 8px; }
		.service-desc { color: #666; font-size: 0.95rem; margin-bottom: 12px; }
		.badge-custom { padding: 6px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; }
		.btn-konsultasi { background: var(--primary); border: none; color: white; padding: 10px 20px; border-radius: 8px; font-weight: 600; transition: all 0.3s; width: 100%; }
		.btn-konsultasi:hover { background: #164778; color: white; }
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container-lg">
		<a class="navbar-brand" href="{{ url('/') }}">
			<i class="fas fa-heartbeat" style="color: var(--secondary)"></i> VitaGuard
		</a>
		<a href="{{ route('menu') }}" class="btn btn-outline-primary btn-sm ms-auto">← Kembali</a>
	</div>
</nav>

<div class="container-lg py-5">
	<div class="mb-5">
		<h2 class="fw-bold mb-2">Layanan Konsultasi Online</h2>
		<p class="text-secondary">Pilih jenis konsultasi yang Anda butuhkan</p>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="service-item">
				<div class="service-icon icon-umum">
					<i class="fas fa-stethoscope"></i>
				</div>
				<div class="service-title">Konsultasi Umum</div>
				<p class="service-desc">Untuk keluhan kesehatan umum seperti demam, batuk, influenza, gangguan pencernaan.</p>
				<div class="mb-3">
					<span class="badge-custom bg-light text-primary">Tersedia 24 Jam</span>
				</div>
				<button class="btn btn-konsultasi">Mulai Konsultasi</button>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="service-item">
				<div class="service-icon icon-anak">
					<i class="fas fa-baby"></i>
				</div>
				<div class="service-title">Konsultasi Anak</div>
				<p class="service-desc">Spesialis pemeriksaan tumbuh kembang anak, imunisasi, dan nutrisi anak.</p>
				<div class="mb-3">
					<span class="badge-custom bg-success text-white">Dokter Spesialis</span>
				</div>
				<button class="btn btn-konsultasi">Mulai Konsultasi</button>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="service-item">
				<div class="service-icon icon-kulit">
					<i class="fas fa-spa"></i>
				</div>
				<div class="service-title">Konsultasi Kulit</div>
				<p class="service-desc">Keluhan masalah kulit seperti jerawat, alergi, iritasi kulit, dan ruam.</p>
				<div class="mb-3">
					<span class="badge-custom bg-warning text-white">Resep Digital</span>
				</div>
				<button class="btn btn-konsultasi">Mulai Konsultasi</button>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="service-item">
				<div class="service-icon icon-umum">
					<i class="fas fa-brain"></i>
				</div>
				<div class="service-title">Konsultasi Psikologi</div>
				<p class="service-desc">Layanan konseling untuk stress, kecemasan, dan masalah psikologis lainnya.</p>
				<div class="mb-3">
					<span class="badge-custom bg-info text-white">Profesional Terlatih</span>
				</div>
				<button class="btn btn-konsultasi">Mulai Konsultasi</button>
			</div>
		</div>
	</div>
</div>

<footer class="bg-dark text-white py-4 mt-5">
	<div class="container-lg text-center">
		<p class="mb-0">&copy; 2026 VitaGuard</p>
	</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
