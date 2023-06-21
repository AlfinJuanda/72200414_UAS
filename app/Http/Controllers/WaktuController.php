<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaktuController extends Controller
{
    public function greeting()
    {
        date_default_timezone_set("Asia/Bangkok");
        $currentTime = date('H:i:s');

        $greeting = '';
        $waktu = 'waktu nya: ' . $currentTime;
        $background = '';

        if ($currentTime >= '19:00:00' || $currentTime <= '02:59:59') {
            $greeting = 'Selamat Malam';
            $waktu = 'Waktunya Sekarang adalah: ' . $currentTime;
            $background = 'night-background'; // CSS class untuk latar belakang malam
        } elseif ($currentTime >= '03:00:00' && $currentTime <= '09:59:59') {
            $greeting = 'Selamat Pagi';
            $waktu = 'Waktunya Sekarang adalah: ' . $currentTime;
            $background = 'morning-background'; // CSS class untuk latar belakang pagi
        } elseif ($currentTime >= '10:00:00' && $currentTime <= '14:59:59') {
            $greeting = 'Selamat Siang';
            $waktu = 'Waktunya Sekarang adalah: ' . $currentTime;
            $background = 'afternoon-background'; // CSS class untuk latar belakang siang
        } elseif ($currentTime >= '15:00:00' && $currentTime <= '17:59:59') {
            $greeting = 'Selamat Sore';
            $waktu = 'Waktunya Sekarang adalah: ' . $currentTime;
            $background = 'afternoon-background'; // CSS class untuk latar belakang siang (sore)
        } elseif ($currentTime >= '18:00:00' && $currentTime <= '18:59:59') {
            $greeting = 'Selamat Petang';
            $waktu = 'Waktunya Sekarang adalah: ' . $currentTime;
            $background = 'evening-background'; // CSS class untuk latar belakang petang
        }

        return view('greeting', compact('greeting','waktu','background'));
    }
}
