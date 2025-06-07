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
                                    @php
                                        $colorMap = [
                                            'SMA' => 'primary',
                                            'D3' => 'success',
                                            'Sarjana-1' => 'warning',
                                            'Magister' => 'danger',
                                            'Doktor' => 'secondary',
                                        ];
                                    @endphp

                                    @foreach (json_decode($beasiswa->tingkats, true) as $tingkat)
                                        @php
                                            $badgeColor = $colorMap[$tingkat] ?? 'info';
                                        @endphp
                                        <span
                                            class="badge bg-{{ $badgeColor }} text-black rounded-4">{{ $tingkat }}</span>
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
                                            <a class="btn" href="#" data-bs-toggle="modal"
                                                data-bs-target="#editBeasiswaModal{{ $beasiswa->id }}">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('beasiswa.destroy', $beasiswa->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus beasiswa ini?')">
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
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-sm">
                <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf

                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title" id="tambahBeasiswaLabel">
                            <i class="bi bi-award me-2"></i>Tambah Beasiswa Baru
                        </h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Tutup"></button>
                    </div>

                    <div class="modal-body mx-2">

                        <div class="mb-4">
                            <label for="judulBeasiswa" class="form-label fw-semibold text-success">Judul Beasiswa <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="judulBeasiswa" name="nama"
                                placeholder="Masukkan judul beasiswa" required>
                            <div class="invalid-feedback">Judul beasiswa wajib diisi.</div>
                        </div>

                        <fieldset class="mb-4">
                            <p class="form-label fw-semibold mb-2 text-success">Jenjang <span
                                    class="text-danger">*</span>
                            </p>
                            <div class="d-flex flex-wrap gap-3">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="jenjangSMA" name="tingkats[]"
                                        value="SMA">
                                    <label class="form-check-label" for="jenjangSMA">SMA</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="jenjangD3" name="tingkats[]"
                                        value="D3">
                                    <label class="form-check-label" for="jenjangD3">D3</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="jenjangS1" name="tingkats[]"
                                        value="S1">
                                    <label class="form-check-label" for="jenjangS1">Sarjana-1</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="jenjangS2" name="tingkats[]"
                                        value="S2">
                                    <label class="form-check-label" for="jenjangS2">Magister</label>
                                </div>


                            </div>
                            <div class="invalid-feedback d-block" id="tingkatsFeedback" style="display:none;">Pilih
                                minimal satu jenjang.</div>
                        </fieldset>

                        <div class="mb-4">
                            <label for="deadlineBeasiswa" class="form-label fw-semibold text-success">Deadline</label>
                            <input type="date" class="form-control" id="deadlineBeasiswa" name="deadline"
                                required>
                            <div class="invalid-feedback">Deadline wajib diisi dan harus berupa tanggal yang valid.
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="deskripsiBeasiswa" class="form-label fw-semibold text-success">Deskripsi <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" id="deskripsiBeasiswa" name="deskripsi" rows="4"
                                placeholder="Deskripsikan beasiswa secara singkat" required></textarea>
                            <div class="invalid-feedback">Deskripsi wajib diisi.</div>
                        </div>

                        <div class="mb-4 p-3 bg-light rounded-3 border">
                            <h6 class="fw-semibold mb-3 text-success">Gambar (Opsional)</h6>

                            <div class="mb-3">
                                <label for="gambarLink" class="form-label">Link Gambar</label>
                                <input type="url" class="form-control" id="gambarLink" name="gambar_link"
                                    placeholder="https://contoh.com/image.jpg">
                            </div>

                            <div class="mb-0">
                                <label for="gambarUpload" class="form-label">Upload Gambar</label>
                                <input type="file" class="form-control" id="gambarUpload" name="gambar_file"
                                    accept="image/*">
                            </div>

                            <small class="text-muted fst-italic mt-2 d-block">Anda dapat mengisi salah satu dari link
                                atau upload gambar.</small>
                        </div>

                        <div class="mb-3">
                            <label for="linkBeasiswa" class="form-label fw-semibold text-success">Link
                                Selengkapnya</label>
                            <input type="url" class="form-control" id="linkBeasiswa" name="link"
                                placeholder="https://contoh.com">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary px-4">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    @foreach ($beasiswas as $beasiswa)
        @include('partials.edit-modal', ['beasiswa' => $beasiswa])
    @endforeach

</x-admin-layout>
