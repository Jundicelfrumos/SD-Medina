<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>@yield('title', 'Dashboard Admin - SD Medina')</title>
    
    <link rel="stylesheet" href="{{ asset('asset/css/dashboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" href="{{ asset('img/logomedina.png') }}" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    @stack('styles')

    <style>
    * {
        font-family: 'Inter', sans-serif;
    }

    /* Styling Dasar & Transisi Tombol Aksi */
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
        transition: all 0.2s ease-in-out; /* Durasi animasi halus */
    }

    /* Warna Tombol Edit */
    .btn-action-edit {
        background-color: #f59e0b; /* Kuning/Amber */
    }

    /* Warna Tombol Hapus */
    .btn-action-delete {
        background-color: #ef4444; /* Merah */
    }

    /* Animasi saat Kursor Mendekat (Hover Effect) */
    .btn-action-edit:hover {
        background-color: #d97706; /* Warna kuning lebih gelap */
        transform: translateY(-2px); /* Tombol sedikit terangkat ke atas */
        box-shadow: 0 4px 8px rgba(245, 158, 11, 0.3); /* Muncul bayangan lembut */
    }

    .btn-action-delete:hover {
        background-color: #dc2626; /* Warna merah lebih gelap */
        transform: translateY(-2px); /* Tombol sedikit terangkat ke atas */
        box-shadow: 0 4px 8px rgba(239, 68, 68, 0.3); /* Muncul bayangan lembut */
    }

    .custom-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0); /* Mulai dari transparan */
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s ease, visibility 0.3s ease, background 0.3s ease;
    }
    
    /* Kelas aktif untuk memicu animasi muncul */
    .custom-modal-overlay.active {
        visibility: visible;
        opacity: 1;
        background: rgba(0, 0, 0, 0.5); /* Latar belakang menggelap secara perlahan */
    }

    .custom-modal-box {
        background: #fff;
        width: 100%;
        max-width: 500px;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        box-sizing: border-box;
        transform: translateY(-20px); /* Kotak modal sedikit bergeser ke atas saat awal */
        transition: transform 0.3s ease;
    }

    /* Efek kotak modal bergerak naik dengan mulus saat aktif */
    .custom-modal-overlay.active .custom-modal-box {
        transform: translateY(0);
    }
  </style>
    
</head>
<body>

    <!-- ASIDE / SIDEBAR (Hanya ditulis sekali di sini) -->
    <aside>
    <div class="logo">
        <img src="{{ asset('img/MEDINA-Photoroom.png') }}" alt="Logo Medina">
    </div>
    
    <div class="grp">MENU UTAMA</div>
    
    <!-- Dashboard -->
    <a href="{{ route('admin.dashboard') }}" class="nav {{ request()->routeIs('admin.dashboard') ? 'on' : '' }}">
        <span><i class="fa-solid fa-users"></i></span>Dashboard
    </a>
    
    <!-- Berita -->
    <a href="{{ route('admin.news') }}" class="nav {{ request()->routeIs('admin.news*') ? 'on' : '' }}">
        <span><i class="fa-solid fa-newspaper"></i></span>Berita
    </a>
    
    <!-- Profil Guru -->
    <a href="{{ route('admin.teachers') }}" class="nav {{ request()->routeIs('admin.teachers*') ? 'on' : '' }}">
        <span><i class="fa-solid fa-user-graduate"></i></span>Profile Guru
    </a>

    <!-- Gallery -->
    <a href="{{ route('admin.gallery') }}" class="nav {{ request()->routeIs('admin.gallery*') ? 'on' : '' }}">
        <span><i class="fa-solid fa-images"></i></span>Gallery
    </a>

    <form method="POST" action="{{ route('logout') }}" style="margin-top: auto; padding-top: 20px;">
        @csrf
        <button type="submit" style="background: none; border: none; color: #ffb4b4; width: 100%; text-align: left; padding: 10px 15px; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 10px; border-radius: 8px; transition: 0.18s;" onmouseover="this.style.background='rgba(255,255,255,0.1)'" onmouseout="this.style.background='none'">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </form>
</aside>

    <!-- MAIN CONTENT (Isi halaman akan dinamis masuk ke sini) -->
    <main>
        @yield('content')
    </main>

    <div class="toast" id="toast"></div>

    <!-- Script Umum -->
    
    <script>
        const $ = s => document.querySelector(s);
        const toast = m => {
            const t = $('#toast');
            t.textContent = m;
            t.classList.add('show');
            clearTimeout(t._h);
            t._h = setTimeout(() => t.classList.remove('show'), 1800);
        };
        document.querySelectorAll('[data-toast]').forEach(b => b.onclick = () => toast(b.dataset.toast));

        // pop up animation
        function openModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.style.display = 'flex'; // Ubah dari none ke flex terlebih dahulu
        setTimeout(() => {
            modal.classList.add('active'); // Tambahkan kelas active agar animasi fade-in berjalan
        }, 10); // Jeda mikro agar transisi terbaca oleh browser
    }

    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.remove('active'); // Hilangkan kelas active untuk animasi fade-out
        setTimeout(() => {
            modal.style.display = 'none'; // Sembunyikan setelah animasi selesai (300ms)
        }, 300);
    }
    </script>
    
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>