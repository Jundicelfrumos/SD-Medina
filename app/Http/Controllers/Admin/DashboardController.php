<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Teacher;
use App\Models\Pmb;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        $teachers = Teacher::latest()->get();
        $pmbs = Pmb::latest()->get();
        return view('admin.dashboard', compact('news', 'teachers', 'pmbs'));
    }

    public function newsIndex()
    {
        $news = News::latest()->get();
        return view('admin.news', compact('news'));
    }

    public function teacherIndex()
    {
        $teachers = Teacher::latest()->get();
        return view('admin.teachers', compact('teachers'));
    }

    public function storeNews(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('news_images', 'public');
    }

    News::create([
        'title' => $request->title,
        'category' => $request->category,
        'content' => $request->content,
        'image' => $imagePath,
        'user_id' => auth()->id(), // Menyimpan ID admin yang sedang login
    ]);

    return redirect()->route('admin.news')->with('success', 'Berita berhasil ditambahkan!');
}

public function updateNews(Request $request, $id)
{
    $news = News::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:100',
        'content' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($news->image && \Storage::disk('public')->exists($news->image)) {
            \Storage::disk('public')->delete($news->image);
        }
        $news->image = $request->file('image')->store('news_images', 'public');
    }

    $news->update([
        'title' => $request->title,
        'category' => $request->category,
        'content' => $request->content,
        'image' => $news->image,
    ]);

    return redirect()->route('admin.news')->with('success', 'Berita berhasil diperbarui!');
}

public function destroyNews($id)
{
    $news = News::findOrFail($id);
    if ($news->image && \Storage::disk('public')->exists($news->image)) {
        \Storage::disk('public')->delete($news->image);
    }
    $news->delete();

    return redirect()->route('admin.news')->with('success', 'Berita berhasil dihapus!');
}


public function storePmb(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'nama_siswa' => 'required|string|max:255',
        'nama_pengirim' => 'required|string|max:255',
        'bukti_transfer' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Simpan file bukti transfer ke storage/app/public/bukti_pembayaran
    $buktiPath = $request->file('bukti_transfer')->store('bukti_pembayaran', 'public');

    Pmb::create([
        'email' => $request->email,
        'nama_siswa' => $request->nama_siswa,
        'tempathlahir_siswa' => $request->tempathlahir_siswa,
        'tanggallahir_siswa' => $request->tanggallahir_siswa,
        'nik_siswa' => $request->nik_siswa,
        'gender' => $request->gender,
        'status_pendaftaran' => $request->status_pendaftaran,
        'sekolah_asal' => $request->sekolah_asal,
        'nisn' => $request->nisn,
        'nama_ayah' => $request->nama_ayah,
        'nik_ayah' => $request->nik_ayah,
        'pekerjaan_ayah' => $request->pekerjaan_ayah,
        'telp_ayah' => $request->telp_ayah,
        'nama_ibu' => $request->nama_ibu,
        'nik_ibu' => $request->nik_ibu,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'telp_ibu' => $request->telp_ibu,
        'alamat' => $request->alamat,
        'kontak_utama' => $request->kontak_utama,
        'nama_pengirim' => $request->nama_pengirim,
        'nominal_transfer' => $request->nominal_transfer,
        'bukti_transfer' => $buktiPath,
    ]);

    // Redirect ke halaman awal dengan pesan sukses
    return redirect('/')->with('success', 'Pendaftaran berhasil! Terima kasih telah mendaftar di SD Medina Islamic School.');
}

public function pmbIndex()
{
    // Mengambil semua data pendaftar, diurutkan dari yang terbaru
    $pmbs = Pmb::latest()->get();

    // Mengarahkan ke view admin pmb (sesuaikan dengan nama file view Anda)
    return view('admin.pmb', compact('pmbs'));
}

public function storeTeacher(Request $request)
{
    \App\Models\Teacher::create([
        'name' => $request->name,
        'role' => $request->role,
        'icon' => $request->icon, // Simpan kelas icon (contoh: fa-language)
    ]);

    return redirect()->route('admin.teachers')->with('success', 'Profil guru berhasil ditambahkan!');
}

public function updateTeacher(Request $request, $id)
{
    $teacher = \App\Models\Teacher::findOrFail($id);

    $teacher->update([
        'name' => $request->name,
        'role' => $request->role,
        'icon' => $request->icon,
    ]);

    return redirect()->route('admin.teachers')->with('success', 'Profil guru berhasil diperbarui!');
}

public function galleryIndex()
{
    $galleries = Gallery::latest()->get();
    return view('admin.gallery', compact('galleries'));
}

public function storeGallery(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
    ]);

    $imagePath = $request->file('image')->store('gallery_images', 'public');

    Gallery::create([
        'title' => $request->title,
        'category' => $request->category,
        'image' => $imagePath,
    ]);

    return redirect()->route('admin.gallery')->with('success', 'Galeri berhasil ditambahkan!');
}

public function updateGallery(Request $request, $id)
{
    $gallery = Gallery::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    ]);

    if ($request->hasFile('image')) {
        if ($gallery->image && \Storage::disk('public')->exists($gallery->image)) {
            \Storage::disk('public')->delete($gallery->image);
        }
        $gallery->image = $request->file('image')->store('gallery_images', 'public');
    }

    $gallery->update([
        'title' => $request->title,
        'category' => $request->category,
        'image' => $gallery->image,
    ]);

    return redirect()->route('admin.gallery')->with('success', 'Galeri berhasil diperbarui!');
}

public function destroyGallery($id)
{
    $gallery = Gallery::findOrFail($id);
    if ($gallery->image && \Storage::disk('public')->exists($gallery->image)) {
        \Storage::disk('public')->delete($gallery->image);
    }
    $gallery->delete();

    return redirect()->route('admin.gallery')->with('success', 'Galeri berhasil dihapus!');
}

public function showNews($id)
{
    // Cari berita berdasarkan ID, jika tidak ditemukan akan 404
    $news = News::findOrFail($id);
    
    // Ambil 3 berita lainnya untuk rekomendasi berita terbaru di sidebar/bawah
    $otherNews = News::where('id', '!=', $id)->latest()->take(3)->get();

    return view('news-detail', compact('news', 'otherNews'));
}



}