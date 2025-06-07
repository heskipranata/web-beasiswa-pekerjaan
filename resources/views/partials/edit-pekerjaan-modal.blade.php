<div class="modal fade" id="editPekerjaanModal{{ $pekerjaan->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('pekerjaan.update', $pekerjaan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit Pekerjaan: {{ $pekerjaan->judul }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{ $pekerjaan->judul }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis</label>
                        <select name="jenis" class="form-select" required>
                            @foreach (['Magang', 'Part-time', 'Fulltime'] as $jenis)
                                <option value="{{ $jenis }}" {{ $pekerjaan->jenis === $jenis ? 'selected' : '' }}>
                                    {{ $jenis }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" value="{{ $pekerjaan->lokasi }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deadline</label>
                        <input type="date" name="deadline" class="form-control" value="{{ $pekerjaan->deadline }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Perusahaan</label>
                        <input type="text" name="perusahaan" class="form-control" value="{{ $pekerjaan->perusahaan }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required>{{ $pekerjaan->deskripsi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="url" name="link_detail" class="form-control" value="{{ $pekerjaan->link_detail }}">
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
