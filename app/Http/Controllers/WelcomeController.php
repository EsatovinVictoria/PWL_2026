<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        print 'Hello World';
    }

    public function greeting() {
        return view('blog.hello')
            ->with('name', 'Esatovin')
            ->with('occupation', 'Web Developer');
    }
}
