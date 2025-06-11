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

    <!-- Modal Tambah Beasiswa -->
    <div class="modal fade @if ($errors->any()) show d-block @endif" id="tambahBeasiswaModal"
        tabindex="-1" aria-labelledby="tambahBeasiswaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-sm">
                <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title" id="tambahBeasiswaLabel">
                            <i class="bi bi-award me-2"></i>Tambah Beasiswa Baru
                        </h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Tutup"></button>
                    </div>

                    <div class="modal-body mx-2">
                        {{-- Error display --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="judulBeasiswa" class="form-label">Judul Beasiswa <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="judulBeasiswa" name="nama"
                                value="{{ old('nama') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenjang <span class="text-danger">*</span></label>
                            <div class="d-flex flex-wrap gap-3">
                                @foreach (['SMA', 'D3', 'S1', 'Magister'] as $jenjang)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tingkats[]"
                                            value="{{ $jenjang }}"
                                            {{ is_array(old('tingkats')) && in_array($jenjang, old('tingkats')) ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $jenjang }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="deadlineBeasiswa" class="form-label">Deadline <span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="deadlineBeasiswa" name="deadline"
                                value="{{ old('deadline') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsiBeasiswa" class="form-label">Deskripsi <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" name="deskripsi" rows="4" required>{{ old('deskripsi') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="linkBeasiswa" class="form-label">Link Selengkapnya</label>
                            <input type="url" class="form-control" name="link" value="{{ old('link') }}">
                        </div>

                        <div class="mb-3">
                            <label for="gambarLink" class="form-label">Link Gambar</label>
                            <input type="url" class="form-control" name="gambar_link"
                                value="{{ old('gambar_link') }}">
                        </div>

                        <div class="mb-3">
                            <label for="gambarUpload" class="form-label">Upload Gambar</label>
                            <input type="file" class="form-control" name="gambar_file" accept="image/*">
                        </div>

                        <small class="text-muted">Pilih salah satu: upload file atau masukkan link gambar</small>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @foreach ($beasiswas as $beasiswa)
        @include('partials.edit-modal', ['beasiswa' => $beasiswa])
    @endforeach

</x-admin-layout>
