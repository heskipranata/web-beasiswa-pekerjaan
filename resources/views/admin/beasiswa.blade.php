<x-admin-layout>
    <section>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold">Daftar Beasiswa</h4>
            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahBeasiswaModal">
                <i class="bi bi-plus-lg"></i> Tambah Beasiswa
            </a>
        </div>

        <div class="table-responsive shadow-sm">
            <table class="table table-striped align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>Judul</th>
                        <th>Jenjang</th>
                        <th>Deadline</th>
                        <th>Deskripsi</th>
                        <th>Link</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beasiswas as $beasiswa)
                        <tr>
                            <td>{{ $beasiswa->nama }}</td>
                            <td>
                                <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                                    @foreach (json_decode($beasiswa->tingkats, true) as $tingkat)
                                        <span class="badge bg-info text-dark rounded-4">{{ $tingkat }}</span>
                                    @endforeach
                                </div>
                            </td>

                            <td>{{ \Carbon\Carbon::parse($beasiswa->deadline)->format('d M Y') }}</td>

                            <td title="{{ $beasiswa->deskripsi }}">
                                {{ \Illuminate\Support\Str::limit($beasiswa->deskripsi, 40, '...') }}
                            </td>

                            <td>
                                @if ($beasiswa->link)
                                    <a href="{{ $beasiswa->link }}" target="_blank" title="{{ $beasiswa->link }}">
                                        {{ \Illuminate\Support\Str::limit($beasiswa->link, 30, '...') }}
                                    </a>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>

                            <td>
                                @if ($beasiswa->gambar)
                                    <a href="{{ asset($beasiswa->gambar) }}" target="_blank">
                                        <img src="{{ asset($beasiswa->gambar) }}" alt="Gambar Beasiswa"
                                            class="img-thumbnail" width="80">
                                    </a>
                                @else
                                    <span class="text-muted">Tidak ada</span>
                                @endif
                            </td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown">
                                        Aksi
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                Edit <i class="bi bi-pencil-square ms-2"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <form method="POST" action="#">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger">
                                                    Hapus <i class="bi bi-trash-fill ms-2"></i>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <div class="modal fade" id="tambahBeasiswaModal" tabindex="-1" aria-labelledby="tambahBeasiswaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahBeasiswaLabel">Tambah Beasiswa Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judulBeasiswa" class="form-label">Judul Beasiswa</label>
                            <input type="text" class="form-control" id="judulBeasiswa" required />
                        </div>
                        <div class="mb-3">
                            <label for="jenjangBeasiswa" class="form-label">Jenjang</label>
                            <select class="form-select" id="jenjangBeasiswa" required>
                                <option value="">Pilih jenjang</option>
                                <option value="D3">D3</option>
                                <option value="S1">Sarjana-1</option>
                                <option value="S2">Magister</option>
                                <option value="S3">Doktor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="deadlineBeasiswa" class="form-label">Deadline</label>
                            <input type="date" class="form-control" id="deadlineBeasiswa" required />
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiBeasiswa" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsiBeasiswa" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="linkBeasiswa" class="form-label">Link Selengkapnya</label>
                            <input type="url" class="form-control" id="linkBeasiswa"
                                placeholder="https://contoh.com" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
