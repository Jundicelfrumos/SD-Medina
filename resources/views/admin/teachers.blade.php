@extends('layouts.admin-app')

@section('title', 'Kelola Profil Guru - Admin SD Medina')

@section('content')
  <div class="top">
    <div class="crumb">▦ Dashboard &nbsp;›&nbsp; <b>Profil Guru</b></div>
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

  <!-- Tabel Kelola Profil Guru -->
  <section class="card">
    <div class="lh">
      <h3>Daftar Profil Guru &amp; Pengajar</h3>
      <!-- Tombol Pemicu Modal Tambah -->
      <button type="button" class="btn" onclick="openModal('addTeacherModal')" style="width: auto; padding: 8px 16px; font-size: 13px; background: #1f3982; color: #fff; border: none; border-radius: 6px; cursor: pointer;">
        + Tambah Guru
      </button>
    </div>
    <div class="tw">
      <div class="table-responsive">
        <table class="table align-middle" width="100%" cellspacing="0" style="font-size: 13px;">
          <thead style="font-size: 13px; text-align: center; vertical-align: middle; background: #f3f6ff; color: #1f3982;">
            <tr>
              <th style="width: 8%;">No</th>
              <th style="width: 15%;">Icon Mapel</th>
              <th style="width: 35%; text-align: left;">Nama Guru &amp; Gelar</th>
              <th style="width: 25%; text-align: left;">Jabatan / Peran</th>
              <th style="width: 17%;">Aksi</th>
            </tr>
          </thead>
          <tbody style="font-size: 13px; text-align: center; vertical-align: middle;">
            @forelse($teachers as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    <div style="width: 40px; height: 40px; background: #f0f4ff; color: #1f3982; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 16px; margin: 0 auto;">
                        <i class="fas {{ $item->icon ?? 'fa-chalkboard-teacher' }}"></i>
                    </div>
                </td>
                <td style="text-align: left;"><strong>{{ $item->name }}</strong></td>
                <td style="text-align: left; color: #4b5563;">{{ $item->role }}</td>
                <td>
                    <div style="display: flex; gap: 6px; justify-content: center; align-items: center;">
                        <!-- Tombol Edit -->
                        <button type="button" onclick="openModal('editTeacherModal{{ $item->id }}')" class="btn-action-edit" title="Edit">
                            <i class="fas fa-edit"></i> Edit
                        </button>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('admin.teachers.destroy', $item->id) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Yakin ingin menghapus data guru ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action-delete" title="Hapus">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>

            <!-- Modal Edit Guru -->
            <div id="editTeacherModal{{ $item->id }}" class="custom-modal-overlay" style="display: none;">
              <div class="custom-modal-box">
                <form action="{{ route('admin.teachers.update', $item->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #e5e7eb; padding-bottom: 10px; margin-bottom: 15px;">
                    <h5 style="font-weight: 700; color: #1f3982; margin: 0;">Edit Profil Guru</h5>
                    <button type="button" onclick="closeModal('editTeacherModal{{ $item->id }}')" style="background: none; border: none; font-size: 18px; cursor: pointer;">&times;</button>
                  </div>
                  <div style="text-align: left; margin-bottom: 12px;">
                    <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Nama Guru &amp; Gelar</label>
                    <input type="text" name="name" value="{{ $item->name }}" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;">
                  </div>
                  <div style="text-align: left; margin-bottom: 12px;">
                    <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Jabatan / Peran</label>
                    <input type="text" name="role" value="{{ $item->role }}" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;">
                  </div>
                  <div style="text-align: left; margin-bottom: 15px;">
                    <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Kode Icon FontAwesome</label>
                    <input type="text" name="icon" value="{{ $item->icon }}" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" placeholder="Contoh: fa-language, fa-book-reader">
                    <small style="color: #6b7794; font-size: 11px; margin-top: 3px; display: block;">Gunakan nama kelas FontAwesome (misal: <code>fa-language</code> untuk bahasa, <code>fa-quran</code> untuk agama).</small>
                  </div>
                  <div style="border-top: 1px solid #e5e7eb; padding-top: 10px; display: flex; justify-content: flex-end; gap: 8px;">
                    <button type="button" onclick="closeModal('editTeacherModal{{ $item->id }}')" style="padding: 6px 14px; background: #9ca3af; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Batal</button>
                    <button type="submit" style="padding: 6px 14px; background: #1f3982; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Simpan Perubahan</button>
                  </div>
                </form>
              </div>
            </div>
            @empty
            <tr>
                <td colspan="5" class="text-center py-4 text-muted">Belum ada data profil guru yang diunggah.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Modal Tambah Guru -->
  <div id="addTeacherModal" class="custom-modal-overlay" style="display: none;">
    <div class="custom-modal-box">
      <form action="{{ route('admin.teachers.store') }}" method="POST">
        @csrf
        <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #e5e7eb; padding-bottom: 10px; margin-bottom: 15px;">
          <h5 style="font-weight: 700; color: #1f3982; margin: 0;">Tambah Profil Guru Baru</h5>
          <button type="button" onclick="closeModal('addTeacherModal')" style="background: none; border: none; font-size: 18px; cursor: pointer;">&times;</button>
        </div>
        <div style="text-align: left; margin-bottom: 12px;">
          <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Nama Guru &amp; Gelar</label>
          <input type="text" name="name" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" placeholder="Contoh: Ustadz Ahmad Fauzi, S.Pd.">
        </div>
        <div style="text-align: left; margin-bottom: 12px;">
          <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Jabatan / Peran</label>
          <input type="text" name="role" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" placeholder="Contoh: Guru Bahasa Arab">
        </div>
        <div style="text-align: left; margin-bottom: 15px;">
          <label style="font-weight: 600; font-size: 13px; display: block; margin-bottom: 5px; color:#14214a;">Kode Icon FontAwesome</label>
          <input type="text" name="icon" required style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;" placeholder="Contoh: fa-language">
          <small style="color: #6b7794; font-size: 11px; margin-top: 3px; display: block;">Contoh icon: <code>fa-language</code> (Bahasa), <code>fa-book-reader</code> (Tahfidz), <code>fa-calculator</code> (Matematika).</small>
        </div>
        <div style="border-top: 1px solid #e5e7eb; padding-top: 10px; display: flex; justify-content: flex-end; gap: 8px;">
          <button type="button" onclick="closeModal('addTeacherModal')" style="padding: 6px 14px; background: #9ca3af; color: #fff; border: none; border-radius: 6px; cursor: pointer;">Batal</button>
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