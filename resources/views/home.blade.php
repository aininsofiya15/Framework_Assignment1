@extends('layouts.master')

@section('title', 'Home')

@section('content')

    {{-- ===== Hero: full-width intro with call-to-action buttons ===== --}}
    <section class="hero">
        <span class="shape shape-1"></span>
        <span class="shape shape-2"></span>
        <span class="shape shape-3"></span>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <span class="badge rounded-pill hero-badge mb-3 px-3 py-2">
                        <i class="bi bi-stars me-1 text-warning"></i> Open to Internships
                    </span>
                    <p class="mb-1 text-uppercase fw-light" style="letter-spacing:.2em">Hello, I'm</p>
                    <h1 class="hero-title mb-3">Alex <span>Tan</span></h1>
                    <h2 class="h5 fw-normal mb-3">Computer Science Student and Aspiring Software Developer</h2>
                    <p class="hero-lead mb-4">
                        A passionate student who enjoys building clean, user friendly web and mobile applications.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a href="{{ route('about') }}" class="btn btn-accent btn-lg">
                            <i class="bi bi-person-lines-fill me-2"></i>About Me
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-envelope-heart me-2"></i>Contact Me
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-flex justify-content-center">
                    {{-- Initials avatar placeholder: replace with <img src="{{ asset('images/profile.jpg') }}" alt="Alex Tan"> --}}
                    <div class="avatar-wrap">
                        <div class="avatar avatar-xl">AT</div>
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

    {{-- ===== Stat cards overlapping the hero (numbers count up) ===== --}}
    <section class="stat-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-lg-3">
                    <div class="card stat-card card-hover h-100 reveal">
                        <i class="bi bi-mortarboard-fill stat-icon"></i>
                        <div class="stat-number" data-count="3.5" data-decimals="2">3.50</div>
                        <div class="text-muted small">Current CGPA</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stat-card card-hover h-100 reveal">
                        <i class="bi bi-clock-history stat-icon"></i>
                        <div class="stat-number" data-count="2">2</div>
                        <div class="text-muted small">Years Coding Experience</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stat-card card-hover h-100 reveal">
                        <i class="bi bi-patch-check-fill stat-icon"></i>
                        <div class="stat-number" data-count="3">3</div>
                        <div class="text-muted small">Certifications</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stat-card card-hover h-100 reveal">
                        <i class="bi bi-code-square stat-icon"></i>
                        <div class="stat-number" data-count="4">4</div>
                        <div class="text-muted small">Projects Built</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== Featured projects (sample projects) ===== --}}
    <section class="container mt-5 pt-4">
        <div class="text-center mb-4 reveal">
            <h2 class="section-title">Featured Projects</h2>
            <p class="text-muted mx-auto" style="max-width:34rem">A few things I have built while learning web and mobile development.</p>
        </div>
        <div class="row g-4">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-hover project-card h-100 reveal">
                    <div class="project-cover-wrap"><div class="project-cover"><i class="bi bi-calendar-event"></i></div></div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="h6">Campus Event Finder</h3>
                        <p class="small text-muted">A web app to browse and register for campus events.</p>
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
            <h2 class="section-title">Explore My Profile</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card card-hover h-100 p-4 reveal">
                    <div class="icon-circle mb-3"><i class="bi bi-person-badge"></i></div>
                    <h3 class="h5">About Me</h3>
                    <p class="text-muted">My background, technical skills, certifications, hobbies and education journey.</p>
                    <div class="mb-3">
                        <span class="badge badge-skill">PHP &amp; Laravel</span>
                        <span class="badge badge-skill">JavaScript</span>
                        <span class="badge badge-skill">MySQL</span>
                    </div>
                    <a href="{{ route('about') }}" class="btn btn-primary mt-auto align-self-start">
                        Read more <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="card card-hover h-100 p-4 reveal">
                    <div class="icon-circle mb-3"><i class="bi bi-chat-dots"></i></div>
                    <h3 class="h5">Contact</h3>
                    <p class="text-muted">Have an opportunity, question or collaboration in mind? Send me a message.</p>
                    <div class="mb-3">
                        <span class="badge badge-skill">Internships</span>
                        <span class="badge badge-skill">Collaboration</span>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-auto align-self-start">
                        Contact me <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== Call-to-action banner ===== --}}
    <section class="container mt-5 pt-4">
        <div class="cta-banner text-center reveal">
            <h2 class="h3 mb-2">Let's build something great together</h2>
            <p class="mb-4 opacity-75">Looking for an intern, teammate or collaborator? I'd love to hear from you.</p>
            <a href="{{ route('contact') }}" class="btn btn-accent btn-lg"><i class="bi bi-send me-2"></i>Send me a message</a>
        </div>
    </section>

@endsection
