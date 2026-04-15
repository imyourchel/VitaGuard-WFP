<!doctype html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pilih Layanan | VitaGuard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
	<style>
		:root { --primary: #1f58a0; --secondary: #00a651; }
		body { background: linear-gradient(135deg, #f8f9fa 0%, #e8f1ff 100%); min-height: 100vh; }
		.navbar { background: white !important; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
		.navbar-brand { font-weight: 700; color: var(--primary) !important; }
		.service-card { border: none; border-radius: 16px; padding: 40px; background: white; box-shadow: 0 8px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; cursor: pointer; }
		.service-card:hover { transform: translateY(-10px); box-shadow: 0 16px 40px rgba(31, 88, 160, 0.15); }
		.service-icon { font-size: 4rem; margin-bottom: 20px; }
		.service-icon.konsultasi { color: var(--primary); }
		.service-icon.janji { color: var(--secondary); }
		.service-card a { text-decoration: none; color: inherit; display: block; }
		.btn-service { font-weight: 600; padding: 12px 30px; border-radius: 8px; transition: all 0.3s; width: 100%; }
		.btn-konsultasi { background: var(--primary); color: white; }
		.btn-konsultasi:hover { background: #164778; color: white; }
		.btn-janji { background: var(--secondary); color: white; }
		.btn-janji:hover { background: #008a3f; color: white; }
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container-lg">
		<a class="navbar-brand" href="{{ url('/') }}">
			<i class="fas fa-heartbeat" style="color: var(--secondary)"></i> VitaGuard
		</a>
		<a href="{{ url('/') }}" class="btn btn-outline-primary btn-sm ms-auto">← Kembali</a>
	</div>
</nav>

<section class="container-lg py-5">
	<div class="text-center mb-5">
		<h1 class="fw-bold mb-3">Pilih Metode Layanan Kesehatan</h1>
		<p class="text-secondary fs-5">Pilih layanan yang sesuai dengan kebutuhan Anda</p>
	</div>

	<div class="row g-4 justify-content-center">
		<div class="col-md-6 col-lg-5">
			<a href="{{ route('menu.layanan', ['jenis' => 'konsultasi']) }}" class="text-decoration-none">
				<div class="service-card h-100">
					<div class="service-icon konsultasi text-center">
						<i class="fas fa-video"></i>
					</div>
					<h4 class="mb-3">Konsultasi Online</h4>
					<p class="text-secondary mb-4">Berkonsultasi langsung dengan dokter terbaik melalui video call tanpa perlu antre panjang. Dapatkan resep digital dan saran kesehatan dari rumah Anda.</p>
					<div class="btn btn-service btn-konsultasi">
						<i class="fas fa-arrow-right"></i> Buka Layanan Konsultasi
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-5">
			<a href="{{ route('menu.layanan', ['jenis' => 'janji']) }}" class="text-decoration-none">
				<div class="service-card h-100">
					<div class="service-icon janji text-center">
						<i class="fas fa-calendar-check"></i>
					</div>
					<h4 class="mb-3">Janji Temu Dokter</h4>
					<p class="text-secondary mb-4">Atur jadwal kunjungan Anda ke klinik atau rumah sakit dengan mudah. Pilih dokter, waktu, dan lokasi yang sesuai, lalu tunggu konfirmasi dari tim medis kami.</p>
					<div class="btn btn-service btn-janji">
						<i class="fas fa-arrow-right"></i> Buat Janji Temu
					</div>
				</div>
			</a>
		</div>
	</div>
</section>

<footer class="bg-dark text-white py-4 mt-5">
	<div class="container-lg text-center">
		<p class="mb-0">&copy; 2026 VitaGuard</p>
	</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
