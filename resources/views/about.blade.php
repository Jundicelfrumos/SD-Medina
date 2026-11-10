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

    <!-- ================= PAGE HEADER / HERO TENTANG ================= -->
    <section
      class="hero"
      style="
        min-height: 500px;
        background-image:
          linear-gradient(
            to bottom,
            rgba(255, 255, 255, 1) 0%,
            rgba(255, 255, 255, 0.134) 25%,
            rgba(255, 255, 255, 0.467) 75%,
            rgba(255, 255, 255, 1) 100%
          ),
          url(img/bg-6.avif);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        transform: scale(1.08);
        padding: 80px 0;
      "
    >
      <div
        class="container hero-grid"
        style="grid-template-columns: 1fr; text-align: center"
      >
        <div class="hero-content" style="margin: 0 auto">
          <h1 data-aos="fade-in" style="font-size: (32px, 4vw, 52px)">
            Mengenal Lebih Dekat
            <span style="color: #1f3982">SD Medina Islamic School.</span>
          </h1>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 1 : TENTANG KAMI & GAMBAR ================= -->
    <section class="showcase section" style="background: white">
      <div class="container showcase-grid">
        <div
          class="showcase-content"
          data-aos="fade-right"
          data-aos-duration="1000"
        >
          <div class="section-label">PROFIL UTAMA</div>
          <p
            style="
              margin-top: 20px;
              color: #65736b;
              font-size: 16px;
              line-height: 1.8;
            "
          >
            SD Medina Islamic School hadir sebagai lembaga pendidikan Islam yang
            mengintegrasikan kurikulum nasional dan kurikulum keagamaan. Kami
            berkomitmen mencetak generasi Qur’ani yang cerdas, berkarakter, dan
            berakhlak mulia. Pembelajaran di sekolah kami menyeimbangkan aspek
            spiritual, intelektual, dan keterampilan hidup, dengan lingkungan
            yang nyaman, aman, dan strategis di dekat pusat kota.
          </p>
        </div>

        <div
          class="showcase-image"
          data-aos="fade-left"
          data-aos-duration="1000"
        >
          <div class="mockup shadow">
            <img
              src="img/bg-8.avif"
              class="mockup-image"
              alt="SD Medina Islamic School"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 2 : LANDASAN DAN NILAI PENDIDIKAN ================= -->
    <section class="showcase section" style="background: #f8faf8">
      <div
        class="container showcase-grid"
        style="grid-template-columns: 0.9fr 1.1fr"
      >
        <div class="visi-images" data-aos="fade-right" data-aos-duration="1000">
          <div class="visi-image visi-image-1 mockup">
            <img src="img/bg-1.avif" alt="Landasan Pendidikan Medina 1" />
          </div>
          <div class="visi-image visi-image-2 mockup">
            <img src="img/bg-5.avif" alt="Landasan Pendidikan Medina 2" />
          </div>
        </div>

        <div
          class="showcase-content"
          data-aos="fade-left"
          data-aos-duration="1000"
        >
          <div class="section-label">FILOSOFI & PRINSIP</div>
          <h2>
            Landasan dan
            <span style="color: #1f3982">Nilai Pendidikan.</span>
          </h2>
          <p
            style="
              margin-top: 20px;
              color: #65736b;
              font-size: 15px;
              line-height: 1.8;
            "
          >
            Pendidikan di SD Medina Islamic School berlandaskan pada Al-Qur’an
            dan Sunnah Rasulullah ﷺ. Kami meyakini bahwa ilmu yang bermanfaat
            lahir dari hati yang ikhlas dan adab yang baik. Prinsip kami adalah
            <strong
              >“Mendidik dengan Hati, Membimbing dengan Ilmu, dan Menginspirasi
              untuk Masa Depan.”</strong
            >
          </p>
          <p
            style="
              margin-top: 15px;
              color: #65736b;
              font-size: 15px;
              line-height: 1.8;
            "
          >
            Kami menanamkan nilai iman, disiplin, tanggung jawab, dan
            kepedulian, agar peserta didik tumbuh menjadi pribadi yang beradab
            serta bermanfaat bagi umat dan bangsa.
          </p>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 3 : SISTEM & LINGKUNGAN BELAJAR ================= -->
    <section class="showcase section" style="background: white">
      <div class="container showcase-grid">
        <div
          class="showcase-content"
          data-aos="fade-right"
          data-aos-duration="1000"
        >
          <div class="section-label">KENYAMANAN & FASILITAS</div>
          <h2>
            Sistem dan
            <span style="color: #1f3982">Lingkungan Belajar.</span>
          </h2>
          <p
            style="
              margin-top: 20px;
              color: #65736b;
              font-size: 16px;
              line-height: 1.8;
            "
          >
            Dengan sistem <em>full day school</em>, proses belajar berlangsung
            dalam suasana yang nyaman, aman, dan menyenangkan. Lingkungan
            sekolah yang hijau dan kondusif mendukung perkembangan spiritual,
            sosial, dan akademik peserta didik. Kami berupaya menciptakan
            pengalaman belajar yang tidak hanya mengasah kecerdasan, tetapi juga
            menumbuhkan kebahagiaan dalam belajar.
          </p>
        </div>

        <div
          class="showcase-image"
          data-aos="fade-left"
          data-aos-duration="1000"
        >
          <div class="mockup shadow">
            <img
              src="img/bg-2.webp"
              class="mockup-image"
              alt="Lingkungan Belajar Medina"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 4 : HARAPAN DAN KOMITMEN ================= -->
    <section class="cta" style="padding: 90px 0">
      <div class="container">
        <div class="cta-content" data-aos="fade-up" data-aos-duration="100">
          <div class="section-label" style="color: #9bc4a9">
            MASA DEPAN GEMILANG
          </div>
          <h2 class="text-shadow">Harapan dan Komitmen.</h2>
        </div>
        <p
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-delay="200"
          style="
            max-width: 800px;
            margin: 25px auto 0;
            font-size: 16px;
            line-height: 1.8;
            text-align: center;
          "
        >
          Kami berkomitmen melahirkan generasi Qur’ani yang unggul dalam iman,
          ilmu, dan amal. Dengan sinergi antara guru, orang tua, dan lingkungan,
          kami terus berupaya menjadi wadah pendidikan yang menanamkan nilai
          Al-Qur’an, membangun kecerdasan, dan menyiapkan masa depan yang
          gemilang bagi setiap peserta didik.
        </p>
        <div
          style="margin-top: 35px"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-delay="400"
        >
          <a href="index.html#lembaga" class="btn btn-white btn-large shadow"
            >Lihat Program Kami</a
          >
        </div>
      </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="footer">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-brand">
            <a href="index.html" class="logo">
              <img src="img/MEDINA-Photoroom.png" class="logo-icon" alt="" />
            </a>
            <p>
              Sistem informasi sekolah yang menghubungkan seluruh kebutuhan
              pendidikan dalam satu ekosistem.
            </p>
          </div>

          <div>
            <h4>Produk</h4>
            <a href="#">Data Sekolah</a>
            <a href="#">Akademik</a>
            <a href="#">Presensi</a>
            <a href="#">Keuangan</a>
            <a href="#">Analytics</a>
          </div>

          <div>
            <h4>Perusahaan</h4>
            <a href="about.html">Tentang Kami</a>
            <a href="#">Kontak</a>
            <a href="#">Karier</a>
            <a href="#">Blog</a>
          </div>

          <div>
            <h4>Bantuan</h4>
            <a href="#">Pusat Bantuan</a>
            <a href="#">Dokumentasi</a>
            <a href="#">FAQ</a>
            <a href="#">Status Sistem</a>
          </div>
        </div>

        <div class="footer-bottom">
          <span> © 2026 EduCore. All rights reserved. </span>
          <div>
            <a href="#">Privasi</a>
            <a href="#">Syarat & Ketentuan</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Floating WhatsApp -->
    <a
      href="https://wa.me/6281234567890"
      class="whatsapp-float"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Chat WhatsApp"
    >
      <i class="fab fa-whatsapp"></i>
    </a>
  @endsection
