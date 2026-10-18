@extends('layouts.master')

@section('title', 'About Me')

@section('content')

    {{-- ===== Page header with breadcrumb ===== --}}
    <header class="page-header">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Me</li>
                </ol>
            </nav>
            <h1 class="h2 mb-0"><i class="bi bi-person-circle me-2"></i>About Me</h1>
        </div>
    </header>

    <div class="container mt-5">

        {{-- ===== Background card with photo ===== --}}
        <section class="mb-5 reveal">
            <div class="card card-hover p-4">
                <div class="row align-items-center g-4">
                    <div class="col-md-4 d-flex justify-content-center">
                        {{-- Initials avatar placeholder: replace with <img src="{{ asset('images/profile.jpg') }}" alt="Alex Tan"> --}}
                        <div class="avatar avatar-lg">AT</div>
                    </div>
                    <div class="col-md-8">
                        <h2 class="h4">Alex Tan</h2>
                        <p class="text-muted mb-2">
                            <i class="bi bi-mortarboard me-1"></i>Bachelor of Computer Science
                        </p>
                        <p class="text-muted mb-3">
                            <i class="bi bi-building me-1"></i>Sample University
                        </p>
                        <p>
                            I am a passionate student who enjoys building clean, user friendly web and mobile
                            applications. With two years of coding experience, I like turning ideas into working
                            projects and learning new tools along the way.
                        </p>
                        <span class="badge text-bg-primary">Computer Science</span>
                        <span class="badge text-bg-warning">2 Years Coding</span>
                        <span class="badge text-bg-success">CGPA 3.50</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===== Skills (progress bars) and Certifications (list group) ===== --}}
        <section class="mb-5 reveal">
            <div class="row g-4">
                <div class="col-lg-6 d-flex flex-column">
                    <h2 class="section-title h4 align-self-start">Skills</h2>
                    <div class="card p-4 flex-grow-1">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between"><span>HTML &amp; CSS</span><span class="text-muted">90%</span></div>
                            <div class="progress" role="progressbar" aria-label="HTML and CSS" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between"><span>JavaScript</span><span class="text-muted">75%</span></div>
                            <div class="progress" role="progressbar" aria-label="JavaScript" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between"><span>PHP &amp; Laravel</span><span class="text-muted">80%</span></div>
                            <div class="progress" role="progressbar" aria-label="PHP and Laravel" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between"><span>MySQL</span><span class="text-muted">70%</span></div>
                            <div class="progress" role="progressbar" aria-label="MySQL" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between"><span>UI Design</span><span class="text-muted">65%</span></div>
                            <div class="progress" role="progressbar" aria-label="UI Design" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 65%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between"><span>Teamwork</span><span class="text-muted">85%</span></div>
                            <div class="progress" role="progressbar" aria-label="Teamwork" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-skill">HTML &amp; CSS</span>
                            <span class="badge badge-skill">JavaScript</span>
                            <span class="badge badge-skill">PHP &amp; Laravel</span>
                            <span class="badge badge-skill">MySQL</span>
                            <span class="badge badge-skill">UI Design</span>
                            <span class="badge badge-skill">Teamwork</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex flex-column">
                    <h2 class="section-title h4 align-self-start">Certifications</h2>
                    <div class="card flex-grow-1">
                        <ul class="list-group list-group-flush rounded-4 h-100">
                            <li class="list-group-item d-flex align-items-center gap-3 flex-fill">
                                <i class="bi bi-globe2"></i>
                                <div><strong>Introduction to Web Development</strong><div class="small text-muted">Certificate of completion</div></div>
                            </li>
                            <li class="list-group-item d-flex align-items-center gap-3 flex-fill">
                                <i class="bi bi-cloud-check-fill"></i>
                                <div><strong>Cloud Computing Fundamentals</strong><div class="small text-muted">Certificate of completion</div></div>
                            </li>
                            <li class="list-group-item d-flex align-items-center gap-3 flex-fill">
                                <i class="bi bi-database-fill"></i>
                                <div><strong>Database Design Basics</strong><div class="small text-muted">Certificate of completion</div></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===== Hobbies (icon cards) ===== --}}
        <section class="mb-5 reveal">
            <h2 class="section-title h4">Hobbies</h2>
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="card card-hover text-center p-4 h-100">
                        <div class="icon-circle mx-auto mb-3"><i class="bi bi-book"></i></div>
                        <h3 class="h6 mb-1">Reading</h3>
                        <p class="small text-muted mb-0">Exploring new ideas and stories</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card card-hover text-center p-4 h-100">
                        <div class="icon-circle mx-auto mb-3"><i class="bi bi-camera"></i></div>
                        <h3 class="h6 mb-1">Photography</h3>
                        <p class="small text-muted mb-0">Capturing everyday moments</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card card-hover text-center p-4 h-100">
                        <div class="icon-circle mx-auto mb-3"><i class="bi bi-compass"></i></div>
                        <h3 class="h6 mb-1">Hiking</h3>
                        <p class="small text-muted mb-0">Enjoying nature and fresh air</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card card-hover text-center p-4 h-100">
                        <div class="icon-circle mx-auto mb-3"><i class="bi bi-controller"></i></div>
                        <h3 class="h6 mb-1">Gaming</h3>
                        <p class="small text-muted mb-0">Relaxing and playing with friends</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===== Accordion: education & FAQ details ===== --}}
        <section class="reveal">
            <h2 class="section-title h4">Education &amp; Quick Facts</h2>
            <div class="accordion" id="aboutAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEdu" aria-expanded="true" aria-controls="collapseEdu">
                            <i class="bi bi-mortarboard me-2"></i>Where do I study?
                        </button>
                    </h3>
                    <div id="collapseEdu" class="accordion-collapse collapse show" data-bs-parent="#aboutAccordion">
                        <div class="accordion-body">
                            Bachelor of Computer Science at Sample University.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAcad" aria-expanded="false" aria-controls="collapseAcad">
                            <i class="bi bi-trophy me-2"></i>Academic achievements
                        </button>
                    </h3>
                    <div id="collapseAcad" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                        <div class="accordion-body">
                            Current CGPA of 3.50, four completed projects and three certifications.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFocus" aria-expanded="false" aria-controls="collapseFocus">
                            <i class="bi bi-bullseye me-2"></i>What am I looking for?
                        </button>
                    </h3>
                    <div id="collapseFocus" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                        <div class="accordion-body">
                            Opportunities to grow as a software developer by building clean, user friendly web and
                            mobile applications with PHP, Laravel and MySQL.
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
