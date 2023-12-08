@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ asset('./img/daily-news-announcement-information-report-concept.jpg') }}" alt="" class="bd-placeholder-img card-img-top"
                    style="height: 800px; ">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('./img/koran.jpg') }}" alt="" class="bd-placeholder-img card-img-top"
                    style="height: 800px; ">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('./img/newspaper-background-concept.jpg') }}" alt="" class="bd-placeholder-img card-img-top"
                    style="height: 800px; ">
                <div class="container">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <br><br>
    <div class="container ">
        <div class="row">
          <br>
          <br>
            @foreach ($allBerita as $item)
                <div class="col-lg-4 pt-200 mb-4">
                    <div class="card ">
                        <img src="{{ asset('img/gambar/' . $item->gambar) }}" class="bd-placeholder-img card-img-top"
                            alt="" style="height: 300px;">
                        <div class="card-body">
                            <div class="card-title h5 fw-bold">{{ Str::limit($item->judul, 25, '...') }}</div>
                            <p class="card-text">{!! Str::words($item->isi, 30, '...') !!}</p>
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
            <br>
        </div>
    </div>
    </div>
@endsection
