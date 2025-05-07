<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top mx-3 mx-md-4 rounded mt-2 py-3">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 text-primary" href="{{ url('/#home') }}">ScholarJob.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">☰</button>
        <div class="collapse navbar-collapse justify-content-md-end justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item me-md-4">
                    <a class="nav-link fw-semibold text-dark" href=" {{ url('/#home') }}">Beranda</a>
                </li>
                <li class="nav-item me-md-4">
                    <a class="nav-link fw-semibold text-dark" href="{{ url('/#beasiswa') }}">Beasiswa</a>
                </li>
                <li class="nav-item me-md-4">
                    <a class="nav-link fw-semibold text-dark" href="{{ url('/#lowongan') }}">Lowongan Kerja</a>
                </li>
                <li class="nav-item align-self-center me-md-4">
                    <a class="btn btn-primary fw-semibold px-4 py-2" href="{{ url('/#kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
