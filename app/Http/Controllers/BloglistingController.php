<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloglistingController extends Controller
{
    public function index()
    {
        return view('blog-listing');
    }
}
