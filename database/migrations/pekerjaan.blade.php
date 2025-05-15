<x-admin-layout>
  <section >
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
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ILF Scholarship Application</td>
            <td>Sarjana-1</td>
            <td>3 Juni 2025</td>
            <td class="ellipsis-cell" title="Beasiswa ILF menyediakan pendanaan penuh untuk mahasiswa S1.">
              Beasiswa ILF menyediakan pendanaan penuh untuk mahasiswa S1.
            </td>
            <td>
              <a
                href="https://example.com/ilf-scholarship-long-url-example-very-long-link-to-demo"
                class="ellipsis-link"
                target="_blank"
                rel="noopener noreferrer"
                title="https://example.com/ilf-scholarship-long-url-example-very-long-link-to-demo"
              >
                https://example.com/ilf-scholarship-long-url-example-very-long-link-to-demo
              </a>
            </td>
            <td>
              <div class="dropdown">
                <button
                  class="btn btn-secondary btn-sm dropdown-toggle"
                  type="button"
                  id="aksiDropdown1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Aksi
                </button>
                <ul class="dropdown-menu" aria-labelledby="aksiDropdown1">
                  <li>
                    <a class="dropdown-item" href="#">
                      Edit <i class="bi bi-pencil-square ms-2"></i>
                    </a>
                  </li>
                  <li>
                    <button class="dropdown-item text-danger" type="button">
                      Hapus <i class="bi bi-trash-fill ms-2"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td>Beasiswa Glow &amp; Lovely 2025</td>
            <td>SMA</td>
            <td>8 Mei 2025</td>
            <td class="ellipsis-cell" title="Beasiswa Glow &amp; Lovely menyediakan pendanaan untuk perempuan lulusan SMA.">
              Beasiswa Glow &amp; Lovely menyediakan pendanaan untuk perempuan lulusan SMA.
            </td>
            <td>
              <a
                href="https://example.com/glow-lovely-scholarship"
                class="ellipsis-link"
                target="_blank"
                rel="noopener noreferrer"
                title="https://example.com/glow-lovely-scholarship"
              >
                https://example.com/glow-lovely-scholarship
              </a>
            </td>
            <td>
              <div class="dropdown">
                <button
                  class="btn btn-secondary btn-sm dropdown-toggle"
                  type="button"
                  id="aksiDropdown2"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Aksi
                </button>
                <ul class="dropdown-menu" aria-labelledby="aksiDropdown2">
                  <li>
                    <a class="dropdown-item" href="#">
                      Edit <i class="bi bi-pencil-square ms-2"></i>
                    </a>
                  </li>
                  <li>
                    <button class="dropdown-item text-danger" type="button">
                      Hapus <i class="bi bi-trash-fill ms-2"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <div
    class="modal fade"
    id="tambahBeasiswaModal"
    tabindex="-1"
    aria-labelledby="tambahBeasiswaLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title" id="tambahBeasiswaLabel">Tambah Beasiswa Baru</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Tutup"
            ></button>
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
              <input
                type="url"
                class="form-control"
                id="linkBeasiswa"
                placeholder="https://contoh.com"
              />
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
