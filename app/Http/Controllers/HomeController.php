<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            ['number' => '200+', 'label' => 'Anggota Aktif'],
            ['number' => '49+',  'label' => 'Penghargaan'],
            ['number' => '100+', 'label' => 'Menghadiri Event'],
        ];
 
        return view('pages.home', compact('stats'));
    }
}
