
@extends('layouts.app')

@section('title', 'SD Medina Islamic School Cianjur')

@section('content')
    <div class="page-loader" id="pageLoader">
      <div class="loader-logo">
        <img
          src="img/logomedina.png"
          class="loader-logo-loading"
          alt="Medina-logo"
        />
      </div>
    </div>

    <!-- ================= HERO ================= -->

    <section class="hero">
      <!-- BACKGROUND SLIDESHOW -->
      <div class="hero-slideshow">
        <div
          class="hero-slide active"
          style="background-image: url(img/bg-8.webp)"
        ></div>

        <div
          class="hero-slide"
          style="background-image: url(img/bg-1.avif)"
        ></div>

        <div
          class="hero-slide"
          style="background-image: url(img/bg-5.avif)"
        ></div>

        <div
          class="hero-slide"
          style="background-image: url(img/bg-6.avif)"
        ></div>
      </div>

      <!-- FADE EDGE -->
      <div class="hero-fade"></div>

      <!-- HERO CONTENT -->
      <div class="container hero-grid">
        <div class="hero-content">
          <h1 data-aos="fade-in">
            Sekolah Dasar Medina
            <span style="color: #1f3982">Islamic School.</span>
          </h1>

          <p data-aos="fade-in" data-aos-delay="200">
            Membentuk <strong>Generasi Qur'ani</strong> yang
            <strong>Cerdas,</strong> dan <strong>Berkarakter Islami</strong>
          </p>

          <div class="hero-buttons" data-aos="fade-in" data-aos-delay="400">
            <a href="#" class="btn btn-primary btn-large shadow"
              ><i class="fa-solid fa-file-pen" style="margin-right: 5px"></i>
              Daftar Sekolah
            </a>
            <a href="#" class="btn btn-whatsapp btn-large shadow">
              <i class="fa-brands fa-whatsapp" style="margin-right: 5px"></i
              >Konsultasi Via Whatsapp</a
            >
          </div>
        </div>

        <!-- DASHBOARD -->

        <div class="dashboard-wrapper">
          <!-- dashboard Anda tetap di sini -->
        </div>
      </div>
    </section>

    <!-- ================= STATISTICS ================= -->
    <section class="statistics">
      <div class="statistics-container">
        <!-- STAT 1 -->
        <div class="statistic-item">
          <div class="statistic-icon">
            <i class="fa-solid fa-school"></i>
          </div>

          <div class="statistic-content">
            <strong class="counter" data-target="150">0</strong>
            <span>Berkualitas</span>
          </div>
        </div>

        <!-- STAT 2 -->
        <div class="statistic-item">
          <div class="statistic-icon">
            <i class="fa-solid fa-user-graduate"></i>
          </div>

          <div class="statistic-content">
            <strong class="counter" data-target="15">0</strong>
            <span>Terpercaya</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= PROBLEM ================= -->

    <section class="problem section">
      <div class="container">
        <h2>
          Sekolah Dasar<br />
          <span>Medina Islamic School.</span>
        </h2>

        <div class="video-container">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube-nocookie.com/embed/ROk_pvDVR4E?start=44"
            title="YouTube video player"
            frameborder="0"
            allow="
              accelerometer;
              autoplay;
              clipboard-write;
              encrypted-media;
              gyroscope;
              picture-in-picture;
              web-share;
            "
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div>

        <!-- <div class="problem-grid">
          <div class="problem-card">
            <div class="number">01</div>
            <h3>Data tersebar</h3>
            <p>
              Informasi sekolah berada di banyak file, perangkat, dan aplikasi
              yang berbeda.
            </p>
          </div>

          <div class="problem-card">
            <div class="number">02</div>
            <h3>Pencatatan berulang</h3>
            <p>
              Data yang sama harus dimasukkan berkali-kali untuk kebutuhan
              administrasi.
            </p>
          </div>

          <div class="problem-card">
            <div class="number">03</div>
            <h3>Informasi terlambat</h3>
            <p>
              Guru, orang tua, dan pimpinan harus menunggu rekap sebelum
              mendapatkan informasi.
            </p>
          </div>

          <div class="problem-card">
            <div class="number">04</div>
            <h3>Keputusan tidak optimal</h3>
            <p>
              Sulit melihat kondisi sekolah secara utuh ketika data tidak saling
              terhubung.
            </p>
          </div>
        </div> -->
      </div>
    </section>

    <!-- ================= SOLUTION ================= -->

    <!-- <section id="solusi" class="solution section">
      <div class="container solution-grid">
        <div class="solution-content">
          <div class="section-label">SATU SUMBER DATA</div>

          <h2>
            Bukan sekadar aplikasi.
            <span>Ini ekosistem sekolah Anda.</span>
          </h2>

          <p>
            Satu data dapat digunakan untuk berbagai kebutuhan. Data siswa,
            guru, akademik, presensi, pembayaran, dan komunikasi saling
            terhubung.
          </p>

          <a href="#" class="text-link"> Pelajari selengkapnya → </a>
        </div>

        <div class="connection-diagram">
          <div class="circle center">EduCore</div>

          <div class="circle item item-1">Siswa</div>

          <div class="circle item item-2">Guru</div>

          <div class="circle item item-3">Akademik</div>

          <div class="circle item item-4">Keuangan</div>

          <div class="circle item item-5">Orang Tua</div>

          <div class="circle item item-6">Presensi</div>
        </div>
      </div>
    </section> -->

    <!-- ================= VISI ================= -->

    <!-- <section class="showcase section">
      <div class="container showcase-grid">
        <div
          class="showcase-image visi-images"
          data-aos="fade-right"
          data-aos-duration="1000"
        >
          <div class="visi-image visi-image-1 mockup">
            <img src="img/bg-7.avif" alt="Visi Medina 1" />
          </div>

          <div class="visi-image visi-image-2 mockup">
            <img src="img/bg-4.jpeg" alt="Visi Medina 2" />
          </div>
        </div>

        <div
          class="showcase-content"
          data-aos="fade-left"
          data-aos-duration="1000"
        >
          <h2>
            <span style="color: #1f3982">Visi</span>
          </h2>
          <ul class="modern-list" style="margin-top: 10px">
            <li>
              <strong>Terdepan</strong> : Menjadi pelopor dan model inovasi
              pendidikan, dakwah dan sosial secara Nasional dan Internasional
              yang sejalan dengan nilai-nilai Qur’ani, Pancasila dan UUD 1945
              dalam bingkai NKRI.
            </li>
            <li>
              <strong>Membina</strong> : Mengerahkan dan mengarahkan segenap
              dana dan upaya yang konstruktif, produktif dan suistanable dalam
              mengangkat harkat dan martabat manusia.
            </li>
            <li>
              <strong>Berdaya Saing</strong> : Menjadi lembaga pendidikan,
              dakwah dan sosial yang unggul, kompetitif dan berdaya saing tinggi
              dalam menghadapi tantangan global.
            </li>
            <li>
              <strong>Berakhlak Mulia</strong> : Menjadi lembaga pendidikan,
              dakwah dan sosial yang berkarakter, berintegritas, beretika dan
              berakhlak mulia.
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="showcase section">
      <div class="container showcase-grid">
        <div
          class="showcase-content"
          data-aos="fade-right"
          data-aos-duration="1000"
        >
          <h2>
            <span style="color: #1f3982">Misi</span>
          </h2>
          <ul class="modern-list" style="margin-top: 10px">
            <li>
              <strong>Terdepan</strong> : Menjadi pelopor dan model inovasi
              pendidikan, dakwah dan sosial secara Nasional dan Internasional
              yang sejalan dengan nilai-nilai Qur’ani, Pancasila dan UUD 1945
              dalam bingkai NKRI.
            </li>
            <li>
              <strong>Membina</strong> : Mengerahkan dan mengarahkan segenap
              dana dan upaya yang konstruktif, produktif dan suistanable dalam
              mengangkat harkat dan martabat manusia.
            </li>
            <li>
              <strong>Berdaya Saing</strong> : Menjadi lembaga pendidikan,
              dakwah dan sosial yang unggul, kompetitif dan berdaya saing tinggi
              dalam menghadapi tantangan global.
            </li>
            <li>
              <strong>Berakhlak Mulia</strong> : Menjadi lembaga pendidikan,
              dakwah dan sosial yang berkarakter, berintegritas, beretika dan
              berakhlak mulia.
            </li>
          </ul>
        </div>
        <div class="visi-images" data-aos="fade-left" data-aos-duration="1000">
          <div class="visi-image visi-image-1 mockup">
            <img src="img/bg-2.webp" alt="Visi Medina" />
          </div>

          <div class="visi-image visi-image-2 mockup">
            <img src="img/renang.avif" alt="Visi Medina" />
          </div>
        </div>
      </div>
    </section> -->

    <!-- ================= FEATURE SHOWCASE ================= -->

    <section class="showcase section">
      <div class="container showcase-grid">
        <div class="showcase-image" data-aos="fade-up" data-aos-duration="1000">
          <div class="mockup">
            <img
              src="img/bg-4.jpeg"
              class="mockup-image"
              alt="Dashboard Sekolah"
            />
          </div>
        </div>

        <div
          class="showcase-content"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          <h2>
            Mengapa
            <span style="color: #1f3982">Memilih Kami?</span>
          </h2>

          <p>
            SD Medina Islamic School Cianjur hadir sebagai lembaga pendidikan
            Islam yang berkomitmen mencetak generasi beriman, berilmu, dan
            berakhlak mulia. Dengan mengintegrasikan kurikulum nasional dan
            kurikulum keagamaan, kami berupaya menyeimbangkan kecerdasan
            intelektual, spiritual, dan emosional peserta didik
          </p>
        </div>
      </div>
    </section>

    <!-- ================= AUDIENCE / GALERI ================= -->
    <section id="lembaga" class="audience section">
      <div class="container">
        <div class="section-heading">
          <h2>
            Galeri Kegiatan
            <span>Siswa dan Sekolah</span>
          </h2>
        </div>

        <section
          class="gallery-section"
          id="galeri"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          <div class="gallery-grid">
            @forelse($galleries as $index => $item)
            <!-- Card Galeri Dinamis dari Database -->
            <div class="gallery-item {{ $index == 0 ? 'gallery-large' : '' }}">
              <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" />
              <div class="gallery-overlay">
                <div>
                  <span>{{ $item->category }}</span>
                  <h3>{{ $item->title }}</h3>
                </div>
              </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; color: #6b7794; padding: 40px 0;">
              <p>Belum ada dokumentasi galeri yang diunggah.</p>
            </div>
            @endforelse
          </div>
        </section>
      </div>
    </section>

    <!-- ================= CTA ================= -->

    <section class="cta">
      <div class="container">
        <div class="cta-content" data-aos="fade-up" data-aos-duration="100">
          <h2 class="text-shadow">Full Day School</h2>
        </div>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          Konsep Full Day School dari pukul 07.30–15.30, Senin hingga Jumat.
          Siswa belajar ilmu umum dan agama secara seimbang, dibiasakan dzikir
          pagi, shalat dhuha, dan shalat berjamaah. Kegiatan diselingi snack
          time, makan siang, dan qoilullah, serta penguatan karakter melalui
          adab, kebersihan, tahfidz, bahasa Arab, dan bahasa Inggris. Semua
          aktivitas berlangsung dalam suasana islami dan menyenangkan.
        </p>
      </div>
      <section class="image-cards">
        <div class="container">
          <div class="image-card-grid">
            <!-- CARD 1 -->
            <div
              class="image-card shadow"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <div class="image-card-image">
                <img src="img/bg-2.webp" alt="Manajemen sekolah" />

                <div class="image-card-overlay"></div>

                <span class="image-card-number">
                  <i class="fa-solid fa-school"></i>
                </span>
              </div>

              <div class="image-card-content">
                <h3>Intrakurikuler</h3>

                <p>
                  Merupakan inti dari proses pembelajaran yang menggabungkan
                  <strong>
                    kurikulum nasional dan strong kurikulum Medina secara
                    terpadu.</strong
                  >
                  Melalui pembelajaran yang mendalam dan kontekstual, peserta
                  didik tidak hanya memperoleh pengetahuan akademik, tetapi juga
                  memahami nilai-nilai kehidupan dan keislaman. Penguatan
                  <strong
                    >Bahasa Arab, Bahasa Inggris, literasi, numerasi, dan
                    sains</strong
                  >
                  menjadi bekal penting dalam membentuk generasi Qur’ani yang
                  cerdas dan berdaya saing global.
                </p>
              </div>
            </div>

            <!-- CARD 2 -->
            <div
              class="image-card shadow"
              data-aos="fade-up"
              data-aos-duration="1500"
            >
              <div class="image-card-image">
                <img src="img/bg-1.avif" alt="Pembelajaran" />

                <div class="image-card-overlay"></div>

                <span class="image-card-number">
                  <i class="fa-solid fa-person-hiking"></i>
                </span>
              </div>

              <div class="image-card-content">
                <h3>Kokurikuler</h3>

                <p>
                  Dirancang sebagai jembatan antara kegiatan akademik dan
                  pengalaman nyata di lapangan. Melalui kegiatan seperti
                  <strong
                    >outing class, proyek sosial dan keagamaan, serta pelatihan
                    kecakapan hidup (life skills)</strong
                  >, peserta didik belajar menerapkan ilmu secara langsung dalam
                  kehidupan sehari-hari. Bertujuan menumbuhkan kemandirian,
                  tanggung jawab, kerja sama, dan kepedulian sosial, sekaligus
                  memperkaya pengalaman belajar mereka dengan pendekatan yang
                  aktif, kreatif, dan menyenangkan.
                </p>
              </div>
            </div>

            <!-- CARD 3 -->
            <div
              class="image-card shadow"
              data-aos="fade-up"
              data-aos-duration="2000"
            >
              <div class="image-card-image">
                <img src="img/panah.avif" alt="Laporan sekolah" />

                <div class="image-card-overlay"></div>

                <span class="image-card-number">
                  <i class="fa-solid fa-person-swimming"></i>
                </span>
              </div>

              <div class="image-card-content">
                <h3>Ekstrakurikuler</h3>

                <p>
                  Menjadi wadah pengembangan minat, bakat, dan karakter peserta
                  didik, melalui kegiatan seperti
                  <strong>pramuka, memanah, berkuda, dan berenang</strong>,
                  siswa dibimbing untuk menjadi pribadi yang disiplin, tangguh,
                  dan sportif. Kegiatan ini juga mengajarkan nilai-nilai
                  kepemimpinan dan kebersamaan, sesuai dengan tuntunan
                  Rasulullah ﷺ yang menganjurkan umatnya untuk kuat secara fisik
                  dan mental. Menjadi sarana pembentukan karakter yang cerdas,
                  berani, berakhlak mulia, dan mencintai sunnah Nabi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>

    <!-- ================= DEWAN GURU / PROFIL GURU ================= -->
    <section class="section" style="background: #f8faf8">
      <div class="container">
        <div
          style="text-align: center; max-width: 700px; margin: 0 auto 40px"
          data-aos="fade-up"
        >
          <div class="section-label">PENGAJAR PROFESIONAL</div>
          <h2>
            Pendidik Berdedikasi <span style="color: #1f3982">SD Medina.</span>
          </h2>
          <p style="color: #65736b; margin-top: 10px">
            Dibimbing oleh guru-guru berkompeten di bidang akademik dan
            pembinaan akhlak mulia.
          </p>
        </div>

        <!-- Tambahkan CSS grid agar card berderet rapi dan tidak memanjang penuh -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
          @forelse($teachers as $teacher)
          <!-- Card Guru Dinamis -->
          <div style="background: #fff; padding: 30px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); text-align: center; transition: transform 0.3s ease;" data-aos="fade-up" data-aos-delay="100">
            <div style="width: 65px; height: 65px; background: #f0f4ff; color: #1f3982; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 26px; margin: 0 auto 20px auto;">
              <!-- Menampilkan Icon dari input admin, dengan fallback ke fa-user-tie jika kosong -->
              <i class="fa-solid {{ $teacher->icon ?? 'fa-user-tie' }}"></i>
            </div>
            <h3 style="font-size: 18px; font-weight: 700; color: #14214a; margin-bottom: 8px;">{{ $teacher->name }}</h3>
            <span style="font-size: 13px; font-weight: 600; color: #6b7794; text-transform: uppercase; letter-spacing: 0.5px;">{{ $teacher->role }}</span>
          </div>
          @empty
          <div style="grid-column: 1 / -1; text-align: center; color: #6b7794; padding: 40px 0;">
            <p>Belum ada data profil guru yang ditampilkan.</p>
          </div>
          @endforelse
        </div>
      </div>
    </section>

    <!-- ================= BERITA & INFORMASI TERKINI ================= -->
    <section class="section news-section" style="background: white">
      <div class="container">
        <div
          style="text-align: center; max-width: 700px; margin: 0 auto 50px"
          data-aos="fade-up"
        >
          <div class="section-label">INFORMASI TERKINI</div>
          <h2>
            Berita & Kegiatan <span style="color: #1f3982">SD Medina.</span>
          </h2>
          <p style="color: #65736b; margin-top: 10px">
            Ikuti berbagai rangkaian aktivitas, prestasi, dan pengumuman terbaru
            seputar sekolah kami.
          </p>
        </div>

        <div class="news-grid">
          @forelse($news as $item)
          <!-- Card Berita Dinamis dari Database -->
          <div class="news-card shadow" data-aos="fade-up">
            <div class="news-img-wrapper">
              <span class="news-badge">{{ $item->category }}</span>
              @if($item->image)
                  <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" style="width: 100%; height: 200px; object-fit: cover;" />
              @else
                  <img src="{{ asset('img/bg-1.avif') }}" alt="Default Image" style="width: 100%; height: 200px; object-fit: cover;" />
              @endif
            </div>
            <div class="news-content">
              <div class="news-date">
                <i class="far fa-calendar-alt"></i> {{ $item->created_at->format('d M Y') }}
              </div>
              <h3 class="news-title">
                {{ $item->title }}
              </h3>
              <p class="news-desc">
                {{ Str::limit($item->content, 90, '...') }}
              </p>
              <a href="{{ route('news.show', $item->id) }}" class="news-link">
  Selengkapnya <i class="fas fa-arrow-right"></i>
