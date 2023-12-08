<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $berita = Berita::latest()->take(5)->get(); // Ambil 5 berita terbaru
        $totalBerita = Berita::count();
        $totalKategori = Kategori::count();
        $totalPengguna = User::count();

        return view('admin.dashboard', compact('berita', 'totalBerita', 'totalKategori', 'totalPengguna'));
    }
}
