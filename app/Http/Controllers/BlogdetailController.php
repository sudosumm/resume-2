<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogdetailController extends Controller
{
    public function index()
    {
        return view('blog-detail');
    }

}
