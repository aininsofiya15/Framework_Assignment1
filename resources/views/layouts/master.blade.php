<!DOCTYPE html>
<html lang="en">
<head>
    {{-- ===== Head: meta, title, CDN stylesheets, custom CSS ===== --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | DevProfiles</title>

    {{-- Bootstrap 5.3 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    {{-- Google Font: Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- Custom CSS --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script>document.documentElement.classList.add("js");</script>
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- ===== Navbar (collapses on mobile, highlights active page) ===== --}}
    <nav class="navbar navbar-expand-lg navbar-profile sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <span class="brand-mark">DP</span> DevProfiles
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainNav" aria-controls="mainNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                           href="{{ route('home') }}"><i class="bi bi-house-door me-1"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                           href="{{ route('about') }}"><i class="bi bi-person me-1"></i>About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                           href="{{ route('contact') }}"><i class="bi bi-envelope me-1"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ===== Page content ===== --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- ===== Footer ===== --}}
    <footer class="site-footer py-4 mt-5">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span>&copy; {{ date('Y') }} DevProfiles. All rights reserved.</span>
            <div class="d-flex gap-3 fs-5">
                <a href="{{ route('home') }}" aria-label="Home"><i class="bi bi-house-door"></i></a>
                <a href="{{ route('about') }}" aria-label="About Me"><i class="bi bi-person"></i></a>
                <a href="{{ route('contact') }}" aria-label="Contact"><i class="bi bi-envelope"></i></a>
            </div>
        </div>
    </footer>

    {{-- ===== Back to top ===== --}}
    <button type="button" id="backToTop" class="btn btn-primary" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>

    {{-- ===== Scripts ===== --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