</a>
            </div>
          </div>
          @empty
          <div style="grid-column: 1 / -1; text-align: center; color: #6b7794; padding: 40px 0;">
            <p>Belum ada berita atau kegiatan yang diunggah.</p>
          </div>
          @endforelse
        </div>
      </div>
    </section>

    <!-- ================= FAQ ================= -->

    <section id="faq" class="faq section">
      <div class="container">
        <div style="margin: 0 0 15px 0">
          <h2>
            Our <br />
            <span>Location.</span>
          </h2>
        </div>
        <div class="map-container mockup">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28679.3106872965!2d107.09227217679991!3d-6.835472401450622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68532f832c70df%3A0xb9552179cf9d844c!2sSD%20Medina%20Islamic%20School%201!5e1!3m2!1sid!2sid!4v1787798993772!5m2!1sid!2sid"
            width="100%"
            height="450"
            style="border: 0; border-radius: 16px"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin"
            class="map-iframe"
          ></iframe>
        </div>
      </div>
    </section>

    <section class="social-section">
      <div class="container social-content">
        <h2>
          Follow Our
          <span>Social Media.</span>
        </h2>

        <p>
          Ikuti berbagai aktivitas dan informasi terbaru Medina Islamic School
          melalui sosial media kami.
        </p>

        <div class="social-list">
          <!-- Instagram -->
          <a
            href="#"
            class="social-item instagram"
            data-name="@medinaschool.id"
            aria-label="Instagram"
          >
            <i class="fa-brands fa-instagram"></i>
          </a>

          <!-- Facebook -->
          <a
            href="#"
            class="social-item facebook"
            data-name="Medina Islamic School"
            aria-label="Facebook"
          >
            <i class="fa-brands fa-facebook-f"></i>
          </a>

          <!-- TikTok -->
          <a
            href="#"
            class="social-item tiktok"
            data-name="@medinaislamicschool"
            aria-label="TikTok"
          >
            <i class="fa-brands fa-tiktok"></i>
          </a>

          <!-- YouTube -->
          <a
            href="#"
            class="social-item youtube"
            data-name="Medina Islamic School"
            aria-label="YouTube"
          >
            <i class="fa-brands fa-youtube"></i>
          </a>

          <!-- WhatsApp -->
          <a
            href="#"
            class="social-item whatsapp"
            data-name="Medina Islamic School"
            aria-label="WhatsApp"
          >
            <i class="fa-brands fa-whatsapp"></i>
          </a>

          <!-- Telegram -->
          <a
            href="#"
            class="social-item telegram"
            data-name="@medinaislamicschool"
            aria-label="Telegram"
          >
            <i class="fa-brands fa-telegram"></i>
          </a>
        </div>
      </div>
    </section>
