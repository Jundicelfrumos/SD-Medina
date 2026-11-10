@extends('layouts.admin-app')

@section('title', 'Dashboard Utama - Admin SD Medina')

@section('content')
  <div class="top">
    <div class="crumb">Dashboard &nbsp;›&nbsp; <b>Ringkasan</b></div>
    <div class="tools">
      <!-- Bagian Profil: Nama & Email di Kiri, Avatar di Kanan -->
      <div style="display: flex; align-items: center; gap: 10px;">
        <!-- Nama & Email -->
        <div style="text-align: right; line-height: 1.2;">
          <strong style="display: block; font-size: 13px; color: #14214a;">{{ Auth::user()->name }}</strong>
          <small style="font-size: 11px; color: #6b7794;">{{ Auth::user()->email }}</small>
        </div>
        <!-- Foto Profil Bulat (Inisial Nama di Kanan) -->
        <div style="width: 38px; height: 38px; background: #1f3982; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 15px; overflow: hidden;">
          {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
        </div>
      </div>
    </div>
  </div>

  <!-- Form / Tabel Kelola Berita -->
  <section class="card">
    <div class="lh">
      <h3><i class="fa-solid fa-users"></i> Daftar Peserta Didik Baru</h3>

    </div>
    <div class="tw">
      <div class="table-responsive">
    <table class="table align-middle" width="100%" cellspacing="0" style="font-size: 13px;">
        <thead style="font-size: 13px; text-align: center; vertical-align: middle;">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>NIK</th>
                <th>Email</th>
                <th>Tempat, Tgl Lahir</th>
                <th>Status</th>
                <th>Asal Sekolah</th>
                <th>NISN</th>
                <th>nama Ayah</th>
                <th>NIK Ayah</th>
                <th>Pekerjaan Ayah</th>
                <th>Telp Ayah</th>
                <th>nama Ibu</th>
                <th>NIK Ibu</th>
                <th>Pekerjaan Ibu</th>
                <th>Telp Ibu</th>
                <th>Alamat</th>
                <th>Kontak Utama</th>
                <th>Pembayaran (BSI)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody style="font-size: 13px; text-align: center; vertical-align: middle;">
            @forelse($pmbs as $index => $p)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    <strong>{{ $p->nama_siswa }}</strong><br>
                </td>
                <td>{{ $p->gender }}</td>
                <td>{{ $p->nik_siswa }}</td>
                <td>{{ $p->email }}</td>
                <td>
                    {{ $p->tempathlahir_siswa }}<br>
                    {{ $p->tanggallahir_siswa }}
                </td>
                <td>{{ $p->status_pendaftaran }}</td>
                <td>{{ $p->sekolah_asal }}</td>
                <td>{{ $p->nisn }}</td>
                <td>{{ $p->nama_ayah }}</td>
                <td>{{ $p->nik_ayah }}</td>
                <td>{{ $p->pekerjaan_ayah }}</td>
                <td>{{ $p->telp_ayah }}</td>
                <td>{{ $p->nama_ibu }}</td>
                <td>{{ $p->nik_ibu }}</td>
                <td>{{ $p->pekerjaan_ibu }}</td>
                <td>{{ $p->telp_ibu }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->kontak_utama }}</td>
                <td>
                    <strong>{{ $p->nama_pengirim }}</strong><br>
                    <small>{{ $p->nominal_transfer }}</small><br>
                    @if($p->bukti_transfer)
                        <a href="{{ asset('storage/' . $p->bukti_transfer) }}" target="_blank" class="btn btn-sm btn-outline-primary mt-1" style="padding: 2px 6px; font-size: 11px;">
                            <i class="fas fa-image"></i> Lihat Bukti
                        </a>
                    @else
                        <span class="text-danger">Tidak ada</span>
                    @endif
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-info text-white" title="Detail"><i class="fas fa-eye"></i></a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" class="text-center py-4 text-muted">Belum ada data pendaftar PMB.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
    </div>
  </section>
@endsection

@push('scripts')
<script>
// Kartu statistik
const st=[['Total pendapatan','Rp 15,3 jt','◉'],['Leads aktif','3.920','☺'],['Peluang terbuka','1.284','◈'],['Tingkat konversi','24,8%','⇧']];
document.querySelector('#stats').innerHTML=st.map(s=>`<div class="card stat"><div class="r"><div class="av">${s[2]}</div><div><strong>${s[1]}</strong><small>${s[0]}</small></div></div><span class="up">▲ 12,9%</span> <small>dari bulan lalu</small></div>`).join('');
</script>
@endpush