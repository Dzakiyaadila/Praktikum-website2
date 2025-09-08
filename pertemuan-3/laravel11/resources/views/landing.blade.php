@extends('layouts.app')

@section('title', 'StoryNest — Rumahnya Pecinta Buku')

@section('content')
  <section class="hero-section text-center mb-5">
    <h1>Selamat datang di <span>StoryNest</span></h1>
    <p class="lead">
      Tempat hangat bagi para pembaca untuk berbagi kisah, review, dan rekomendasi.
    </p>
    <div class="mt-4">
      <a href="#mulai" class="btn btn-dark custom-btn me-2">Mulai Jelajah</a>
      <a href="#fitur" class="btn btn-outline-dark custom-btn">Lihat Fitur</a>
    </div>
  </section>

  <div class="row text-center mb-5">
    <div class="col-md-4 mb-3">
      <div class="stat-card">
        <h3>{{ number_format($jumlah['books']) }}</h3>
        <p>Judul dalam rak</p>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="stat-card">
        <h3>{{ number_format($jumlah['members']) }}</h3>
        <p>Anggota aktif</p>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="stat-card">
        <h3>{{ number_format($jumlah['reviews']) }}</h3>
        <p>Ulasan dibagikan</p>
      </div>
    </div>
  </div>

  <section id="fitur" class="mb-5">
    <h2 class="mb-4">Kenapa StoryNest?</h2>
    <div class="row">
      @foreach ($konten as $item)
        <div class="col-md-4 mb-3">
          <div class="feature-box">
            <h5>{{ $item['title'] }}</h5>
            <p>{{ $item['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <section id="mulai" class="cta-box text-center p-5">
    <h3>Bangun sarang bacaanmu hari ini</h3>
    <p>Buat rak buku, simpan kutipan, dan bertemu pembaca lain.</p>
    <a href="#" class="btn btn-dark custom-btn">Gabung Sekarang!</a>
  </section>
@endsection
