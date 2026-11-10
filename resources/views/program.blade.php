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

    <!-- ================= HERO PROGRAM ================= -->
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
          <h1 data-aos="fade-in">
            Kurikulum & Kegiatan Unggulan
            <span style="color: #1f3982">SD Medina Islamic School.</span>
          </h1>
        </div>
      </div>
    </section>

    <!-- ================= INTRAKURIKULER ================= -->
    <section class="showcase section" style="background: white">
      <div class="container showcase-grid">
        <div
          class="showcase-content"
          data-aos="fade-right"
          data-aos-duration="1000"
        >
          <div class="section-label">AKADEMIK UTAMA</div>
          <h2>
            Intra
            <span style="color: #1f3982">kurikuler.</span>
          </h2>
          <p
            style="
              margin-top: 20px;
              color: #65736b;
              font-size: 16px;
              line-height: 1.8;
            "
          >
            Proses pembelajaran intrakurikuler di SD Medina Islamic School
            merupakan fokus utama pembelajaran yang diselenggarakan secara
            terencana sesuai dengan kurikulum nasional. Kegiatan ini dirancang
            untuk menanamkan dasar kecerdasan intelektual, penguatan karakter,
            dan pembinaan spiritual.
          </p>
          <p
            style="
              margin-top: 15px;
              color: #65736b;
              font-size: 15px;
              line-height: 1.8;
            "
          >
            Pembelajaran di kelas tidak hanya berfokus pada teori, tetapi
            menerapkan prinsip pembelajaran mendalam (deep learning) sehingga
            peserta didik tidak hanya memahami materi, tetapi juga mampu
            menghubungkan dengan kehidupan nyata, keterampilan berpikir kritis,
            dan kreativitas.
          </p>
        </div>

        <div
          class="showcase-image"
          data-aos="fade-left"
          data-aos-duration="1000"
        >
          <div class="mockup shadow">
            <img
              src="img/bg-1.avif"
              class="mockup-image"
              alt="Intrakurikuler SD Medina"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- ================= KOKURIKULER ================= -->
    <section class="showcase section" style="background: #f8faf8">
      <div
        class="container showcase-grid"
        style="grid-template-columns: 0.9fr 1.1fr"
      >
        <div class="visi-images" data-aos="fade-right" data-aos-duration="1000">
          <div class="visi-image visi-image-1 mockup">
            <img src="img/bg-2.webp" alt="Kokurikuler Medina 1" />
          </div>
          <div class="visi-image visi-image-2 mockup">
            <img src="img/bg-5.avif" alt="Kokurikuler Medina 2" />
          </div>
        </div>

        <div
          class="showcase-content"
          data-aos="fade-left"
          data-aos-duration="1000"
        >
          <div class="section-label">PENGAYAAN & PROYEK</div>
          <h2>
            Ko
            <span style="color: #1f3982">kurikuler.</span>
          </h2>
          <p
            style="
              margin-top: 20px;
              color: #65736b;
              font-size: 15px;
              line-height: 1.8;
            "
          >
            Program kokurikuler menjadi perantara antara teori di kelas dan
            penerapan kehidupan nyata, melalui kegiatan seperti penguatan
            karakter (profil pelajar Pancasila), outing class, saving class,
            pesantren kilat, dan kunjungan edukatif.
          </p>
          <p
            style="
              margin-top: 15px;
              color: #65736b;
              font-size: 15px;
              line-height: 1.8;
            "
          >
            Kegiatan ini memanfaatkan lingkungan sekitar dan dunia luar untuk
            mengasah kepedulian sosial, keterampilan hidup, kemandirian, serta
            nilai-nilai keislaman secara kontekstual.
          </p>
        </div>
      </div>
    </section>

    <!-- ================= EKSTRAKURIKULER ================= -->
    <section class="showcase section" style="background: white">
      <div class="container showcase-grid">
        <div
          class="showcase-content"
          data-aos="fade-right"
          data-aos-duration="1000"
        >
          <div class="section-label">BAKAT & MINAT</div>
          <h2>
            Eks
            <span style="color: #1f3982">trakurikuler.</span>
          </h2>
          <p
            style="
              margin-top: 20px;
              color: #65736b;
              font-size: 16px;
              line-height: 1.8;
            "
          >
            Program ekstrakurikuler ini menjadi wadah pengembangan bakat, minat,
            dan kecerdasan anak melalui kegiatan seperti pramuka, memanah,
            berenang, dan bercerita/public speaking. Setiap kegiatan dirancang
            untuk membentuk karakter kepemimpinan, sportivitas, dan disiplin
            tinggi.
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
              alt="Ekstrakurikuler SD Medina"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- ================= AKTIVITAS HARIAN (TIMELINE) ================= -->
    <section class="section" style="background: #f8faf8">
      <div class="container">
        <div
          style="text-align: center; max-width: 700px; margin: 0 auto 50px"
          data-aos="fade-up"
        >
          <div class="section-label">RANGKAIAN HARIAN</div>
          <h2>Aktivitas <span style="color: #1f3982">Harian.</span></h2>
          <p style="color: #65736b; margin-top: 10px">
            Senin – Jumat | 07.30 - 15.30 WIB
          </p>
        </div>

        <div class="timeline-container">
          <!-- Item 1 -->
          <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <div>
                <span
                  style="
                    display: inline-block;
                    background: #e8edff;
                    color: #1f3982;
                    padding: 4px 10px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: 600;
                    margin-bottom: 8px;
                  "
                  >07.30 - 08.00 WIB</span
                >
                <h4 style="color: #1f3982; margin-bottom: 6px">
                  Kedatangan & Dzikir Pagi
                </h4>
                <p style="color: #65736b; font-size: 14px; line-height: 1.6">
                  Siswa datang dengan ceria, menyapa guru dengan salam,
                  dilanjutkan mengecek sholat dhuha dan dzikir pagi untuk
                  memulai hari dengan penuh keberkahan.
                </p>
              </div>
              <img
                src="img/bg-4.jpeg"
                alt="Kedatangan"
                class="timeline-img shadow"
              />
            </div>
          </div>

          <!-- Item 2 -->
          <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <div>
                <span
                  style="
                    display: inline-block;
                    background: #e8edff;
                    color: #1f3982;
                    padding: 4px 10px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: 600;
                    margin-bottom: 8px;
                  "
                  >08.00 - 09.30 WIB</span
                >
                <h4 style="color: #1f3982; margin-bottom: 6px">
                  Sholat Dhuha & Pembelajaran Al-Qur'an
                </h4>
                <p style="color: #65736b; font-size: 14px; line-height: 1.6">
                  Kegiatan ini melatih kedisiplinan beribadah sunnah serta
                  menghafal dan membaca Al-Qur'an secara tartil di bawah
                  bimbingan guru tahfidz.
                </p>
              </div>
              <img
                src="img/bg-7.avif"
                alt="Sholat Dhuha & Tahfidz"
                class="timeline-img shadow"
              />
            </div>
          </div>

          <!-- Item 3 -->
          <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <div>
                <span
                  style="
                    display: inline-block;
                    background: #e8edff;
                    color: #1f3982;
                    padding: 4px 10px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: 600;
                    margin-bottom: 8px;
                  "
                  >09.30 - 10.30 WIB</span
                >
                <h4 style="color: #1f3982; margin-bottom: 6px">
                  Pelajaran Umum Terpadu
                </h4>
                <p style="color: #65736b; font-size: 14px; line-height: 1.6">
                  Pembelajaran intrakurikuler berbasis tematik terpadu dengan
                  pendekatan saintifik serta pengintegrasian nilai keislaman.
                </p>
              </div>
              <img
                src="img/bg-2.webp"
                alt="Pelajaran Umum"
                class="timeline-img shadow"
              />
            </div>
          </div>

          <!-- Item 4 -->
          <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <div>
                <span
                  style="
                    display: inline-block;
                    background: #e8edff;
                    color: #1f3982;
                    padding: 4px 10px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: 600;
                    margin-bottom: 8px;
                  "
                  >10.30 - 11.00 WIB</span
                >
                <h4 style="color: #1f3982; margin-bottom: 6px">
                  Istirahat & Makan Siang
                </h4>
                <p style="color: #65736b; font-size: 14px; line-height: 1.6">
                  Waktu istirahat ringan untuk meregangkan otot dan menjaga
                  kesehatan serta menyantap makanan sehat bersama.
                </p>
              </div>
              <img
                src="img/sawah.jpeg"
                alt="Istirahat"
                class="timeline-img shadow"
              />
            </div>
          </div>

          <!-- Item 5 -->
          <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <div>
                <span
                  style="
                    display: inline-block;
                    background: #e8edff;
                    color: #1f3982;
                    padding: 4px 10px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: 600;
                    margin-bottom: 8px;
                  "
                  >11.15 - 13.45 WIB</span
                >
                <h4 style="color: #1f3982; margin-bottom: 6px">
                  Sholat Dzuhur Berjamaah & Makan Siang
                </h4>
                <p style="color: #65736b; font-size: 14px; line-height: 1.6">
                  Melaksanakan sholat fardhu berjamaah di masjid sekolah,
                  melatih adab makan, dan merapikan lingkungan kembali.
                </p>
              </div>
              <img
                src="img/WhatsApp Image 2026-10-03 at 11.01.42 (1).jpeg"
                alt="Sholat Dzuhur"
                class="timeline-img shadow"
              />
            </div>
          </div>

          <!-- Item 6 -->
          <div class="timeline-item" data-aos="fade-up">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
              <div>
                <span
                  style="
                    display: inline-block;
                    background: #e8edff;
                    color: #1f3982;
                    padding: 4px 10px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: 600;
                    margin-bottom: 8px;
                  "
                  >15.15 - 15.30 WIB</span
                >
                <h4 style="color: #1f3982; margin-bottom: 6px">
                  Refleksi & Pulang
                </h4>
                <p style="color: #65736b; font-size: 14px; line-height: 1.6">
                  Evaluasi singkat kegiatan hari ini, dzikir penutup, do'a
                  keluar sekolah, dan bersiap kembali ke rumah bersama orang
                  tua.
                </p>
              </div>
              <img
                src="img/bg-8.avif"
                alt="Pulang"
                class="timeline-img shadow"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= FAQ SECTION (DROPDOWN ACCORDION) ================= -->
    <section class="section" style="background: white">
      <div class="container">
        <div style="text-align: center; margin-bottom: 40px" data-aos="fade-up">
          <div class="section-label">PERTANYAAN UMUM</div>
          <h2>FAQ <span style="color: #1f3982">Program.</span></h2>
        </div>

        <div class="faq-accordion" data-aos="fade-up" data-aos-delay="200">
          <div class="faq-item">
            <div class="faq-question">
              <span>Apa itu Medina?</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              SD Medina adalah sekolah dasar islam terpadu yang berkomitmen
              mencetak generasi Qur'ani yang cerdas, berkarakter, dan berakhlak
              mulia.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              <span>Kurikulum yang digunakan?</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              Kami memadukan Kurikulum Nasional (Kurikulum Merdeka) dengan
              Kurikulum Keagamaan/Pesantren secara seimbang.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              <span>Ada program unggulan sekolah?</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              Program unggulan kami meliputi Tahfidz Al-Qur'an, Bahasa Arab,
              pembiasaan ibadah harian, serta penguatan karakter profil pelajar
              Pancasila.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              <span>Ada outing class?</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              Ya, setiap semester kami rutin mengadakan kegiatan outing class
              dan kunjungan edukatif untuk memperkaya pengalaman belajar
              langsung di luar kelas.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">
              <span>Apakah ada biaya tambahan selain bulanan?</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
              Tidak ada biaya tersembunyi. Seluruh kegiatan pendukung utama
              sudah terencana secara transparan di awal pendaftaran.
            </div>
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

