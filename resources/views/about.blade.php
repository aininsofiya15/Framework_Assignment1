@extends('layouts.master')

@section('title', 'About Me')

@section('content')

    @php $profiles = config('team'); @endphp

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

        {{-- ===== Nav pills: one tab per member (opened by URL hash, e.g. /about#huda) ===== --}}
        <ul class="nav nav-pills member-pills mb-4 reveal" id="memberTabs" role="tablist">
            @foreach ($profiles as $member)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-{{ $member['slug'] }}"
                            data-bs-toggle="pill" data-bs-target="#pane-{{ $member['slug'] }}" data-member="{{ $member['slug'] }}"
                            type="button" role="tab" aria-controls="pane-{{ $member['slug'] }}"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        <span class="pill-initials">{{ $member['initials'] }}</span><span class="pill-text"><strong>{{ $member['nickname'] }}</strong><small>{{ $member['title'] }}</small></span>
                    </button>
                </li>
            @endforeach
        </ul>

        <div class="tab-content">
            @foreach ($profiles as $member)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="pane-{{ $member['slug'] }}"
                     role="tabpanel" aria-labelledby="tab-{{ $member['slug'] }}" tabindex="0">

                    {{-- ===== Background card with photo ===== --}}
                    <section class="mb-5">
                        <div class="card card-hover p-4">
                            <div class="row align-items-center g-4">
                                <div class="col-md-4 d-flex justify-content-center">
                                    {{-- Initials avatar: replace with <img src="{{ asset('images/' . $member['slug'] . '.jpg') }}" alt="{{ $member['name'] }}"> --}}
                                    <div class="avatar avatar-lg">{{ $member['initials'] }}</div>
                                </div>
                                <div class="col-md-8">
                                    <h2 class="h4 mb-1">{{ $member['name'] }}</h2>
                                    <p class="fw-medium mb-2" style="color:var(--c-primary)">{{ $member['title'] }}</p>
                                    <p class="text-muted mb-2">
                                        <i class="bi bi-code-slash me-1"></i>{{ $member['focus'] }}
                                    </p>
                                    <p class="text-muted mb-3">
                                        <i class="bi bi-geo-alt me-1"></i>{{ $member['location'] }}
                                    </p>
                                    <p>{{ $member['bio'] }}</p>
                                    <span class="badge text-bg-primary">{{ $member['skills'][0]['name'] }}</span>
                                    <span class="badge text-bg-warning">{{ $member['projects'] }} Projects Delivered</span>
                                    <span class="badge text-bg-success">{{ count($member['certifications']) }} Certifications</span>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- ===== Skills (progress bars) and Certifications (list group) ===== --}}
                    <section class="mb-5">
                        <div class="row g-4">
                            <div class="col-lg-6 d-flex flex-column">
                                <h2 class="section-title h4 align-self-start">Skills</h2>
                                <div class="card p-4 flex-grow-1">
                                    @foreach ($member['skills'] as $skill)
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between"><span>{{ $skill['name'] }}</span><span class="text-muted">{{ $skill['level'] }}%</span></div>
                                            <div class="progress" role="progressbar" aria-label="{{ $skill['name'] }}" aria-valuenow="{{ $skill['level'] }}" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: {{ $skill['level'] }}%"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="mt-auto">
                                        @foreach ($member['skills'] as $skill)
                                            <span class="badge badge-skill">{{ $skill['name'] }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 d-flex flex-column">
                                <h2 class="section-title h4 align-self-start">Certifications</h2>
                                <div class="card flex-grow-1">
                                    <ul class="list-group list-group-flush rounded-4 h-100">
                                        @foreach ($member['certifications'] as $cert)
                                            <li class="list-group-item d-flex align-items-center gap-3 flex-fill">
                                                <i class="bi {{ $cert['icon'] }}"></i>
                                                <div><strong>{{ $cert['name'] }}</strong><div class="small text-muted">{{ $cert['note'] }}</div></div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- ===== Hobbies (icon cards) ===== --}}
                    <section class="mb-5">
                        <h2 class="section-title h4">Hobbies</h2>
                        <div class="row g-4">
                            @foreach ($member['hobbies'] as $hobby)
                                <div class="col-6 col-md-3">
                                    <div class="card card-hover text-center p-4 h-100">
                                        <div class="icon-circle mx-auto mb-3"><i class="bi {{ $hobby['icon'] }}"></i></div>
                                        <h3 class="h6 mb-1">{{ $hobby['name'] }}</h3>
                                        <p class="small text-muted mb-0">{{ $hobby['text'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    {{-- ===== Accordion: education & quick facts (IDs unique per member) ===== --}}
                    <section>
                        <h2 class="section-title h4">Experience &amp; Quick Facts</h2>
                        <div class="accordion" id="accordion-{{ $member['slug'] }}">
                            @foreach ($member['education'] as $fact)
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-{{ $member['slug'] }}-{{ $loop->index }}"
                                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                                aria-controls="collapse-{{ $member['slug'] }}-{{ $loop->index }}">
                                            <i class="bi {{ $fact['icon'] }} me-2"></i>{{ $fact['q'] }}
                                        </button>
                                    </h3>
                                    <div id="collapse-{{ $member['slug'] }}-{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                         data-bs-parent="#accordion-{{ $member['slug'] }}">
                                        <div class="accordion-body">{{ $fact['a'] }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>

                </div>
            @endforeach
        </div>

    </div>

@endsection

@push('scripts')
<script>
    // Open the member tab named in the URL hash (e.g. /about#huda) and keep the hash in sync
    (function () {
        var pills = document.getElementById('memberTabs');
        function openFromHash() {
            var slug = window.location.hash.slice(1);
            var btn = slug && pills.querySelector('[data-member="' + slug + '"]');
            if (btn) bootstrap.Tab.getOrCreateInstance(btn).show();
        }
        pills.addEventListener('shown.bs.tab', function (e) {
            history.replaceState(null, '', '#' + e.target.dataset.member);
        });
        window.addEventListener('hashchange', openFromHash);
        openFromHash();
    })();
</script>
@endpush
