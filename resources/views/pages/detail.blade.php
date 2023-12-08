@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row g-5">
                <div class="col-md-8">
                    <article class="blog-post">
                        <h2 class="display-5 link-body-emphasis mb-1">{{ $allBerita->judul }}</h2>
                        <p class="blog-post-meta">{{ now()->format('F j, Y') }} by <a href="#">Firmansyah</a></p>
                        <img src="{{ asset('img/gambar/' . $allBerita->gambar) }}"
                        alt="">
                        <hr>
                        <p>{{ $allBerita->isi }}</p>
                        <nav class="blog-pagination" aria-label="Pagination">
                            <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                            <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
                        </nav>
                    </div>
                   
                
                    <div class="col-md-4">
                        Nama Penulis :
                        <h3><hr>{{ $allBerita->user->name }}<hr></h3>
                        <div class="card">
                            <div class="card-header">Kategori</div>
                            <div class="card-body">
                             <h1>{{ $allBerita->kategori->nama_kategori }}</h1>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
@endsection
