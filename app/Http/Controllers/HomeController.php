<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Teacher;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        {
        $news = News::latest()->get(); 
        $teachers = Teacher::latest()->get(); 
        $galleries = Gallery::latest()->get(); // Ambil data galeri terbaru

        return view('index', compact('news', 'teachers', 'galleries'));
    }
    }

    public function showNews($id)
    {
        $news = News::findOrFail($id);
        $otherNews = News::where('id', '!=', $id)->latest()->take(3)->get();

        return view('news-detail', compact('news', 'otherNews'));
    }
}