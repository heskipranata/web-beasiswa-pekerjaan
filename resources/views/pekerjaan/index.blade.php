<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ScholarJob | Beasiswa - Pekerjaan</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <div class="container top-spacing-md mb-5">
        <h2 class="display-4 fw-bold text-center mb-3">Lowongan Kerja 💼 Terbaru</h2>
        <p class="text-center mb-5">
            Kesempatan kerja, magang, dan freelance untuk pelajar dan mahasiswa UNSRAT dan sekitarnya.
        </p>

        <div class="row justify-content-center mb-4">
            <div class="col-md-8 col-lg-6">
                <div class="input-group shadow-sm">
                    <input type="text" class="form-control"
                        placeholder="Cari pekerjaan berdasarkan judul, jenis, atau lokasi..." />
                    <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>

        <div class="row g-4 pt-4">
            @foreach ($pekerjaans as $job)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">{{ $job->judul }}</h5>
                            <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                                <span class="badge bg-primary rounded-4">{{ $job->jenis }}</span>
                                <span class="badge bg-info text-dark rounded-4">{{ $job->lokasi }}</span>
                                @if ($job->deadline)
                                    <span class="badge bg-warning text-dark rounded-4">
                                        Deadline: {{ \Carbon\Carbon::parse($job->deadline)->translatedFormat('d F Y') }}
                                    </span>
                                @endif
                            </div>
                            <p class="mb-1"><i class="bi bi-geo-alt"></i> {{ $job->perusahaan }}</p>
                            <p class="card-text flex-grow-1">{{ $job->deskripsi }}</p>
                            <a href="{{ $job->link_detail }}" class="btn btn-primary mt-auto" target="_blank">
                                Lihat Detail <i class="bi bi-box-arrow-in-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    @include('partials.footer')
</body>

</html>
