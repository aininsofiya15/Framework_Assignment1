@extends('layouts.master')

@section('title', 'Contact')

@section('content')

    @php $profiles = config('team'); @endphp

    {{-- ===== Page header with breadcrumb ===== --}}
    <header class="page-header">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
            <h1 class="h2 mb-0"><i class="bi bi-envelope-paper-heart me-2"></i>Get in Touch</h1>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row g-4">

            {{-- ===== Contact form (client-side validation, no backend) ===== --}}
            <section class="col-lg-8 reveal">
                <div class="card p-4 p-md-5">
                    <h2 class="h4 mb-4">Send a message</h2>
                    <form id="contactForm" novalidate>
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="sendTo" class="form-label">Who would you like to contact?</label>
                                <select class="form-select" id="sendTo" required>
                                    <option value="" selected disabled>Choose a person...</option>
                                    @foreach ($profiles as $member)
                                        <option value="{{ $member['slug'] }}">{{ $member['name'] }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please choose who you would like to contact.</div>
                            </div>
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
                                <textarea class="form-control" id="message" rows="5" required minlength="10" placeholder="Tell me what you have in mind..."></textarea>
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

            {{-- ===== Side card: all members' contact details and social icons (sample data) ===== --}}
            <aside class="col-lg-4 reveal">
                <div class="card contact-side card-hover p-4 h-100">
                    <h2 class="h4 mb-4">Contact Details</h2>
                    @foreach ($profiles as $member)
                        <div class="member-contact">
                            <div class="fw-semibold">{{ $member['name'] }}</div>
                            <div class="small opacity-75 mb-2">{{ $member['title'] }}</div>
                            <div class="contact-line small mb-1"><i class="bi bi-envelope me-2"></i><a href="mailto:{{ $member['email'] }}">{{ $member['email'] }}</a></div>
                            <div class="contact-line small mb-2"><i class="bi bi-telephone me-2"></i><a href="tel:{{ preg_replace('/[^+\d]/', '', $member['phone']) }}">{{ $member['phone'] }}</a></div>
                            <div class="d-flex gap-2">
                                <a href="{{ $member['social']['linkedin'] }}" class="social-link" data-bs-toggle="tooltip" data-bs-title="LinkedIn ({{ $member['nickname'] }})" aria-label="LinkedIn {{ $member['nickname'] }}"><i class="bi bi-linkedin"></i></a>
                                <a href="{{ $member['social']['github'] }}" class="social-link" data-bs-toggle="tooltip" data-bs-title="GitHub ({{ $member['nickname'] }})" aria-label="GitHub {{ $member['nickname'] }}"><i class="bi bi-github"></i></a>
                                <a href="{{ $member['social']['instagram'] }}" class="social-link" data-bs-toggle="tooltip" data-bs-title="Instagram ({{ $member['nickname'] }})" aria-label="Instagram {{ $member['nickname'] }}"><i class="bi bi-instagram"></i></a>
                                <a href="mailto:{{ $member['email'] }}" class="social-link" data-bs-toggle="tooltip" data-bs-title="Email ({{ $member['nickname'] }})" aria-label="Email {{ $member['nickname'] }}"><i class="bi bi-envelope-at"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </aside>

        </div>
    </div>

    {{-- ===== Success toast ===== --}}
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body"><i class="bi bi-check-circle-fill me-2"></i><span id="toastText">Thank you! Your message has been sent.</span></div>
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
        var sendTo = document.getElementById('sendTo');
        var recipient = sendTo.options[sendTo.selectedIndex].text;
        document.getElementById('toastText').textContent = 'Thank you! Your message has been sent to ' + recipient + '.';
        toast.show();
        form.reset();
        form.classList.remove('was-validated');
    });

    document.getElementById('resetBtn').addEventListener('click', () => form.classList.remove('was-validated'));
</script>
@endpush
