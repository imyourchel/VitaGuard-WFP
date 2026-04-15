<!doctype html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard | VitaGuard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
	<style>
		:root { --primary: #1f58a0; --secondary: #00a651; --tertiary: #f39200; }
		html, body { height: 100%; margin: 0; padding: 0; }
		html { display: flex; flex-direction: column; }
		body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fa; display: flex; flex-direction: column; flex: 1; }
		.navbar { background: white !important; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
		.navbar-brand { font-weight: 700; font-size: 1.3rem; color: var(--primary) !important; }
		.page-title { color: var(--primary); font-weight: 700; margin-bottom: 30px; }
		.admin-card { background: linear-gradient(135deg, #17a2b8 0%, #20c997 100%); }
		.menu-card { background: white; border: none; border-radius: 12px; padding: 30px; text-align: center; box-shadow: 0 4px 12px rgba(0,0,0,0.08); transition: all 0.3s ease; text-decoration: none; color: inherit; display: block; height: 100%; }
		.menu-card:hover { transform: translateY(-8px); box-shadow: 0 12px 24px rgba(31, 88, 160, 0.15); text-decoration: none; color: inherit; }
		.menu-icon { font-size: 3rem; margin-bottom: 15px; color: var(--primary); }
		.menu-title { font-size: 1.3rem; font-weight: 600; margin-bottom: 10px; color: var(--primary); }
		.menu-desc { font-size: 0.9rem; color: #666; }
		.menu-card.members .menu-icon { color: var(--primary); }
		.menu-card.doctors .menu-icon { color: #e74c3c; }
		.menu-card.orders .menu-icon { color: var(--secondary); }
		.menu-card.categories .menu-icon { color: var(--tertiary); }
		main { flex: 1; }
		footer { flex-shrink: 0; margin-top: auto; background: #2c3e50; color: white; }
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container-lg">
		<a class="navbar-brand" href="{{ url('/admin') }}">
			<i class="fas fa-heartbeat" style="color: var(--secondary)"></i> VitaGuard
		</a>
		<span class="navbar-text ms-auto fw-bold">Admin Dashboard</span>
	</div>
</nav>

<main>
<div class="container-lg py-5">
	<h1 class="page-title"><i class="fas fa-tachometer-alt"></i> Admin Dashboard</h1>

	<div class="row g-4">
		<!-- Members -->
		<div class="col-md-6 col-lg-3">
			<a href="{{ route('admin.fitur', ['fitur' => 'members']) }}" class="menu-card members">
				<div class="menu-icon"><i class="fas fa-users"></i></div>
				<div class="menu-title">Daftar Pasien</div>
				<div class="menu-desc">Kelola data pasien dan member</div>
			</a>
		</div>

		<!-- Doctors -->
		<div class="col-md-6 col-lg-3">
			<a href="{{ route('admin.fitur', ['fitur' => 'doctors']) }}" class="menu-card doctors">
				<div class="menu-icon"><i class="fas fa-user-md"></i></div>
				<div class="menu-title">Dokter</div>
				<div class="menu-desc">Kelola data dokter</div>
			</a>
		</div>

		<!-- Orders -->
		<div class="col-md-6 col-lg-3">
			<a href="{{ route('admin.fitur', ['fitur' => 'transactions']) }}" class="menu-card orders">
				<div class="menu-icon"><i class="fas fa-receipt"></i></div>
				<div class="menu-title">Transaksi</div>
				<div class="menu-desc">Kelola transaksi dan konsultasi</div>
			</a>
		</div>

		<!-- Categories -->
		<div class="col-md-6 col-lg-3">
			<a href="{{ route('admin.fitur', ['fitur' => 'categories']) }}" class="menu-card categories">
				<div class="menu-icon"><i class="fas fa-list"></i></div>
				<div class="menu-title">Kategori</div>
				<div class="menu-desc">Kelola kategori layanan</div>
			</a>
		</div>
	</div>
</div>
</main>

<footer class="bg-dark text-white py-3 mt-5">
	<div class="container-lg text-center">
		<p class="mb-0">&copy; 2026 VitaGuard Admin Panel</p>
	</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
