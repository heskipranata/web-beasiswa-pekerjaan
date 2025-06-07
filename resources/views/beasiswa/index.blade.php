<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ScholarJob | Beasiswa - Pekerjaan</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3Bpi8L/JZlVg1Z8hY3ZCk+ktKkKP35B" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js" defer></script>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+67FQp14z1H9QOgiPN9MuFQ92vldH" crossorigin="anonymous" defer>
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Section utama --}}
    <main>
        <div class="container py-5 top-spacing-md">
            <h1 class="display-4 fw-bold text-center  mb-3">
                Temukan Beasiswa yang <br /> Cocok Untukmu
            </h1>
            <p class=" text-center mb-5">
                Klik tautan 🔗 untuk ke sumber resmi dari beasiswa yang tersedia.
                Pastikan anda membaca syarat untuk mendaftar dalam program beasiswa
                tersebut. 👍
            </p>

            <div class="d-flex justify-content-end mb-4">
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Filter Kategori
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item category-filter" href="#" data-category="all">Semua</a></li>
                        <li><a class="dropdown-item category-filter" href="#" data-category="SMA">SMA</a></li>
                        <li><a class="dropdown-item category-filter" href="#"
                                data-category="Sarjana-1">Sarjana-1</a></li>
                        <li><a class="dropdown-item category-filter" href="#" data-category="S2">Magister</a></li>
                    </ul>
                </div>
            </div>


            <div class="row g-4">
                @foreach ($beasiswas as $beasiswa)
                    <div class="col-md-6 col-lg-4 scholarship-card"
                        data-category="{{ implode(' ', json_decode($beasiswa['tingkats'], true)) }}">
                        <div class="card h-100 shadow-sm">
                            <div class="ratio ratio-16x9">
                                <img src="{{ $beasiswa['gambar'] }}" class="card-img-top object-fit-cover"
                                    alt="{{ $beasiswa['nama'] }}" />
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold">{{ $beasiswa['nama'] }}</h5>
                                <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                                    @php
                                        $badgeColors = [
                                            'SMA' => 'bg-primary text-dark',
                                            'D3' => 'bg-success text-dark',
                                            'Sarjana-1' => 'bg-warning ',
                                            'Magister' => 'bg-danger text-dark',
                                            'S2' => 'bg-danger',
                                        ];
                                    @endphp

                                    @foreach (json_decode($beasiswa['tingkats'], true) as $tingkat)
                                        <span
                                            class="badge {{ $badgeColors[$tingkat] ?? 'bg-secondary' }} text-black rounded-4">
                                            {{ $tingkat }}
                                        </span>
                                    @endforeach


                                    @if ($beasiswa['deadline'])
                                        <span class="badge bg-warning text-dark rounded-4">
                                            Deadline:
                                            {{ \Carbon\Carbon::parse($beasiswa['deadline'])->translatedFormat('d F Y') }}
                                        </span>
                                    @endif
                                </div>

                                <p class="card-text flex-grow-1">{{ $beasiswa['deskripsi'] }}</p>
                                <a href="{{ $beasiswa['link'] }}" class="btn btn-primary mt-auto" target="_blank">
                                    Selengkapnya <i class="fas fa-up-right-from-square ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
    @include('partials.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterLinks = document.querySelectorAll('.category-filter');
            const cards = document.querySelectorAll('.scholarship-card');

            filterLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    const category = this.getAttribute('data-category');

                    cards.forEach(card => {
                        const cardCategories = card.getAttribute('data-category').split(
                            ' ');

                        if (category === 'all' || cardCategories.includes(category)) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

</body>

</html>
