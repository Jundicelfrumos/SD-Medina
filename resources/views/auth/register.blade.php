<x-guest-layout>
    <div class="login-wrapper">
        <!-- SISI KIRI: Form Registrasi -->
        <div class="login-form-side">
            <div>
                <div class="brand-logo">
                    <img src="{{ asset('img/MEDINA-Photoroom.png') }}" alt="Logo SD Medina">
                </div>
                
                <div class="login-header">
                    <h1>Create an account</h1>
                    <p>Register a new admin account to get started.</p>
                </div>

                @if ($errors->any())
                    <div class="alert-error">
                        <i class="fas fa-exclamation-circle"></i> Periksa kembali data yang Anda masukkan (pastikan password cocok &amp; email belum terdaftar).
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="form-group">
                        <label>Full Name</label>
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus placeholder="Nama Admin">
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required placeholder="name@sdmedina.sch.id">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" class="form-control" required placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password_confirmation" class="form-control" required placeholder="••••••••">
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">
                        Create Account
                    </button>
                </form>

                <!-- Tombol kembali ke Login -->
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn-login-link" style="color:#14214a;">
                        <i class="fas fa-sign-in-alt" style="margin-right: 6px; margin-top:15px;"></i> Already have an account? Log in
                    </a>
                @endif
            </div>
        </div>

        <!-- SISI KANAN: Banner & Panel Preview -->
        <div class="login-banner">
            <div class="banner-content">
                <h2>Empowering healthier &amp; smarter communities</h2>
                <p>Bergabunglah dengan panel admin SD Medina untuk mengelola seluruh informasi akademik, berita, dan database sekolah.</p>
                
                <div class="banner-preview-card">
                    <div class="preview-stat">
                        <div class="preview-icon"><i class="fas fa-school"></i></div>
                        <div class="preview-text">
                            <strong>SD Medina Islamic School</strong>
                            <small>Sistem Informasi Manajemen Terpadu</small>
                        </div>
                    </div>
                    <div class="preview-stat" style="border-top: 1px solid rgba(255,255,255,0.15); padding-top: 12px; margin-top: 12px;">
                        <div class="preview-icon"><i class="fas fa-user-shield"></i></div>
                        <div class="preview-text">
                            <strong>Admin Registration</strong>
                            <small>Secure Onboarding Portal</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
