<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function articles($id)
    {
        return 'Halaman artikel dengan ID ' . $id;
    }
}
