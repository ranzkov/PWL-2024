<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Fitriani Novita/2241720235';
    }

    public function articles($id)
    {
        return 'Halaman artikel dengan id ' . $id;
    }
}
