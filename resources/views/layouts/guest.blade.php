<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('asset/css/dashboard.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="icon" href="{{ asset('img/logomedina.png') }}" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

        <!-- Scripts -->
         <script src="https://cdn.tailwindcss.com"></script>
        <!-- Menggunakan Tailwind CSS via CDN agar langsung rapi tanpa npm run dev -->
         <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Inter', sans-serif;
            background: #eef2f7;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }
        .login-wrapper {
            background: #ffffff;
            width: 100%;
            max-width: 1050px;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(31, 57, 130, 0.08);
            display: grid;
            grid-template-columns: 1fr 1fr;
            overflow: hidden;
        }
        @media (max-width: 900px) {
            .login-wrapper {
                grid-template-columns: 1fr;
                max-width: 480px;
            }
            .login-banner {
                display: none;
            }
        }
        /* Sisi Kiri: Form */
        .login-form-side {
            padding: 40px 45px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .brand-logo img {
            width: 110px;
            height: auto;
            margin-bottom: 24px;
        }
        .login-header h1 {
            font-size: 24px;
            font-weight: 700;
            color: #14214a;
            margin-bottom: 6px;
        }
        .login-header p {
            font-size: 13px;
            color: #6b7794;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 14px;
        }
        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 6px;
            color: #14214a;
        }
        .input-box {
            position: relative;
            display: flex;
            align-items: center;
        }
        .input-box i {
            position: absolute;
            left: 14px;
            color: #9aa7cc;
            font-size: 14px;
        }
        .form-control {
            width: 100%;
            padding: 11px 14px 11px 40px;
            border: 1px solid #e4e8f2;
            border-radius: 10px;
            font-size: 14px;
            outline: none;
            transition: 0.18s;
            background: #fafbfd;
            color: #14214a;
        }
        .form-control:focus {
            border-color: #1f3982;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(31, 57, 130, 0.1);
        }
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin: 14px 0 20px;
        }
        .form-options label {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #6b7794;
            cursor: pointer;
        }
        .form-options input {
            accent-color: #1f3982;
            width: 15px;
            height: 15px;
        }
        .forgot-link {
            color: #1f3982;
            text-decoration: none;
            font-weight: 600;
        }
        .forgot-link:hover {
            text-decoration: underline;
        }
        .btn-submit {
            background: #1f3982;
            color: #fff;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: 0.18s;
            box-shadow: 0 6px 16px rgba(31, 57, 130, 0.2);
        }
        .btn-submit:hover {
            background: #2a4aa5;
            transform: translateY(-1px);
        }
        
        /* Divider OR */
        .divider-or {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 16px 0;
            color: #9aa7cc;
            font-size: 12px;
            font-weight: 500;
        }
        .divider-or::before, .divider-or::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e4e8f2;
        }
        .divider-or::before {
            margin-right: 12px;
        }
        .divider-or::after {
            margin-left: 12px;
        }

        /* Tombol Register Sekunder */
        .btn-register {
            display: block;
            width: 100%;
            text-align: center;
            background: #ffffff;
            color: #1f3982;
            border: 1px solid #d1dcfc;
            padding: 11px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: 0.18s;
        }
        .btn-register:hover {
            background: #f3f6ff;
            border-color: #1f3982;
        }

        .terms-text {
            font-size: 11px;
            color: #9aa7cc;
            margin-top: 20px;
        }
        .terms-text a {
            color: #6b7794;
            text-decoration: underline;
        }
        .alert-error {
            background: #fef2f2;
            color: #b91c1c;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 14px;
            border: 1px solid #fecaca;
        }

        /* Sisi Kanan: Banner / Ilustrasi */
        .login-banner {
            background: linear-gradient(135deg, #1f3982 0%, #3a58b0 100%);
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
            color: #fff;
        }
        .banner-content h2 {
            font-size: 28px;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 14px;
            max-width: 340px;
        }
        .banner-content p {
            font-size: 13px;
            color: #d1dcfc;
            line-height: 1.5;
            max-width: 320px;
        }
        .banner-preview-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            padding: 20px;
            margin-top: 30px;
        }
        .preview-stat {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }
        .preview-stat:last-child {
            margin-bottom: 0;
        }
        .preview-icon {
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: grid;
            place-items: center;
            font-size: 15px;
        }
        .preview-text strong {
            display: block;
            font-size: 15px;
        }
        .preview-text small {
            font-size: 11px;
            color: #d1dcfc;
        }
    </style>
    </head>
    <body>
        <div class="">
            {{ $slot }}
        </div>
    </body>
</html>
