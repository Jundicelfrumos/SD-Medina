@extends('layouts.app')

@section('title', $news->title . ' - SD Medina Islamic School')

@section('content')
<main style="background: #f8fafc; padding: 60px 0 80px 0;">
  <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
    
    <!-- Tombol Kembali -->
    <div style="margin-bottom: 25px;">
      <a href="{{ url('/#berita') }}" style="display: inline-flex; align-items: center; gap: 8px; color: #1f3982; font-weight: 600; text-decoration: none; font-size: 14px; transition: 0.2s;">
        <i class="fas fa-arrow-left"></i> Kembali ke Beranda
      </a>
    </div>

    <div style="display: grid; grid-template-columns: 2.2fr 1fr; gap: 40px;">
      
      <!-- KONTEN UTAMA BERITA -->
      <article style="background: #fff; padding: 35px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.04);">
        
        <!-- Header Berita -->
        <div style="margin-bottom: 20px;">
          <span style="display: inline-block; padding: 6px 14px; background: #e0e7ff; color: #1f3982; font-size: 12px; font-weight: 700; border-radius: 20px; text-transform: uppercase; margin-bottom: 12px;">
            {{ $news->category }}
          </span>
          <h1 style="font-size: 28px; font-weight: 800; color: #14214a; line-height: 1.3; margin-bottom: 15px;">
            {{ $news->title }}
          </h1>
          <div style="display: flex; align-items: center; gap: 15px; color: #6b7794; font-size: 13px;">
            <span><i class="far fa-calendar-alt"></i> {{ $news->created_at->format('d M Y') }}</span>
            <span>•</span>
            <span><i class="far fa-user"></i> {{ $news->user->name ?? 'Admin SD Medina' }}</span>
          </div>
        </div>

        <!-- Gambar Utama Berita -->
        <div style="width: 100%; border-radius: 12px; overflow: hidden; margin-bottom: 30px;">
          @if($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" style="width: 100%; max-height: 450px; object-fit: cover; display: block;" />
          @else
            <img src="{{ asset('img/bg-1.avif') }}" alt="Default Image" style="width: 100%; max-height: 450px; object-fit: cover; display: block;" />
          @endif
        </div>

        <!-- Isi/Caption Berita Lengkap -->
        <div style="color: #334155; font-size: 16px; line-height: 1.8; white-space: pre-line;">
          {{ $news->content }}
        </div>

      </article>

      <!-- SIDEBAR: BERITA TERBARU LAINNYA -->
      <aside>
        <div style="background: #fff; padding: 25px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); position: sticky; top: 100px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #14214a; margin-bottom: 20px; border-bottom: 2px solid #f1f5f9; padding-bottom: 10px;">
            Berita Terbaru Lainnya
          </h3>

          <div style="display: flex; flex-direction: column; gap: 20px;">
            @forelse($otherNews as $item)
            <a href="{{ route('news.show', $item->id) }}" style="display: flex; gap: 12px; text-decoration: none; align-items: center;" class="other-news-item">
              <div style="width: 70px; height: 70px; border-radius: 8px; overflow: hidden; flex-shrink: 0;">
                @if($item->image)
                  <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" style="width: 100%; height: 100%; object-fit: cover;" />
                @else
                  <img src="{{ asset('img/bg-1.avif') }}" alt="Default Image" style="width: 100%; height: 100%; object-fit: cover;" />
                @endif
              </div>
              <div>
                <h4 style="font-size: 13px; font-weight: 600; color: #1e293b; line-height: 1.4; margin-bottom: 4px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                  {{ $item->title }}
                </h4>
                <small style="color: #94a3b8; font-size: 11px;">
                  <i class="far fa-calendar-alt"></i> {{ $item->created_at->format('d M Y') }}
                </small>
              </div>
            </a>
            @empty
            <p style="color: #94a3b8; font-size: 13px;">Belum ada berita lainnya.</p>
            @endforelse
          </div>
        </div>
      </aside>

    </div>
  </div>
</main>

<style>
  @media (max-width: 768px) {
    div[style*="grid-template-columns"] {
      grid-template-columns: 1fr !important;
    }
  }
  .other-news-item:hover h4 {
    color: #1f3982 !important;
  }
</style>
@endsection