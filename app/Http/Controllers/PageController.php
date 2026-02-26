<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '244107020228<br>Esatovin Ebenhaezer Victoria';
    }

    public function articles($id) {
        return 'Halaman artikel dengan ID ' . $id;
    }
}
