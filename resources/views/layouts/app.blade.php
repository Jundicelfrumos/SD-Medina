<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SD Terpadu Medina Islamic School')</title>
    
    <!-- Panggil CSS menggunakan helper asset() Laravel -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <!-- FontAwesome & AOS CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="icon" href="{{ asset('/img/logomedina.png') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css"
      integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

        <style>
      /* Styling Tambahan & Interaktif */
      .step-grid-2x2 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        margin-top: 40px;
      }
      .step-box {
        background: white;
        padding: 35px 30px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        position: relative;
        border-top: 6px solid #1f3982;
        transition: all 0.3s ease;
        display: flex;
        gap: 20px;
        align-items: flex-start;
      }
      .step-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(31, 57, 130, 0.12);
      }
      .step-badge {
        background: #1f3982;
        color: white;
        width: 45px;
        height: 45px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 18px;
        flex-shrink: 0;
      }

      /* Keuangan 2 Kolom & Interaktif */
      .finance-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin-top: 30px;
      }
      .interactive-price-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.04);
      }
      .interactive-price-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(31, 57, 130, 0.12);
      }
      .price-header-box {
        background: #1f3982;
        color: white;
        padding: 22px 25px;
        font-weight: 700;
        font-size: 18px;
        text-align: center;
        letter-spacing: 0.5px;
      }
      .price-item-row {
        display: flex;
        justify-content: space-between;
        padding: 16px 25px;
        border-bottom: 1px solid #f1f5f9;
        font-size: 15px;
        color: #65736b;
      }
      .price-item-row:last-child {
        border-bottom: none;
      }
      .price-item-row.total-row {
        background: #f8faf8;
        font-weight: 700;
        color: #1f3982;
        font-size: 16px;
      }

      /* Card Fasilitas Interaktif */
      .facility-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
      }
      .facility-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
        padding: 20px;
      }
      .facility-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(31, 57, 130, 0.12);
      }
      .facility-img-wrapper {
        border-radius: 12px;
        overflow: hidden;
        height: 220px;
        margin-bottom: 20px;
      }
      .facility-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
      }
      .facility-card:hover .facility-img-wrapper img {
        transform: scale(1.05);
      }
    </style>
    
    @stack('styles')
</head>
<body>

    <!-- NAVBAR / HEADER DISINI -->
    @include('layouts.header')

    <!-- KONTEN UTAMA HALAMAN -->
    @yield('content')

    <!-- FOOTER DISINI -->
    @include('layouts.footer')

    <!-- Script JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
    <script>
    const navbar = document.querySelector(".navbar");

    function updateNavbar() {
      if (window.scrollY > 80) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    }

    window.addEventListener("scroll", updateNavbar);

    updateNavbar();

    /* =========================================
   PAGE LOADING
========================================= */

    const pageLoader = document.getElementById("pageLoader");

    window.addEventListener("load", () => {
      setTimeout(() => {
        pageLoader.classList.add("loaded");
      }, 350);
    });

    /* =========================================
   HERO BACKGROUND SLIDESHOW
========================================= */

    const heroSlides = document.querySelectorAll(".hero-slide");

    let currentHeroSlide = 0;

    function changeHeroSlide() {
      if (!heroSlides.length) {
        return;
      }

      heroSlides[currentHeroSlide].classList.remove("active");

      currentHeroSlide++;

      if (currentHeroSlide >= heroSlides.length) {
        currentHeroSlide = 0;
      }

      heroSlides[currentHeroSlide].classList.add("active");
    }

    /*
    Ganti gambar setiap 5 detik
*/

    setInterval(changeHeroSlide, 5000);

    /* =========================================
   COUNTER ANIMATION
========================================= */

    const counters = document.querySelectorAll(".counter");

    const counterObserver = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const counter = entry.target;

            const target = parseInt(counter.dataset.target);

            let current = 0;

            const duration = 1500;
            const startTime = performance.now();

            function updateCounter(currentTime) {
              const progress = Math.min(
                (currentTime - startTime) / duration,
                1,
              );

              /*
                        Ease Out
                        Awalnya cepat,
                        kemudian melambat ketika mendekati angka akhir.
                    */

              const easedProgress = 1 - Math.pow(1 - progress, 3);

              current = Math.floor(target * easedProgress);

              counter.textContent = current;

              if (progress < 1) {
                requestAnimationFrame(updateCounter);
              } else {
                counter.textContent = target;
              }
            }

            requestAnimationFrame(updateCounter);

            observer.unobserve(counter);
          }
        });
      },
      {
        threshold: 0.5,
      },
    );

    counters.forEach((counter) => {
      counterObserver.observe(counter);
    });
  </script>
</body>
</html>