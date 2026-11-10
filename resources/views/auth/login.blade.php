<x-guest-layout>
    <div class="login-wrapper">
        <!-- SISI KIRI: Form Login & Register -->
        <div class="login-form-side">
            <div>
                <div class="brand-logo">
                    <img src="{{ asset('img/MEDINA-Photoroom.png') }}" alt="Logo SD Medina">
                </div>
                
                <div class="login-header">
                    <h1>Log in to your account</h1>
                    <p>Please enter your details to access the admin panel.</p>
                </div>

                @if ($errors->any())
                    <div class="alert-error">
                        <i class="fas fa-exclamation-circle"></i> Email atau password yang Anda masukkan salah.
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus placeholder="name@sdmedina.sch.id">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" class="form-control" required placeholder="••••••••">
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">
                        Log in
                    </button>
                </form>

                <!-- Pemisah OR -->
                <div class="divider-or">OR</div>

                <!-- Tombol Registrasi -->
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-register" style="color:#14214a;">
                        <i class="fas fa-user-plus" style="margin-right: 6px;"></i> Register New Account
                    </a>
                @endif
            </div>
        </div>

        <!-- SISI KANAN: Banner & Panel Preview -->
        <div class="login-banner">
            <div class="banner-content">
                <h2>Empowering healthier &amp; smarter communities</h2>
                <p>Kelola data berita sekolah, profil guru, dan interaksi leads siswa dengan cepat dan efisien dalam satu platform terpadu.</p>
                
                <div class="banner-preview-card">
                    <div class="preview-stat">
                        <div class="preview-icon"><i class="fas fa-school"></i></div>
                        <div class="preview-text">
                            <strong>SD Medina Islamic School</strong>
                            <small>Sistem Informasi Manajemen Terpadu</small>
                        </div>
                    </div>
                    <div class="preview-stat" style="border-top: 1px solid rgba(255,255,255,0.15); padding-top: 12px; margin-top: 12px;">
                        <div class="preview-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="preview-text">
                            <strong>Secure Admin Access</strong>
                            <small>Protected by Laravel Authentication</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
