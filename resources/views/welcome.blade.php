<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ScholarJob | Beasiswa - Pekerjaan</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">


    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <main>
        <section id="home"
            class="position-relative min-vh-100 d-flex align-items-center justify-content-md-center text-white text-center"
            style="
        background-image: url('{{ asset('images/bg2.jpg') }}');
        background-size: cover;
        background-position: center;
      ">
            <div class="position-absolute top-0 start-0 w-100 h-100 overlay-dark"></div>

            <div class="container position-relative z-index-10 px-3 px-md-5 mb-5">
                <h1 class="display-4 fw-bold top-spacing-md">
                    Temukan Beasiswa dan Lowongan Pekerjaan Terbaik 🚀
                </h1>
                <p class="mt-4 fluid-text">
                    Jelajahi berbagai beasiswa dan lowongan pekerjaan di Manado dan
                    kota-kota terdekat yang dapat membantumu mengembangkan karier,
                    memperluas pengetahuan, serta mempersiapkan masa depan yang lebih
                    cerah.✨
                </p>
                <a href="#about"
                    class="mt-4 btn btn-light text-primary fw-semibold fs-6 px-3 py-2 rounded-1 hover-bg-dark">Selengkapnya
                    🔍</a>
            </div>
        </section>

        <section id="about" class="py-5 bg-gray text-center">
            <div class="container mt-5">
                <h2 class="text-primary fw-bold display-6">
                    Akses Informasi Beasiswa dan Lowongan Pekerjaan di Sekitarmu!
                </h2>
                <p class="mt-3 text-secondary fs-5">
                    Kami hadir untuk membantumu menemukan informasi akurat dan terkini
                    mengenai beasiswa pendidikan, lowongan kerja, dan peluang pengembangan
                    diri lainnya. Semua dirancang untuk mendukung siswa, mahasiswa, dan
                    pencari kerja di Manado dan daerah sekitarnya dalam meraih kesuksesan.
                    🌟
                </p>

                <div class="row mt-5 g-4 px-3 px-md-5">
                    <div class="col-12 col-md-6">
                        <div
                            class="bg-white p-4 shadow rounded h-100 d-flex flex-column align-items-center hover-border-blue">
                            <img src="https://img.icons8.com/stickers/100/scholarship.png" alt="scholarship"
                                width="100" height="100" />
                            <h5 class="mt-3 text-dark fw-semibold">Beasiswa</h5>
                            <p class="text-muted fs-6 mt-2">
                                Jelajahi berbagai program beasiswa yang tersedia untuk semua
                                jenjang pendidikan yang dapat mendukung perjalanan akademikmu.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="bg-white p-4 shadow rounded h-100 d-flex flex-column align-items-center">
                            <img src="https://img.icons8.com/stickers/100/maintenance.png" alt="pelatihan"
                                width="100" height="100" />
                            <h5 class="mt-3 text-dark fw-semibold">Lowongan Pekerjaan</h5>
                            <p class="text-muted fs-6 mt-2">
                                Temukan pilihan lowongan pekerjaan, baik paruh waktu maupun
                                penuh waktu, yang sesuai dengan minat dan keahlianmu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="beasiswa" class="py-5 bg-primary text-white">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="{{ asset('images/bg3.jpg') }}" alt="Beasiswa" class="img-fluid rounded" />
                    </div>
                    <div class="col-md-6 ps-md-5">
                        <h2 class="fw-bold display-5">Temukan Beasiswa Impianmu!</h2>
                        <p class="mt-3 fs-5 text-white-50">
                            Berbagai program beasiswa yang tersedia untuk pelajar dan
                            mahasiswa di Manado dan sekitarnya. Cek syarat, manfaat, dan cara
                            mendaftar untuk mendapatkan kesempatan terbaik.
                        </p>
                        <a href="{{ route('beasiswa.index') }}"
                            class="btn btn-light text-primary fw-semibold px-4 py-2 mt-3 rounded-1 hover-btn-white">
                            Lihat Beasiswa
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="lowongan" class="py-5 bg-light">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h2 class="fw-bold text-primary display-5">
                            Temukan Pekerjaan Sesuai Minatmu!
                        </h2>
                        <p class="mt-3 text-secondary fs-5">
                            Jelajahi berbagai pilihan pekerjaan part-time atau full-time di
                            Manado dan sekitarnya. Lihat persyaratan, manfaat, dan cara
                            melamar untuk membangun karier yang gemilang.
                        </p>
                        <a href="{{ route('pekerjaan.index') }}"
                            class="btn btn-primary fw-semibold px-4 py-2 mt-3 rounded-1 hover-btn">
                            Cari Lowongan
                        </a>
                    </div>

                    <div class="col-md-6">
                        <img src="{{ asset('images/eng.jpg') }}" alt="Lowongan Pekerjaan" class="img-fluid rounded" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Kontak Section  -->
        <section id="kontak" class="position-relative bg-dark text-white py-5"
            style="
      background-image: url( {{ asset('images/mnd.jpg') }});
      background-size: cover;
      background-position: center;
    ">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-50"></div>

            <div class="container position-relative z-1 py-5">
                <div class="row align-items-center g-4">
                    <!-- Teks -->
                    <div class="col-lg-6">
                        <h2 class="display-5 fw-bold">Hubungi Kami 📞</h2>
                        <p class="mt-3 fs-5">
                            Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut
                            tentang beasiswa atau lowongan pekerjaan, jangan ragu untuk
                            menghubungi kami melalui formulir ini. Kami siap membantu Anda!
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <div class="bg-white text-dark p-3 rounded shadow-sm border border-light-subtle">
                            <h4 class="fw-bold mb-4 text-center">Pesan Anda</h4>
                            <form>
                                <div class="form-floating mb-2">
                                    <input class="form-control" id="name" type="text" placeholder="Nama Lengkap"
                                        required />
                                    <label for="name">Nama Lengkap</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input class="form-control" id="email" type="email"
                                        placeholder="nama@example.com" required />
                                    <label for="email">Alamat Email</label>
                                </div>

                                <div class="form-floating mb-2">
                                    <textarea class="form-control" id="message" placeholder="Pesan Anda" style="height: 7rem" required></textarea>
                                    <label for="message">Pesan</label>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg shadow-sm rounded-1" type="submit">
                                        <i class="bi bi-send-fill me-2"></i>Kirim Pesan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('partials.footer')
</body>

</html>
