@extends('layouts.master')

@section('title', 'Contact')

@section('content')

    {{-- ===== Page header with breadcrumb ===== --}}
    <header class="page-header">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
            <h1 class="h2 mb-0"><i class="bi bi-envelope-paper-heart me-2"></i>Contact Me</h1>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row g-4">

            {{-- ===== Contact form (client-side validation, no backend) ===== --}}
            <section class="col-lg-8 reveal">
                <div class="card p-4 p-md-5">
                    <h2 class="h4 mb-4">Send me a message</h2>
                    <form id="contactForm" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" required minlength="2" placeholder="Your full name">
                                <div class="invalid-feedback">Please enter your name (at least 2 characters).</div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required placeholder="you@example.com">
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" required placeholder="What is this about?">
                                <div class="invalid-feedback">Please enter a subject.</div>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required minlength="10" placeholder="Write your message here..."></textarea>
                                <div class="invalid-feedback">Please write a message (at least 10 characters).</div>
                            </div>
                            <div class="col-12 d-flex flex-column flex-sm-row gap-2">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-send me-2"></i>Send Message</button>
                                <button type="reset" class="btn btn-outline-primary" id="resetBtn">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            {{-- ===== Side card: contact details and social icons (placeholders) ===== --}}
            <aside class="col-lg-4 reveal">
                <div class="card contact-side card-hover p-4 h-100">
                    <h2 class="h4 mb-4">Contact Details</h2>
                    <div class="contact-item">
                        <span class="icon-circle"><i class="bi bi-envelope"></i></span>
                        <div><div class="small opacity-75">Email</div><a href="mailto:alex.tan@example.com">alex.tan@example.com</a></div>
                    </div>
                    <div class="contact-item">
                        <span class="icon-circle"><i class="bi bi-telephone"></i></span>
                        <div><div class="small opacity-75">Phone</div><a href="tel:+60123456789">+60 12-345 6789</a></div>
                    </div>
                    <div class="contact-item">
                        <span class="icon-circle"><i class="bi bi-geo-alt"></i></span>
                        <div><div class="small opacity-75">Location</div>Kuala Lumpur, Malaysia</div>
                    </div>
                    <div class="contact-item">
                        <span class="icon-circle"><i class="bi bi-mortarboard"></i></span>
                        <div><div class="small opacity-75">University</div>Sample University</div>
                    </div>
                    <div class="contact-social">
                        <hr class="border-light opacity-50">
                        <div class="small opacity-75 mb-2">Find me online</div>
                        <div class="d-flex gap-2">
                            <a href="#" class="social-link" data-bs-toggle="tooltip" data-bs-title="LinkedIn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-link" data-bs-toggle="tooltip" data-bs-title="GitHub" aria-label="GitHub"><i class="bi bi-github"></i></a>
                            <a href="#" class="social-link" data-bs-toggle="tooltip" data-bs-title="Instagram" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="social-link" data-bs-toggle="tooltip" data-bs-title="Email" aria-label="Email"><i class="bi bi-envelope-at"></i></a>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </div>

    {{-- ===== Success toast ===== --}}
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body"><i class="bi bi-check-circle-fill me-2"></i>Thank you! Your message has been sent.</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    // Enable tooltips
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => new bootstrap.Tooltip(el));

    // Client-side validation: block submit, show toast, reset form
    const form = document.getElementById('contactForm');
    const toast = bootstrap.Toast.getOrCreateInstance(document.getElementById('successToast'));

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (!form.checkValidity()) {
            event.stopPropagation();
            form.classList.add('was-validated');
            return;
        }
        toast.show();
        form.reset();
        form.classList.remove('was-validated');
    });

    document.getElementById('resetBtn').addEventListener('click', () => form.classList.remove('was-validated'));
</script>
@endpush
