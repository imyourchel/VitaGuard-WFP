<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $doctor->user->name }} - VitaGuard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        :root { --primary: #1f58a0; --secondary: #00a651; --tertiary: #f39200; }
        html, body { height: 100%; margin: 0; padding: 0; }
        html { display: flex; flex-direction: column; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fa; display: flex; flex-direction: column; flex: 1; }
        .navbar { background: white !important; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .navbar-brand { font-weight: 700; font-size: 1.3rem; color: var(--primary) !important; }
        .btn-primary { background: var(--primary); border: none; padding: 12px 30px; font-weight: 600; border-radius: 8px; transition: all 0.3s; }
        .btn-primary:hover { background: #164778; transform: translateY(-2px); box-shadow: 0 6px 16px rgba(31, 88, 160, 0.3); color: white; }
        .btn-secondary { background: #6c757d; border: none; padding: 12px 30px; font-weight: 600; border-radius: 8px; transition: all 0.3s; }
        .btn-secondary:hover { background: #5a6268; transform: translateY(-2px); box-shadow: 0 6px 16px rgba(108, 117, 125, 0.3); color: white; }
        .page-header { background: linear-gradient(135deg, var(--primary) 0%, #0d96d1 100%); color: white; display: flex; align-items: center; padding: 2rem 0; }
        .page-header .container-lg { display: flex; align-items: center; justify-content: space-between; }
        .page-title { color: white; font-weight: 700; margin: 0; }
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .back-button:hover {
            color: #ffe;
            transform: translateX(-5px);
        }
        .back-button i {
            transition: transform 0.3s ease;
        }
        .back-button:hover i {
            transform: translateX(-5px);
        }
        .doctor-profile-card {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }
        .doctor-header {
            display: flex;
            gap: 30px;
            margin-bottom: 3rem;
            padding-bottom: 3rem;
            border-bottom: 2px solid #eee;
        }
        .doctor-avatar {
            flex-shrink: 0;
        }
        .doctor-avatar-placeholder {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, var(--primary) 0%, #0d96d1 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }
        .doctor-info h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
        .doctor-info .specialty {
            font-size: 1.1rem;
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .doctor-info .rating {
            font-size: 1.2rem;
            color: var(--tertiary);
            margin-bottom: 1rem;
        }
        .info-section {
            margin-bottom: 2rem;
        }
        .info-section h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--secondary);
        }
        .info-row {
            display: flex;
            gap: 2rem;
            margin-bottom: 1rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
        }
        .info-label {
            font-weight: 600;
            color: var(--primary);
            min-width: 150px;
        }
        .info-value {
            color: #333;
            flex: 1;
        }
        .badge-custom {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }
        .badge-experience {
            background: #fff3cd;
            color: #856404;
        }
        .badge-specialty {
            background: #d1ecf1;
            color: #0c5460;
        }
        .doctor-photo {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 12px;
        }
        .bio-text {
            line-height: 1.6;
            color: #555;
        }
        .status-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
        }
        .status-active {
            background: #d4edda;
            color: #155724;
        }
        .status-inactive {
            background: #f8d7da;
            color: #721c24;
        }
        main { flex: 1; }
        footer { flex-shrink: 0; margin-top: auto; background: #2c3e50; color: white; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-lg">
            <a class="navbar-brand" href="{{ url('/admin') }}">
                <i class="fas fa-heartbeat" style="color: var(--secondary)"></i> VitaGuard
            </a>
            <span class="navbar-text ms-auto fw-bold">Admin - Detail Dokter</span>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container-lg" style="width: 100%;">
            <a href="{{ route('admin.fitur', ['fitur' => 'doctors']) }}" class="back-button">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Daftar Dokter
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <div class="container-lg py-4">
            <div class="doctor-profile-card">
                <!-- Doctor Header -->
                <div class="doctor-header">
                    <div class="doctor-avatar">
                        @if($doctor->photo)
                            <img src="{{ $doctor->photo }}" alt="{{ $doctor->user->name }}" class="doctor-photo">
                        @else
                            <div class="doctor-avatar-placeholder">
                                <i class="fas fa-user-md"></i>
                            </div>
                        @endif
                    </div>
                    <div class="doctor-info">
                        <h1>{{ $doctor->user->name }}</h1>
                        <div class="specialty">
                            <i class="fas fa-stethoscope me-2"></i>{{ $doctor->specialty }}
                        </div>
                        <div class="rating">
                            <i class="fas fa-star" style="color: var(--tertiary);"></i>
                            <strong>{{ $doctor->rating }}/5</strong> Rating
                        </div>
                        <div style="margin-top: 1rem;">
                            @if($doctor->status == 'active')
                                <span class="status-badge status-active">
                                    <i class="fas fa-check-circle me-1"></i>Aktif
                                </span>
                            @else
                                <span class="status-badge status-inactive">
                                    <i class="fas fa-times-circle me-1"></i>Tidak Aktif
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Bio Section -->
                @if($doctor->bio)
                    <div class="info-section">
                        <h3><i class="fas fa-file-alt me-2"></i>Biodata</h3>
                        <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px;">
                            <p class="bio-text">{{ $doctor->bio }}</p>
                        </div>
                    </div>
                @endif

                <!-- Personal Information -->
                <div class="info-section">
                    <h3><i class="fas fa-user me-2"></i>Informasi Pribadi</h3>
                    @if($doctor->gender)
                        <div class="info-row">
                            <div class="info-label">Jenis Kelamin:</div>
                            <div class="info-value">{{ $doctor->gender }}</div>
                        </div>
                    @endif
                    @if($doctor->date_of_birth)
                        <div class="info-row">
                            <div class="info-label">Tanggal Lahir:</div>
                            <div class="info-value">{{ \Carbon\Carbon::parse($doctor->date_of_birth)->format('d-m-Y') }}</div>
                        </div>
                    @endif
                </div>

                <!-- Contact Information -->
                <div class="info-section">
                    <h3><i class="fas fa-phone me-2"></i>Kontak</h3>
                    @if($doctor->email)
                        <div class="info-row">
                            <div class="info-label">Email:</div>
                            <div class="info-value"><a href="mailto:{{ $doctor->email }}">{{ $doctor->email }}</a></div>
                        </div>
                    @endif
                    @if($doctor->phone)
                        <div class="info-row">
                            <div class="info-label">Telepon:</div>
                            <div class="info-value"><a href="tel:{{ $doctor->phone }}">{{ $doctor->phone }}</a></div>
                        </div>
                    @endif
                    @if($doctor->address)
                        <div class="info-row">
                            <div class="info-label">Alamat:</div>
                            <div class="info-value">{{ $doctor->address }}</div>
                        </div>
                    @endif
                </div>

                <!-- License Information -->
                <div class="info-section">
                    <h3><i class="fas fa-id-card me-2"></i>Informasi Lisensi</h3>
                    <div class="info-row">
                        <div class="info-label">Nomor Lisensi:</div>
                        <div class="info-value"><strong>{{ $doctor->license_number }}</strong></div>
                    </div>
                </div>

                <!-- Experience -->
                <div class="info-section">
                    <h3><i class="fas fa-briefcase me-2"></i>Pengalaman</h3>
                    <div class="info-row">
                        <div class="info-label">Tahun Pengalaman:</div>
                        <div class="info-value">
                            <span class="badge-custom badge-experience">
                                <i class="fas fa-calendar-alt me-1"></i>{{ $doctor->experience_years }} Tahun
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Specialization -->
                <div class="info-section">
                    <h3><i class="fas fa-info-circle me-2"></i>Spesialisasi</h3>
                    <div class="info-row">
                        <div class="info-label">Bidang Keahlian:</div>
                        <div class="info-value">
                            <span class="badge-custom badge-specialty">
                                <i class="fas fa-heartbeat me-1"></i>{{ $doctor->specialty }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 2px solid #eee;">
                    <a href="{{ route('admin.fitur', ['fitur' => 'doctors']) }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Dokter
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-3 mt-5">
        <div class="container-lg text-center">
            <p class="mb-0">&copy; 2026 VitaGuard Admin Panel</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
