<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $konten = [
        ['title' => 'Baca & Review', 
        'desc' => 'Tulis ulasan dan temukan sudut pandang baru dari komunitas.'],
        ['title' => 'Koleksi Pribadi', 
        'desc' => 'Kelola rak buku digitalmu: sudah dibaca, sedang dibaca, ingin dibaca.'],
        ['title' => 'Diskusi Hangat', 
        'desc' => 'Ikut diskusi bab favorit, teori, hingga rekomendasi genre.'],
    ];

    $jumlah = ['books' => 1200, 
            'members' => 5400, 
            'reviews' => 9800];

    return view('landing', compact('konten', 'jumlah'));
});

Route::get('/tentang', function () {
    return view('tentang');
});
