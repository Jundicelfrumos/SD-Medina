<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Murid Baru 2027/2028 - SD Medina Islamic School</title>
    <link rel="icon" href="{{ asset('img/logomedina.png') }}" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background: #e1f0fd;
            color: #14214a;
            padding: 30px 15px;
            display: flex;
            justify-content: center;
        }
        .container {
            width: 100%;
            max-width: 720px;
        }
        /* Header Banner */
        .school-banner {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            text-align: center;
            border-top: 8px solid #1f3982;
        }
        .school-banner img {
            width: 100%;
            max-height: 140px;
            object-fit: contain;
            padding: 15px;
        }
        /* Timeline Steps */
        .timeline-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
            position: relative;
            background: #fff;
            padding: 15px 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .step-item {
            text-align: center;
            position: relative;
            z-index: 1;
            flex: 1;
        }
        .step-circle {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #d1dcfc;
            color: #1f3982;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 13px;
            margin: 0 auto 6px;
            transition: 0.3s;
        }
        .step-item.active .step-circle {
            background: #1f3982;
            color: #fff;
            box-shadow: 0 0 0 4px rgba(31,57,130,0.15);
        }
        .step-item.completed .step-circle {
            background: #10b981;
            color: #fff;
        }
        .step-text {
            font-size: 11px;
            font-weight: 600;
            color: #6b7794;
        }
        .step-item.active .step-text {
            color: #1f3982;
        }
        /* Card Form */
        .form-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            border-top: 6px solid #1f3982;
        }
        .form-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #1f3982;
        }
        .form-desc {
            font-size: 13px;
            color: #6b7794;
            margin-bottom: 20px;
            line-height: 1.5;
            border-bottom: 1px solid #edf2f7;
            padding-bottom: 15px;
        }
        .section-heading {
            font-size: 16px;
            font-weight: 700;
            background: #eef2f7;
            padding: 10px 14px;
            border-radius: 8px;
            margin-bottom: 20px;
            color: #1f3982;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 6px;
            color: #374151;
        }
        .form-control {
            width: 100%;
            padding: 11px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: 0.18s;
            background: #fafbfd;
        }
        .form-control:focus {
            border-color: #1f3982;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(31,57,130,0.1);
        }
        /* Buttons */
        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            border-top: 1px solid #edf2f7;
            padding-top: 20px;
        }
        .btn {
            padding: 10px 22px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            border: none;
            transition: 0.18s;
        }
        .btn-prev {
            background: #e5e7eb;
            color: #374151;
        }
        .btn-prev:hover { background: #d1d5db; }
        .btn-next, .btn-submit {
            background: #1f3982;
            color: #fff;
            margin-left: auto;
        }
        .btn-next:hover, .btn-submit:hover { background: #2a4aa5; }
        
        /* Payment Box */
        .payment-box {
            background: #f8fafc;
            border: 2px dashed #cbd5e1;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .bsi-logo {
            font-weight: 800;
            color: #008a90;
            font-size: 20px;
            margin-bottom: 8px;
        }
        .rekening-number {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #1f3982;
            margin: 6px 0;
        }
        .step-content { display: none; }
        .step-content.active { display: block; }
    </style>
</head>
<body>

    <div class="container">
        <!-- Banner Sekolah -->
        <div class="school-banner">
            <img src="{{ asset('img/MEDINA-Photoroom.png') }}" alt="SD Medina Islamic School">
        </div>

        <!-- Timeline / Indikator Tahapan -->
        <div class="timeline-steps">
            <div class="step-item active" id="indicator-1">
                <div class="step-circle">1</div>
                <div class="step-text">Siswa</div>
            </div>
            <div class="step-item" id="indicator-2">
                <div class="step-circle">2</div>
                <div class="step-text">Ayah</div>
            </div>
            <div class="step-item" id="indicator-3">
                <div class="step-circle">3</div>
                <div class="step-text">Ibu</div>
            </div>
            <div class="step-item" id="indicator-4">
                <div class="step-circle">4</div>
                <div class="step-text">Pembayaran</div>
            </div>
        </div>

        <!-- Form Pendaftaran -->
        <form id="pmbForm" action="{{ route('pmb.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- TAHAP 1: Identitas Calon Siswa -->
            <div class="form-card step-content active" id="step-1">
                <div class="form-title">Penerimaan Murid Baru 2027/2028</div>
                <div class="form-desc">
                    Harap perhatikan:<br>
                    1. Siapkan dokumen kependudukan sebelum mengisi formulir;<br>
                    2. Gunakan e-mail yang masih aktif, isi semua pertanyaan dengan jelas[cite: 6].
                </div>

                <div class="section-heading">Identitas Calon Siswa</div>

                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" class="form-control" required placeholder="nama@email.com">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap *</label>
                    <input type="text" name="nama_siswa" class="form-control" required placeholder="Nama lengkap calon siswa">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir *</label>
                    <input type="text" name="tempathlahir_siswa" class="form-control" required placeholder="Kota kelahiran">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir *</label>
                    <input type="date" name="tanggallahir_siswa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>NIK *</label>
                    <input type="text" name="nik_siswa" class="form-control" required placeholder="Nomor Induk Kependudukan">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin *</label>
                    <select name="gender" class="form-control" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status Pendaftaran *</label>
                    <select name="status_pendaftaran" class="form-control" required>
                        <option value="Siswa Baru">Siswa Baru</option>
                        <option value="Pindahan">Pindahan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" class="form-control" placeholder="Kosongkan jika baru masuk TK/PAUD">
                </div>
                <div class="form-group">
                    <label>NISN</label>
                    <input type="text" name="nisn" class="form-control" placeholder="Nomor Induk Siswa Nasional (opsional)">
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-next" onclick="nextStep(2)">Berikutnya &rarr;</button>
                </div>
            </div>

            <!-- TAHAP 2: Identitas Ayah -->
            <div class="form-card step-content" id="step-2">
                <div class="section-heading">Identitas Ayah[cite: 7]</div>

                <div class="form-group">
                    <label>Nama Ayah</label>
                    <input type="text" name="nama_ayah" class="form-control" placeholder="Nama lengkap ayah">
                </div>
                <div class="form-group">
                    <label>NIK Ayah</label>
                    <input type="text" name="nik_ayah" class="form-control" placeholder="NIK KTP Ayah">
                </div>
                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan / Instansi">
                </div>
                <div class="form-group">
                    <label>Nomor Telpon / WhatsApp</label>
                    <input type="text" name="telp_ayah" class="form-control" placeholder="08xxxxxxxxxx">
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-prev" onclick="prevStep(1)">&larr; Kembali</button>
                    <button type="button" class="btn btn-next" onclick="nextStep(3)">Berikutnya &rarr;</button>
                </div>
            </div>

            <!-- TAHAP 3: Identitas Ibu -->
            <div class="form-card step-content" id="step-3">
                <div class="section-heading">Identitas Ibu[cite: 8]</div>

                <div class="form-group">
                    <label>Nama Ibu</label>
                    <input type="text" name="nama_ibu" class="form-control" placeholder="Nama lengkap ibu">
                </div>
                <div class="form-group">
                    <label>NIK Ibu</label>
                    <input type="text" name="nik_ibu" class="form-control" placeholder="NIK KTP Ibu">
                </div>
                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan / IRT">
                </div>
                <div class="form-group">
                    <label>Nomor Telpon / WhatsApp</label>
                    <input type="text" name="telp_ibu" class="form-control" placeholder="08xxxxxxxxxx">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat domisili saat ini"></textarea>
                </div>
                <div class="form-group">
                    <label>Nomor Telpon Untuk Komunikasi</label>
                    <select name="kontak_utama" class="form-control">
                        <option value="Ayah">Nomor Ayah</option>
                        <option value="Ibu">Nomor Ibu</option>
                    </select>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn btn-prev" onclick="prevStep(2)">&larr; Kembali</button>
                    <button type="button" class="btn btn-next" onclick="nextStep(4)">Berikutnya (Pembayaran) &rarr;</button>
                </div>
            </div>

            <!-- TAHAP 4: Konfirmasi Pembayaran BSI -->
            <div class="form-card step-content" id="step-4">
                <div class="section-heading">Konfirmasi Pembayaran Pendaftaran</div>
                
                <div class="payment-box">
                    <div class="bsi-logo"><i class="fas fa-university"></i> Bank Syariah Indonesia (BSI)</div>
                    <p style="font-size: 13px; color: #6b7794; margin-bottom: 10px;">Silakan transfer biaya pendaftaran ke rekening berikut:</p>
                    <div class="rekening-number">7123-4567-89</div>
                    <p style="font-size: 12px; font-weight: 600; color: #374151;">a.n. SD Medina Islamic School</p>
                </div>

                <div class="form-group">
                    <label>Nama Pemilik Rekening Pengirim *</label>
                    <input type="text" name="nama_pengirim" class="form-control" required placeholder="Sesuai buku tabungan / m-banking">
                </div>
                <div class="form-group">
                    <label>Jumlah Transfer (Rp) *</label>
                    <input type="text" name="nominal_transfer" class="form-control" required value="Rp 250.000" readonly>
                </div>
                <div class="form-group">
                    <label>Upload Bukti Transfer / Struk *</label>
                    <input type="file" name="bukti_transfer" class="form-control" accept="image/*" required>
                </div>

                <div class="btn-group">
    <button type="button" class="btn btn-prev" onclick="prevStep(3)">&larr; Kembali</button>
    <!-- Hapus onclick="finishSubmission(event)" agar form bisa terkirim ke database -->
    <button type="submit" class="btn btn-submit">Kirim &amp; Selesaikan Pendaftaran</button>
</div>
@if ($errors->any())
    <div style="background: #ffeeef; border: 1px solid #f87171; color: #b91c1c; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
        <strong>Terjadi Kesalahan Pengisian:</strong>
        <ul style="margin-top: 5px; padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            </div>

        </form>
    </div>

    <script>
        let currentStep = 1;

        function updateTimeline(step) {
            for (let i = 1; i <= 4; i++) {
                let indicator = document.getElementById(`indicator-${i}`);
                indicator.classList.remove('active', 'completed');
                if (i < step) {
                    indicator.classList.add('completed');
                } else if (i === step) {
                    indicator.classList.add('active');
                }
            }
        }

        function nextStep(step) {
            // Validasi sederhana form aktif sebelum lanjut
            let activeCard = document.querySelector('.step-content.active');
            let inputs = activeCard.querySelectorAll('input[required], select[required]');
            let valid = true;
            inputs.forEach(input => {
                if (!input.value) {
                    input.style.borderColor = '#ef4444';
                    valid = false;
                } else {
                    input.style.borderColor = '#d1d5db';
                }
            });

            if (!valid) {
                alert('Mohon lengkapi data yang wajib diisi terlebih dahulu.');
                return;
            }

            document.querySelectorAll('.step-content').forEach(el => el.classList.remove('active'));
            document.getElementById(`step-${step}`).classList.add('active');
            currentStep = step;
            updateTimeline(currentStep);
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function prevStep(step) {
            document.querySelectorAll('.step-content').forEach(el => el.classList.remove('active'));
            document.getElementById(`step-${step}`).classList.add('active');
            currentStep = step;
            updateTimeline(currentStep);
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function finishSubmission(e) {
            e.preventDefault();
            alert('Pendaftaran berhasil! Terima kasih telah mendaftar di SD Medina Islamic School. Data dan bukti pembayaran Anda telah kami terima.');
            window.location.href = "{{ url('/') }}";
        }
    </script>
</body>
</html>