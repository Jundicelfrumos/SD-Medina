<header class="navbar">
      <div class="container nav-wrapper">
        <a href="#" class="logo">
          <img src="img/MEDINA-Photoroom.png" class="logo-icon" alt="" />
        </a>

        <nav class="nav-menu">
          <a href="/" class="{{ request()->is('/') ? 'active-nav' : '' }}">Beranda</a>
          <a href="/about" class="{{ request()->is('about') ? 'active-nav' : '' }}">Tentang</a>
          <a href="/program" class="{{ request()->is('program') ? 'active-nav' : '' }}">Program</a>
          <a href="https://psp.teknologikartu.com/login" target="_blank">Keuangan</a>
        </nav>

        <div class="nav-actions">
          <a href="/daftar" class="btn btn-primary">Daftar</a>
        </div>

        <button class="mobile-menu">☰</button>
      </div>
    </header>