@extends('layouts.admin-app')

@section('title', 'Kelola Berita - Admin SD Medina')

@section('content')
  <div class="top">
    <div class="crumb">Dashboard &nbsp;›&nbsp; <b>Berita &amp; Kegiatan</b></div>
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

  <!-- Tabel Kelola Berita -->
  <section class="card">
    <div class="lh">
      <h3> <i class="fa-solid fa-newspaper"></i> Daftar Berita &amp; Kegiatan Sekolah</h3>
      <!-- Tombol Pemicu Modal Tambah -->
      <button type="button" class="btn" onclick="openModal('addNewsModal')" style="width: auto; padding: 8px 16px; font-size: 13px; background: #1f3982; color: #fff; border: none; border-radius: 6px; cursor: pointer;">
        + Tambah Berita
      </button>
    </div>
    <div class="tw">
      <div class="table-responsive">
        <table class="table align-middle" width="100%" cellspacing="0" style="font-size: 13px;">
          <thead style="font-size: 13px; text-align: center; vertical-align: middle; background: #f3f6ff; color: #1f3982;">
            <tr>
              <th style="width: 5%;">No</th>
              <th style="width: 25%;">Judul Berita</th>
              <th style="width: 35%;">Isi / Caption Berita</th>
              <th style="width: 12%;">Kategori</th>
              <th style="width: 11%;">Tanggal</th>
              <th style="width: 12%;">Aksi</th>
            </tr>
          </thead>
          <tbody style="font-size: 13px; text-align: center; vertical-align: middle;">
            @forelse($news as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td style="text-align: left;"><strong>{{ $item->title }}</strong></td>
                <!-- Menampilkan konten dengan batasan karakter menggunakan Str::limit -->
                <td style="text-align: left; color: #4b5563;">
                    {{ Str::limit($item->content, 60, '...') }}
                </td>
                <td><span class="badge bg-secondary" style="padding: 5px 10px; background: #e2e8f0; color: #1e293b; border-radius: 4px;">{{ $item->category }}</span></td>
                <td>{{ $item->created_at->format('d M Y') }}</td>
                <td>
    <div style="display: flex; gap: 6px; justify-content: center; align-items: center;">
        <!-- Tombol Edit dengan Efek Hover -->
        <button type="button" onclick="openModal('editNewsModal{{ $item->id }}')" class="btn-action-edit" title="Edit">
            <i class="fas fa-edit"></i> Edit
        </button>

        <!-- Tombol Hapus dengan Efek Hover -->
        <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Yakin ingin menghapus berita ini?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-action-delete" title="Hapus">
                <i class="fas fa-trash"></i> Hapus
            </button>
        </form>
    </div>
</td>
            </tr>

            <!-- Modal Edit Berita -->
            <div id="editNewsModal{{ $item->id }}" class="custom-modal-overlay" style="display: none;">
              <div class="custom-modal-box">
                <form action="{{ route('admin.news.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #e5e7eb; padding-bottom: 10px; margin-bottom: 15px;">
                    <h5 style="font-weight: 700; color: #1f3982; margin: 0;">Edit Berita</h5>
                    <button type="button" onclick="closeModal('editNewsModal{{ $item->id }}')" style="background: none; border: none; font-size: 18px; cursor: pointer;">&times;</button>
                  </div>
                  <div style="text-align: left; margin-bottom: 12px;">
                    <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Judul Berita</label>
                    <input type="text" name="title" value="{{ $item->title }}" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;">
                  </div>
                  <div style="text-align: left; margin-bottom: 12px;">
                    <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Kategori</label>
                    <input type="text" name="category" value="{{ $item->category }}" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;">
                  </div>
                  <div style="text-align: left; margin-bottom: 12px;">
                    <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Konten Berita</label>
                    <textarea name="content" rows="4" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;">{{ $item->content }}</textarea>
                  </div>
                  <div style="text-align: left; margin-bottom: 15px;">
                    <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Ganti Gambar (Opsional)</label>
                    <input type="file" name="image" style="width: 100%;">
                  </div>
                  <div style="border-top: 1px solid #e5e7eb; padding-top: 10px; display: flex; justify-content: flex-end; gap: 8px;">
                    <button type="button" onclick="closeModal('editNewsModal{{ $item->id }}')" style="padding: 6px 14px; background: #9ca3af; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Batal</button>
                    <button type="submit" style="padding: 6px 14px; background: #1f3982; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Simpan Perubahan</button>
                  </div>
                </form>
              </div>
            </div>
            @empty
            <tr>
                <td colspan="6" class="text-center py-4 text-muted">Belum ada berita yang diunggah.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Modal Tambah Berita -->
  <div id="addNewsModal" class="custom-modal-overlay" style="display: none;">
    <div class="custom-modal-box">
      <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="display: flex; justify-content: space-width; align-items: center; border-bottom: 1px solid #e5e7eb; padding-bottom: 10px; margin-bottom: 15px;">
          <h5 style="font-weight: 700; color: #1f3982; margin: 0;">Tambah Berita Baru</h5>
          <button type="button" onclick="closeModal('addNewsModal')" style="background: none; border: none; font-size: 18px; cursor: pointer; margin-left: auto;">&times;</button>
        </div>
        <div style="text-align: left; margin-bottom: 12px;">
          <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Judul Berita</label>
          <input type="text" name="title" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" placeholder="Masukkan judul berita">
        </div>
        <div style="text-align: left; margin-bottom: 12px;">
          <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Kategori</label>
          <input type="text" name="category" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" placeholder="Contoh: Kegiatan, Pengumuman">
        </div>
        <div style="text-align: left; margin-bottom: 12px;">
          <label style="font-weight: 600; font-size: 13px; domain-block; margin-bottom: 5px; color:#14214a;">Konten Berita</label>
          <textarea name="content" rows="4" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" placeholder="Tulis isi berita..."></textarea>
        </div>
        <div style="text-align: left; margin-bottom: 15px;">
          <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Upload Gambar</label>
          <input type="file" name="image" style="width: 100%;">
        </div>
        <div style="border-top: 1px solid #e5e7eb; padding-top: 10px; display: flex; justify-content: flex-end; gap: 8px;">
          <button type="button" onclick="closeModal('addNewsModal')" style="padding: 6px 14px; background: #9ca3af; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Batal</button>
          <button type="submit" style="padding: 6px 14px; background: #1f3982; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Publikasikan</button>
        </div>
      </form>
    </div>
  </div>
@endsection