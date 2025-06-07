<div class="modal fade" id="editBeasiswaModal{{ $beasiswa->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('beasiswa.update', $beasiswa->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title">Edit Beasiswa: {{ $beasiswa->nama }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>

                <div class="modal-body mx-3">
                    <div class="mb-3">
                        <label for="judulBeasiswa" class="form-label">Judul Beasiswa</label>
                        <input type="text" class="form-control" name="nama" value="{{ $beasiswa->nama }}" required />
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Jenjang</label>
                        @php $selected = json_decode($beasiswa->tingkats, true); @endphp
                        @foreach (['SMA', 'D3', 'Sarjana-1', 'Magister'] as $jenjang)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="tingkats[]"
                                    value="{{ $jenjang }}" id="tingkat_{{ $jenjang }}_{{ $beasiswa->id }}"
                                    {{ in_array($jenjang, $selected) ? 'checked' : '' }}>
                                <label class="form-check-label" for="tingkat_{{ $jenjang }}_{{ $beasiswa->id }}">
                                    {{ $jenjang }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <div class="mb-3">
                        <label for="deadlineBeasiswa" class="form-label">Deadline</label>
                        <input type="date" class="form-control" name="deadline" value="{{ $beasiswa->deadline }}">
                    </div>

                    <div class="mb-3">
                        <label for="deskripsiBeasiswa" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3" required>{{ $beasiswa->deskripsi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="gambarLink" class="form-label">Link Gambar (opsional)</label>
                        <input type="url" class="form-control" name="gambar_link"
                            placeholder="https://contoh.com/image.jpg">
                    </div>

                    <div class="mb-3">
                        <label for="gambarUpload" class="form-label">Upload Gambar (opsional)</label>
                        <input type="file" class="form-control" name="gambar_file" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label for="linkBeasiswa" class="form-label">Link Selengkapnya</label>
                        <input type="url" class="form-control" name="link" value="{{ $beasiswa->link }}">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
