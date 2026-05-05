<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin | VitaGuard')</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
    integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="{{ asset('AdminLTE-master/dist/css/adminlte.css') }}" />
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">
    <nav class="app-header navbar navbar-expand bg-body">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
              <i class="bi bi-list"></i>
            </a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a href="{{ route('admin') }}" class="nav-link">Dashboard</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <span class="nav-link">VitaGuard Admin</span>
          </li>
        </ul>
      </div>
    </nav>

    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
      <div class="sidebar-brand">
        <a href="{{ route('admin') }}" class="brand-link">
          <i class="bi bi-heart-pulse-fill brand-image text-primary opacity-75"></i>
          <span class="brand-text fw-light">VitaGuard</span>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <nav class="mt-2">
          <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            role="menu"
            data-accordion="false"
          >
            <li class="nav-item">
              <a href="{{ route('admin') }}" class="nav-link @yield('menu-dashboard')">
                <i class="nav-icon bi bi-speedometer"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.fitur', ['fitur' => 'members']) }}" class="nav-link @yield('menu-members')">
                <i class="nav-icon bi bi-people"></i>
                <p>Pasien</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.fitur', ['fitur' => 'doctors']) }}" class="nav-link @yield('menu-doctors')">
                <i class="nav-icon bi bi-person-badge"></i>
                <p>Dokter</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.fitur', ['fitur' => 'transactions']) }}" class="nav-link @yield('menu-transactions')">
                <i class="nav-icon bi bi-receipt"></i>
                <p>Transaksi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.fitur', ['fitur' => 'categories']) }}" class="nav-link @yield('menu-categories')">
                <i class="nav-icon bi bi-tags"></i>
                <p>Kategori</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <main class="app-main">
      <div class="app-content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">@yield('page-title', 'Dashboard')</h3>
            </div>
            <div class="col-sm-6">
              @hasSection('breadcrumb')
                @yield('breadcrumb')
              @else
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page">@yield('page-title', 'Dashboard')</li>
                </ol>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="app-content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
    </main>

    @stack('modals')

    <footer class="app-footer">
      <div class="float-end d-none d-sm-inline">VitaGuard Admin</div>
      <strong>
        &copy; 2026
        <span class="text-decoration-none">VitaGuard</span>.
      </strong>
      All rights reserved.
    </footer>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
    integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"
  ></script>
  <script src="{{ asset('AdminLTE-master/dist/js/adminlte.js') }}"></script>
  <script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
      scrollbarTheme: 'os-theme-light',
      scrollbarAutoHide: 'leave',
      scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function () {
      const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
      if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
          scrollbars: {
            theme: Default.scrollbarTheme,
            autoHide: Default.scrollbarAutoHide,
            clickScroll: Default.scrollbarClickScroll,
          },
        });
      }
    });
  </script>
  @stack('scripts')
</body>
</html>
