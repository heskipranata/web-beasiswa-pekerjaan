<x-admin-layout>
    <h2 class="fw-bold fs-2">Halo Minmin 👋,</h2>
    <h2 class="fw-bold fs-1">Selamat Datang di Dashboard <span class="text-primary">ScholarJob.</span></h2>
    <p class="text-muted">Berikut ringkasan data yang tersedia di sistem.</p>
    <hr class="mb-4 mt-2" style="border-top: 3px solid #007bff; width: full; border-radius: 5px;">

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 text-white p-4 border-0 shadow-lg rounded-4" style="background: linear-gradient(135deg, #4e73df, #224abe);">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-mortarboard-fill" style="font-size: 3rem; opacity: 0.9;"></i>
                    </div>
                    <h1 class="fw-bold display-3 mb-0">{{ $totalBeasiswa }}</h1>
                    <p class="fw-medium mt-2 mb-0 fs-5">Total Beasiswa</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 text-white p-4 border-0 shadow-lg rounded-4" style="background: linear-gradient(135deg, #1cc88a, #139c67);">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-briefcase-fill" style="font-size: 3rem; opacity: 0.9;"></i>
                    </div>
                    <h1 class="fw-bold display-3 mb-0">{{ $totalPekerjaan }}</h1>
                    <p class="fw-medium mt-2 mb-0 fs-5">Total Pekerjaan</p>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
