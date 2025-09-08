<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Di sini tempat daftar semua channel broadcasting aplikasi kamu.
| Kalau pakai fitur real-time (Laravel Echo, Pusher, dsb.), route channel
| bakal didaftarkan di file ini.
|
*/

// Contoh: channel private untuk user
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
