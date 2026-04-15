<!doctype html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Janji Temu Dokter | VitaGuard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
	<style>
		:root { --primary: #1f58a0; --secondary: #00a651; }
		body { background: #f8f9fa; }
		.navbar { background: white !important; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
		.navbar-brand { font-weight: 700; color: var(--primary) !important; }
		.appointment-card { border: 1px solid #e0e0e0; border-radius: 12px; padding: 30px; background: white; margin-bottom: 20px; transition: all 0.3s; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
		.appointment-card:hover { box-shadow: 0 8px 20px rgba(31, 88, 160, 0.12); transform: translateY(-3px); }
		.card-icon { width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: white; margin-bottom: 15px; }
		.icon-blue { background: var(--primary); }
		.icon-green { background: #00a651; }
		.icon-orange { background: #f39200; }
		.card-title { font-weight: 700; font-size: 1.2rem; color: var(--primary); margin-bottom: 10px; }
		.card-desc { color: #666; margin-bottom: 15px; line-height: 1.6; }
		.info-row { display: flex; gap: 10px; margin-bottom: 10px; font-size: 0.95rem; }
		.info-row i { color: #00a651; width: 20px; }
		.btn-appointment { background: var(--primary); border: none; color: white; padding: 12px 25px; border-radius: 8px; font-weight: 600; transition: all 0.3s; width: 100%; }
		.btn-appointment:hover { background: #164778; color: white; }
		.alert-info { background: #e8f1ff; border: 1px solid var(--primary); color: var(--primary); border-radius: 8px; }
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
		<h2 class="fw-bold mb-2">Layanan Janji Temu Dokter</h2>
		<p class="text-secondary">Pilih layanan janji temu yang sesuai dengan kebutuhan Anda</p>
	</div>

	<div class="alert alert-info mb-4">
		<i class="fas fa-info-circle"></i> Jadwal janji temu dapat disesuaikan dengan ketersediaan dokter.
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="appointment-card">
				<div class="card-icon icon-blue">
					<i class="fas fa-user-md"></i>
				</div>
				<div class="card-title">Janji Temu Dokter Umum</div>
				<p class="card-desc">Pemeriksaan rutin kesehatan dan konsultasi awal di fasilitas kesehatan terdekat.</p>
				<div class="info-row">
					<i class="fas fa-calendar"></i>
					<span>Senin - Sabtu, 08:00 - 20:00</span>
				</div>
				<div class="info-row">
					<i class="fas fa-map-marker-alt"></i>
					<span>30+ Klinik Mitra di Seluruh Jakarta</span>
				</div>
				<button class="btn btn-appointment mt-3">Buat Janji Temu</button>
			</div>
		</div>

		<div class="col-md-6">
			<div class="appointment-card">
				<div class="card-icon icon-green">
					<i class="fas fa-stethoscope"></i>
				</div>
				<div class="card-title">Janji Temu Spesialis</div>
				<p class="card-desc">Layanan konsultasi dengan dokter spesialis: Jantung, Saraf, Kulit, Kandungan, Mata, dan Anak.</p>
				<div class="info-row">
					<i class="fas fa-calendar"></i>
					<span>Sesuai Jadwal Dokter</span>
				</div>
				<div class="info-row">
					<i class="fas fa-map-marker-alt"></i>
					<span>Rumah Sakit dan Klinik Khusus</span>
				</div>
				<button class="btn btn-appointment mt-3">Buat Janji Temu</button>
			</div>
		</div>

		<div class="col-md-6">
			<div class="appointment-card">
				<div class="card-icon icon-orange">
					<i class="fas fa-flask"></i>
				</div>
				<div class="card-title">Paket Medical Check Up</div>
				<p class="card-desc">Layanan pemeriksaan kesehatan menyeluruh dengan berbagai jenis tes dan analisis.</p>
				<div class="info-row">
					<i class="fas fa-calendar"></i>
					<span>Setiap Hari (Booking Minimal 2 Hari)</span>
				</div>
				<div class="info-row">
					<i class="fas fa-map-marker-alt"></i>
					<span>Klinik & Rumah Sakit Mitra</span>
				</div>
				<button class="btn btn-appointment mt-3">Buat Janji Temu</button>
			</div>
		</div>

		<div class="col-md-6">
			<div class="appointment-card">
				<div class="card-icon icon-blue">
					<i class="fas fa-heartbeat"></i>
				</div>
				<div class="card-title">Kontrol Pasca Rawat</div>
				<p class="card-desc">Layanan follow-up untuk pasien yang sudah melakukan tindakan medis sebelumnya.</p>
				<div class="info-row">
					<i class="fas fa-calendar"></i>
					<span>Fleksibel Sesuai Kebutuhan</span>
				</div>
				<div class="info-row">
					<i class="fas fa-bell"></i>
					<span>Reminder Otomatis Jadwal Kontrol</span>
				</div>
				<button class="btn btn-appointment mt-3">Buat Janji Temu</button>
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
			</div>
		</div>
	</div>
</div>
</body>
</html>
