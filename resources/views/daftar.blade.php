@extends('layouts.app')

@section('title', 'SD Medina Islamic School Cianjur')

@section('content')
    <!-- ================= LOADING SCREEN ================= -->
    <div class="page-loader" id="pageLoader">
      <div class="loader-logo">
        <img
          src="img/logomedina.png"
          class="loader-logo-loading"
          alt="Medina-logo"
        />
      </div>
    </div>

    <!-- ================= HERO DAFTAR ================= -->
    <section class="hero" style="min-height: 500px; padding: 80px 0">
      <div
        class="container hero-grid"
        style="grid-template-columns: 1fr; text-align: center"
      >
        <div class="hero-content" style="margin: 0 auto">
          <h1 data-aos="fade-in" style="font-size: clamp(36px, 4vw, 55px)">
            Penerimaan Peserta Didik Baru
            <span style="color: #1f3982">Tahun Ajaran 2026/2027.</span>
          </h1>
          <p
            data-aos="fade-in"
            data-aos-delay="200"
            style="margin: 20px auto 0; max-width: 750px; color: #65736b"
          >
            Assalamu’alaikum Ayah/Bunda. Selamat datang di halaman pendaftaran
            SD Medina. Kami dengan hangat menyambut keluarga baru yang ingin
            bergabung dalam lingkungan belajar penuh kasih, suportif, dan
            berlandaskan nilai-nilai Islam.
          </p>
        </div>
      </div>
    </section>

    <!-- ================= ALUR PENDAFTARAN (2X2 BESAR & ELEGAN) ================= -->
    <section class="section" style="background: #f8faf8">
      <div class="container">
        <div
          style="text-align: center; max-width: 700px; margin: 0 auto"
          data-aos="fade-up"
        >
          <div class="section-label">LANGKAH MUDAH</div>
          <h2>Alur <span style="color: #1f3982">Pendaftaran.</span></h2>
          <p style="color: #65736b; margin-top: 10px">
            Proses pendaftaran peserta didik baru di SD Medina Islamic School.
          </p>
        </div>

        <div class="step-grid-2x2">
          <!-- Step 1 -->
          <div class="step-box" data-aos="fade-up" data-aos-delay="100">
            <div class="step-badge">1</div>
            <div>
              <div style="margin-bottom: 6px; color: #1f3982; font-size: 24px">
                <i class="fas fa-user-edit"></i>
              </div>
              <h4 style="color: #1f3982; margin-bottom: 8px">
                Mengisi Formulir Pendaftaran
              </h4>
              <p style="color: #65736b; font-size: 14px; line-height: 1.6">
                Mengisi formulir secara online melalui website resmi atau datang
                langsung ke kantor pendaftaran SD Medina Islamic School.
              </p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="step-box" data-aos="fade-up" data-aos-delay="200">
            <div class="step-badge">2</div>
            <div>
              <div style="margin-bottom: 6px; color: #1f3982; font-size: 24px">
                <i class="fas fa-wallet"></i>
              </div>
              <h4 style="color: #1f3982; margin-bottom: 8px">
                Pembayaran Biaya Pendaftaran
              </h4>
              <p style="color: #65736b; font-size: 14px; line-height: 1.6">
                Melakukan transfer biaya pendaftaran melalui rekening bank resmi
                SD Medina Islamic School, lalu lakukan konfirmasi ke nomor
                layanan kami.
              </p>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="step-box" data-aos="fade-up" data-aos-delay="300">
            <div class="step-badge">3</div>
            <div>
              <div style="margin-bottom: 6px; color: #1f3982; font-size: 24px">
                <i class="fas fa-clipboard-check"></i>
              </div>
              <h4 style="color: #1f3982; margin-bottom: 8px">
                Mengikuti Observasi
              </h4>
              <p style="color: #65736b; font-size: 14px; line-height: 1.6">
                Observasi anak untuk mengetahui kesiapan, karakter, dan
                kecerdasan anak agar dapat menyesuaikan metode pembelajaran
                terbaik.
              </p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="step-box" data-aos="fade-up" data-aos-delay="400">
            <div class="step-badge">4</div>
            <div>
              <div style="margin-bottom: 6px; color: #1f3982; font-size: 24px">
                <i class="fas fa-award"></i>
              </div>
              <h4 style="color: #1f3982; margin-bottom: 8px">
                Pengumuman Penerimaan
              </h4>
              <p style="color: #65736b; font-size: 14px; line-height: 1.6">
                Setelah pengumuman kelolosan, siswa baru dapat menyelesaikan
                daftar ulang dan bersiap memulai perjalanan belajar menyenangkan
                bersama kami.
              </p>
            </div>
          </div>
        </div>

        <div style="text-align: center; margin-top: 40px" data-aos="fade-up">
          <p style="font-weight: 600; color: #1f3982; font-size: 18px">
            <i class="fas fa-phone-alt" style="margin-right: 8px"></i> Informasi
            Hubungi:
            <a
              href="https://wa.me/6287820088060"
              style="color: #1f3982; text-decoration: underline"
              >0878 2008 8060</a
            >
          </p>
        </div>
      </div>
    </section>

    <!-- ================= RINCIAN BIAYA (1 BARIS 2 KOTAK, SHADOW & INTERAKTIF) ================= -->
    <section class="section" style="background: white" id="harga">
      <div class="container">
        <div style="text-align: center; margin-bottom: 40px" data-aos="fade-up">
          <div class="section-label">TRANSPARANSI BIAYA</div>
          <h2>
            Rincian <span style="color: #1f3982">Biaya Masuk & Tahunan.</span>
          </h2>
          <p style="color: #65736b; margin-top: 10px">
            Estimasi biaya pendidikan transparan di SD Medina Islamic School.
          </p>
        </div>

        <div class="finance-grid" data-aos="fade-up" data-aos-delay="100">
          <!-- Card Biaya Masuk -->
          <div class="interactive-price-card">
            <div class="price-header-box">BIAYA MASUK (GELOMBANG PERTAMA)</div>
            <div class="price-item-row">
              <span>Dana Pengembangan</span>
              <span style="font-weight: 600">Rp 5.000.000</span>
            </div>
            <div class="price-item-row">
              <span>Buku Siswa</span>
              <span style="font-weight: 600">Rp 750.000</span>
            </div>
            <div class="price-item-row">
              <span>Seragam</span>
              <span style="font-weight: 600">Rp 800.000</span>
            </div>
            <div class="price-item-row">
              <span>SPP 1 Tahun Pertama</span>
              <span style="font-weight: 600">Rp 1.800.000</span>
            </div>
            <div class="price-item-row">
              <span>Surat Perjanjian</span>
              <span style="font-weight: 600">Rp 350.000</span>
            </div>
            <div class="price-item-row total-row">
              <span>TOTAL UANG MASUK</span>
              <span>Rp 8.700.000</span>
            </div>
          </div>

          <!-- Card Biaya Tahunan -->
          <div class="interactive-price-card">
            <div class="price-header-box" style="background: #283e72">
              BIAYA TAHUNAN
            </div>
            <div class="price-item-row" style="padding-top: 25px">
              <span>KBM (Kegiatan Belajar Mengajar)</span>
              <span style="font-weight: 600">Rp 1.200.000</span>
            </div>
            <div class="price-item-row">
              <span>Buku Siswa</span>
              <span style="font-weight: 600">Rp 400.000</span>
            </div>
            <div class="price-item-row total-row" style="margin-top: 104px">
              <span>Keterangan</span>
              <span style="font-size: 13px; font-weight: 500"
                >Dibayar setiap tahun saat tahun ajaran baru</span
              >
            </div>
          </div>
        </div>

        <div
          style="text-align: center; margin-top: 40px"
          data-aos="fade-up"
          id="formulir"
        >
          <a
            href="/pmb"
            class="btn btn-primary btn-large shadow"
            style="padding: 15px 40px; font-size: 16px"
            >DAFTAR SEKARANG</a
          >
        </div>
      </div>
    </section>

    <!-- ================= TEMPAT TUMBUH & BELAJAR TERBAIK (CARD INTERAKTIF HOVER) ================= -->
    <section class="section" style="background: #f8faf8">
      <div class="container">
        <div
          style="text-align: center; max-width: 700px; margin: 0 auto 40px"
          data-aos="fade-up"
        >
          <div class="section-label">FASILITAS & LINGKUNGAN</div>
          <h2>
            Tempat Tumbuh dan
            <span style="color: #1f3982">Belajar Terbaik.</span>
          </h2>
        </div>

        <div class="facility-grid">
          <!-- Card 1: Ruang Terbuka Hijau -->
          <div class="facility-card" data-aos="fade-right">
            <div class="facility-img-wrapper">
              <img
                src="img/lingkungan2-BAkQamADT4JRyVN3.webp"
                alt="Ruang Terbuka Hijau"
              />
            </div>
            <h4 style="color: #1f3982; margin-bottom: 10px">
              Ruang Terbuka Hijau & Taman
            </h4>
            <p style="color: #65736b; font-size: 14px; line-height: 1.6">
              Suasana sekolah yang sejuk, asri, dan jauh dari kebisingan.
              Dilengkapi taman bunga yang luas, serta pepohonan rimbun yang
              rindang untuk anak-anak bermain, bercengkerama, dan belajar di
              alam terbuka dengan nyaman.
            </p>
          </div>

          <!-- Card 2: Gedung Sekolah / Masjid -->
          <div class="facility-card" data-aos="fade-left">
            <div class="facility-img-wrapper">
              <img
                src="img/masjid1-ppe4XQtAZWMODp52.webp"
                alt="Gedung Sekolah & Masjid"
              />
            </div>
            <h4 style="color: #1f3982; margin-bottom: 10px">
              Gedung Sekolah & Masjid Representatif
            </h4>
            <p style="color: #65736b; font-size: 14px; line-height: 1.6">
              Fasilitas ruang kelas yang bersih, terang, dan nyaman untuk
              mendukung proses belajar mengajar harian. Ditunjang sarana
              olahraga dan masjid sekolah yang memadai untuk pembiasaan karakter
              Islami.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= CTA BANNER ================= -->
    <section class="cta" style="padding: 80px 0">
      <div class="container text-center">
        <h2 class="text-shadow" data-aos="fade-up">
          Tertarik Mendaftarkan Buah Hati Anda?
        </h2>
        <p
          data-aos="fade-up"
          data-aos-delay="200"
          style="margin: 20px auto; max-width: 600px; color: #fff"
        >
          Bergabunglah bersama kami di SD Medina Islamic School dan wujudkan
          masa depan gemilang berlandaskan Al-Qur'an.
        </p>
        <div data-aos="fade-up" data-aos-delay="400" style="margin-top: 30px">
          <a href="#" class="btn btn-white btn-large shadow">DAFTAR SEKARANG</a>
        </div>
      </div>
    </section>

@endsection
