<x-admin-layout>
  <section>
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold">Daftar Pekerjaan</h4>
      <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahPekerjaanModal">
        <i class="bi bi-plus-lg"></i> Tambah Pekerjaan
      </a>
    </div>

    <div class="table-responsive shadow-sm bg-white  rounded">
      <table class="table table-striped align-middle">
        <thead class="table-success">
          <tr>
            <th>Judul</th>
            <th>Jenis</th>
            <th>Lokasi</th>
            <th>Deadline</th>
            <th>Perusahaan</th>
            <th>Deskripsi</th>
            <th>Link</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($pekerjaans as $pekerjaan)
            <tr>
              <td>{{ $pekerjaan->judul }}</td>
              <td>{{ $pekerjaan->jenis }}</td>
              <td>{{ $pekerjaan->lokasi }}</td>
              <td>{{ \Carbon\Carbon::parse($pekerjaan->deadline)->format('d M Y') }}</td>
              <td>{{ $pekerjaan->perusahaan }}</td>
              <td>{{ $pekerjaan->deskripsi }}</td>
              <td><a href="{{ $pekerjaan->link }}" target="_blank">Lihat</a></td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Aksi
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash-fill me-2"></i>Hapus</a></li>
                  </ul>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="8" class="text-center">Belum ada data pekerjaan.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>

  <!-- Modal tetap tampil tapi belum berfungsi -->
  <div class="modal fade" id="tambahPekerjaanModal" tabindex="-1" aria-labelledby="tambahPekerjaanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title" id="tambahPekerjaanLabel">Tambah Pekerjaan Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="judulPekerjaan" class="form-label">Judul</label>
              <input type="text" class="form-control" id="judulPekerjaan" required />
            </div>
            <div class="mb-3">
              <label for="jenisPekerjaan" class="form-label">Jenis</label>
              <input type="text" class="form-control" id="jenisPekerjaan" required />
            </div>
            <div class="mb-3">
              <label for="lokasiPekerjaan" class="form-label">Lokasi</label>
              <input type="text" class="form-control" id="lokasiPekerjaan" required />
            </div>
            <div class="mb-3">
              <label for="deadlinePekerjaan" class="form-label">Deadline</label>
              <input type="date" class="form-control" id="deadlinePekerjaan" required />
            </div>
            <div class="mb-3">
              <label for="perusahaanPekerjaan" class="form-label">Perusahaan</label>
              <input type="text" class="form-control" id="perusahaanPekerjaan" required />
            </div>
            <div class="mb-3">
              <label for="deskripsiPekerjaan" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="deskripsiPekerjaan" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="linkPekerjaan" class="form-label">Link</label>
              <input type="url" class="form-control" id="linkPekerjaan" placeholder="https://contoh.com" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>
