<x-admin-layout>
  <section>
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold">Daftar Pekerjaan</h4>
      <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahPekerjaanModal">
        <i class="bi bi-plus-lg"></i> Tambah Pekerjaan
      </a>
    </div>

    <div class="table-responsive shadow-sm bg-white rounded">
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
              <td><a href="{{ $pekerjaan->link_detail }}" target="_blank">Lihat</a></td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Aksi
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editPekerjaanModal{{ $pekerjaan->id }}">
                        <i class="bi bi-pencil-square me-2"></i>Edit
                      </a>
                    </li>
                    <li>
                      <form action="{{ route('pekerjaan.destroy', $pekerjaan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pekerjaan ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item text-danger">
                          <i class="bi bi-trash-fill me-2"></i>Hapus
                        </button>
                      </form>
                    </li>
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

  @include('partials.add-pekerjaan-modal')

  @foreach ($pekerjaans as $pekerjaan)
    @include('partials.edit-pekerjaan-modal', ['pekerjaan' => $pekerjaan])
  @endforeach
</x-admin-layout>
