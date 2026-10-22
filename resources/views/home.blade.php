@extends('layouts.master')

@section('title', 'Home')

@section('content')

    @php
        $profiles = config('team');
        $totalProjects = collect($profiles)->sum('projects');
        $totalCerts = collect($profiles)->sum(fn ($m) => count($m['certifications']));
        $totalSkills = collect($profiles)->sum(fn ($m) => count($m['skills']));
    @endphp

    {{-- ===== Hero: site intro with call-to-action buttons ===== --}}
    <section class="hero">
        <span class="shape shape-1"></span>
        <span class="shape shape-2"></span>
        <span class="shape shape-3"></span>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <span class="badge rounded-pill hero-badge mb-3 px-3 py-2">
                        <i class="bi bi-stars me-1 text-warning"></i> Profile Showcase
                    </span>
                    <p class="mb-1 text-uppercase fw-light" style="letter-spacing:.2em">Welcome to</p>
                    <h1 class="hero-title mb-3">Discover Developer <span>Profiles</span></h1>
                    <h2 class="h5 fw-normal mb-3">Explore the backgrounds, skills and work of four developers</h2>
                    <p class="hero-lead mb-4">
                        Browse four individual profiles covering full stack, design, backend and mobile development,
                        each with its own skills, certifications, projects and ways to get in touch.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a href="#profiles" class="btn btn-accent btn-lg">
                            <i class="bi bi-people-fill me-2"></i>Browse Profiles
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-envelope-heart me-2"></i>Get in Touch
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-flex justify-content-center">
                    <div class="avatar-wrap">
                        <div class="avatar avatar-xl">DP</div>
                        <span class="skill-chip chip-1"><i class="bi bi-braces"></i>Laravel</span>
                        <span class="skill-chip chip-2"><i class="bi bi-palette"></i>UI Design</span>
                        <span class="skill-chip chip-3"><i class="bi bi-database"></i>MySQL</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- Wave divider --}}
        <svg class="hero-wave" viewBox="0 0 1440 70" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,40 C240,80 480,0 720,30 C960,60 1200,80 1440,30 L1440,70 L0,70 Z"></path>
        </svg>
    </section>

    {{-- ===== Site stat cards overlapping the hero (numbers count up) ===== --}}
    <section class="stat-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-lg-3">
                    <div class="card stat-card card-hover h-100 reveal">
                        <i class="bi bi-people-fill stat-icon"></i>
                        <div class="stat-number" data-count="{{ count($profiles) }}">{{ count($profiles) }}</div>
                        <div class="text-muted small">Profiles</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stat-card card-hover h-100 reveal">
                        <i class="bi bi-code-square stat-icon"></i>
                        <div class="stat-number" data-count="{{ $totalProjects }}">{{ $totalProjects }}</div>
                        <div class="text-muted small">Projects Showcased</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stat-card card-hover h-100 reveal">
                        <i class="bi bi-patch-check-fill stat-icon"></i>
                        <div class="stat-number" data-count="{{ $totalCerts }}">{{ $totalCerts }}</div>
                        <div class="text-muted small">Certifications Listed</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stat-card card-hover h-100 reveal">
                        <i class="bi bi-lightning-charge-fill stat-icon"></i>
                        <div class="stat-number" data-count="{{ $totalSkills }}">{{ $totalSkills }}</div>
                        <div class="text-muted small">Skills Covered</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== Featured Profiles: one card per person (data from the config file) ===== --}}
    <section id="profiles" class="container mt-5 pt-4">
        <div class="text-center mb-4 reveal">
            <h2 class="section-title">Featured Profiles</h2>
            <p class="text-muted mx-auto" style="max-width:34rem">Open a profile to see skills, certifications, experience and interests.</p>
        </div>
        <div class="row g-4">
            @foreach ($profiles as $member)
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-hover member-card h-100 text-center p-4 reveal">
                        <div class="avatar avatar-md mx-auto mb-3">{{ $member['initials'] }}</div>
                        <h3 class="h6 mb-1">{{ $member['name'] }}</h3>
                        <p class="small fw-medium mb-3" style="color:var(--c-primary)">{{ $member['title'] }}</p>
                        <div class="mb-3">
                            @foreach (array_slice($member['skills'], 0, 3) as $skill)
                                <span class="badge badge-skill">{{ $skill['name'] }}</span>
                            @endforeach
                        </div>
                        <a href="{{ route('about') . '#' . $member['slug'] }}" class="btn btn-primary mt-auto align-self-center">
                            View Profile <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ===== Featured projects (sample projects) ===== --}}
    <section class="container mt-5 pt-4">
        <div class="text-center mb-4 reveal">
            <h2 class="section-title">Featured Projects</h2>
            <p class="text-muted mx-auto" style="max-width:34rem">A selection of web and mobile projects from the profiles featured here.</p>
        </div>
        <div class="row g-4">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-hover project-card h-100 reveal">
                    <div class="project-cover-wrap"><div class="project-cover"><i class="bi bi-calendar-event"></i></div></div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="h6">Event Finder</h3>
                        <p class="small text-muted">A web app to browse and register for local events.</p>
                        <div class="mt-auto"><span class="badge badge-skill">Laravel</span> <span class="badge badge-skill">MySQL</span></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-hover project-card h-100 reveal">
                    <div class="project-cover-wrap"><div class="project-cover cover-2"><i class="bi bi-journal-check"></i></div></div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="h6">Study Planner</h3>
                        <p class="small text-muted">A simple planner that tracks tasks and deadlines.</p>
                        <div class="mt-auto"><span class="badge badge-skill">JavaScript</span> <span class="badge badge-skill">CSS</span></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-hover project-card h-100 reveal">
                    <div class="project-cover-wrap"><div class="project-cover cover-3"><i class="bi bi-cart3"></i></div></div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="h6">Mini Online Shop</h3>
                        <p class="small text-muted">A small storefront with a product list and cart.</p>
                        <div class="mt-auto"><span class="badge badge-skill">PHP</span> <span class="badge badge-skill">MySQL</span></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-hover project-card h-100 reveal">
                    <div class="project-cover-wrap"><div class="project-cover cover-4"><i class="bi bi-brush"></i></div></div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="h6">Portfolio Redesign</h3>
                        <p class="small text-muted">A responsive redesign focused on clean, friendly UI.</p>
                        <div class="mt-auto"><span class="badge badge-skill">UI Design</span> <span class="badge badge-skill">Bootstrap</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== Highlight cards linking to other pages ===== --}}
    <section class="container mt-5 pt-4">
        <div class="text-center mb-4 reveal">
            <h2 class="section-title">Explore the Site</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card card-hover h-100 p-4 reveal">
                    <div class="icon-circle mb-3"><i class="bi bi-person-badge"></i></div>
                    <h3 class="h5">Profiles</h3>
                    <p class="text-muted">Read about each developer: their background, technical skills, certifications and interests.</p>
                    <div class="mb-3">
                        <span class="badge badge-skill">PHP &amp; Laravel</span>
                        <span class="badge badge-skill">JavaScript</span>
                        <span class="badge badge-skill">MySQL</span>
                    </div>
                    <a href="{{ route('about') }}" class="btn btn-primary mt-auto align-self-start">
                        Read profiles <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card card-hover h-100 p-4 reveal">
                    <div class="icon-circle mb-3"><i class="bi bi-chat-dots"></i></div>
                    <h3 class="h5">Contact</h3>
                    <p class="text-muted">Have a project or question in mind? Send a message directly to the developer you would like to reach.</p>
                    <div class="mb-3">
                        <span class="badge badge-skill">Web Apps</span>
                        <span class="badge badge-skill">Mobile Apps</span>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-auto align-self-start">
                        Get in touch <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== Call-to-action banner ===== --}}
    <section class="container mt-5 pt-4">
        <div class="cta-banner text-center reveal">
            <h2 class="h3 mb-2">Let's build something great together</h2>
            <p class="mb-4 opacity-75">Interested in working together? Reach out to any of the developers and they will get back to you soon.</p>
            <a href="{{ route('contact') }}" class="btn btn-accent btn-lg"><i class="bi bi-send me-2"></i>Get in Touch</a>
        </div>
    </section>

@endsection
