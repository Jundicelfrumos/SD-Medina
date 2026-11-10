@extends('layouts.admin-app')

@section('title', 'Kelola Galeri - Admin SD Medina')

@section('content')
  <div class="top">
    <div class="crumb">▦ Dashboard &nbsp;›&nbsp; <b>Galeri Kegiatan</b></div>
    <div class="tools">
      <div style="display: flex; align-items: center; gap: 10px;">
        <div style="text-align: right; line-height: 1.2;">
          <strong style="display: block; font-size: 13px; color: #14214a;">{{ Auth::user()->name }}</strong>
          <small style="font-size: 11px; color: #6b7794;">{{ Auth::user()->email }}</small>
        </div>
        <div style="width: 38px; height: 38px; background: #1f3982; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 15px;">
          {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
        </div>
      </div>
    </div>
  </div>

  @if(session('success'))
    <div style="background: #d1fae5; color: #065f46; padding: 12px 20px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; font-weight: 500;">
        {{ session('success') }}
    </div>
  @endif

  <!-- Tabel Kelola Galeri -->
  <section class="card">
    <div class="lh">
      <h3>Daftar Galeri &amp; Dokumentasi Sekolah</h3>
      <button type="button" class="btn" onclick="openModal('addGalleryModal')" style="width: auto; padding: 8px 16px; font-size: 13px; background: #1f3982; color: #fff; border: none; border-radius: 6px; cursor: pointer;">
        + Tambah Galeri
      </button>
    </div>
    <div class="tw">
      <div class="table-responsive">
        <table class="table align-middle" width="100%" cellspacing="0" style="font-size: 13px;">
          <thead style="font-size: 13px; text-align: center; vertical-align: middle; background: #f3f6ff; color: #1f3982;">
            <tr>
              <th style="width: 8%;">No</th>
              <th style="width: 18%;">Foto</th>
              <th style="width: 30%; text-align: left;">Judul / Keterangan</th>
              <th style="width: 20%;">Kategori</th>
              <th style="width: 14%;">Aksi</th>
            </tr>
          </thead>
          <tbody style="font-size: 13px; text-align: center; vertical-align: middle;">
            @forelse($galleries as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" style="width: 70px; height: 45px; border-radius: 6px; object-fit: cover;">
                    @else
                        <span class="text-muted">Tidak ada foto</span>
                    @endif
                </td>
                <td style="text-align: left;"><strong>{{ $item->title }}</strong></td>
                <td><span class="badge" style="padding: 5px 10px; background: #e2e8f0; color: #1e293b; border-radius: 4px;">{{ $item->category }}</span></td>
                <td>
                    <div style="display: flex; gap: 6px; justify-content: center; align-items: center;">
                        <!-- Tombol Edit -->
                        <button type="button" onclick="openModal('editGalleryModal{{ $item->id }}')" class="btn-action-edit" title="Edit">
                            <i class="fas fa-edit"></i> Edit
                        </button>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Yakin ingin menghapus galeri ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action-delete" title="Hapus">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>

            <!-- Modal Edit Galeri -->
            <div id="editGalleryModal{{ $item->id }}" class="custom-modal-overlay" style="display: none;">
              <div class="custom-modal-box">
                <form action="{{ route('admin.gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #e5e7eb; padding-bottom: 10px; margin-bottom: 15px;">
                    <h5 style="font-weight: 700; color: #1f3982; margin: 0;">Edit Galeri Kegiatan</h5>
                    <button type="button" onclick="closeModal('editGalleryModal{{ $item->id }}')" style="background: none; border: none; font-size: 18px; cursor: pointer;">&times;</button>
                  </div>
                  <div style="text-align: left; margin-bottom: 12px;">
                    <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Judul / Keterangan Kegiatan</label>
                    <input type="text" name="title" value="{{ $item->title }}" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;">
                  </div>
                  <div style="text-align: left; margin-bottom: 12px;">
                    <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Kategori</label>
                    <input type="text" name="category" value="{{ $item->category }}" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" placeholder="Contoh: Kegiatan Siswa, Fasilitas">
                  </div>
                  <div style="text-align: left; margin-bottom: 15px;">
                    <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Ganti Foto (Opsional)</label>
                    <input type="file" name="image" style="width: 100%;">
                  </div>
                  <div style="border-top: 1px solid #e5e7eb; padding-top: 10px; display: flex; justify-content: flex-end; gap: 8px;">
                    <button type="button" onclick="closeModal('editGalleryModal{{ $item->id }}')" style="padding: 6px 14px; background: #9ca3af; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Batal</button>
                    <button type="submit" style="padding: 6px 14px; background: #1f3982; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Simpan Perubahan</button>
                  </div>
                </form>
              </div>
            </div>
            @empty
            <tr>
                <td colspan="5" class="text-center py-4 text-muted">Belum ada data galeri yang diunggah.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Modal Tambah Galeri -->
  <div id="addGalleryModal" class="custom-modal-overlay" style="display: none;">
    <div class="custom-modal-box">
      <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #e5e7eb; padding-bottom: 10px; margin-bottom: 15px;">
          <h5 style="font-weight: 700; color: #1f3982; margin: 0;">Tambah Galeri Baru</h5>
          <button type="button" onclick="closeModal('addGalleryModal')" style="background: none; border: none; font-size: 18px; cursor: pointer;">&times;</button>
        </div>
        <div style="text-align: left; margin-bottom: 12px;">
          <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Judul / Keterangan Kegiatan</label>
          <input type="text" name="title" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" placeholder="Contoh: Outing Class">
        </div>
        <div style="text-align: left; margin-bottom: 12px;">
          <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Kategori</label>
          <input type="text" name="category" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" placeholder="Contoh: Kegiatan Siswa, Aktivitas">
        </div>
        <div style="text-align: left; margin-bottom: 15px;">
          <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Upload Foto</label>
          <input type="file" name="image" required style="width: 100%;">
        </div>
        <div style="border-top: 1px solid #e5e7eb; padding-top: 10px; display: flex; justify-content: flex-end; gap: 8px;">
          <button type="button" onclick="closeModal('addGalleryModal')" style="padding: 6px 14px; background: #9ca3af; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Batal</button>
          <button type="submit" style="padding: 6px 14px; background: #1f3982; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <style>
    .btn-action-edit, .btn-action-delete {
        padding: 6px 12px;
        border: none;
        border-radius: 6px;
        color: #fff;
        cursor: pointer;
        font-size: 12px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: all 0.2s ease-in-out;
    }
    .btn-action-edit { background-color: #f59e0b; }
    .btn-action-delete { background-color: #ef4444; }
    .btn-action-edit:hover {
        background-color: #d97706;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(245, 158, 11, 0.3);
    }
    .btn-action-delete:hover {
        background-color: #dc2626;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(239, 68, 68, 0.3);
    }
  </style>
@endsection