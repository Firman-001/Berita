@extends('layouts.app')

@section('content')

    <div class="container my-4">
        <h1>Dashboard Admin</h1>

        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Berita Terkini</div>
                    <div class="card-body">
                        <div class="container mt-3">
                            <div class="row">
                                @foreach ($berita as $item)
                                    <div class="col-lg-4 col-md">
                                        <div class="card">
                                            <img src="{{ asset('img/gambar/' . $item->gambar) }}" class="bd-placeholder-img card-img-top" 
                                                alt="">
                                            <div class="card-body">
                                                <p class="blog-post-meta">{{ now()->format('F j, Y') }} by <a href="#">Firmansyah</a></p>
                                                <div class="card-title h6 fw-bold">{{ Str::limit($item->judul, 25, '...') }}</div>
                                                <p class="card-text">{!! Str::words($item->isi, 10, '...') !!}</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="{{ route('detail', $item->id) }}" class="btn btn-md btn-outline-secondary">view</a>
                                                    <small class="text-body-secondary">{{ $item->user->name }} |
                                                        <span class="fw-bold">{{ $item->kategori->nama_kategori }}</span>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Statistik</div>
                    <div class="card-body">
                        <ul>
                            <li>Total Berita: {{ $totalBerita }}</li>
                            <li>Total Kategori: {{ $totalKategori }}</li>
                            <li>Total Pengguna: {{ $totalPengguna }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>      

@endsection
