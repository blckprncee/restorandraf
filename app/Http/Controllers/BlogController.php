<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        return view("blogs");
    }

    public function about(string $nama2)
    {
        return view('aboutblogs',['judul'=>$nama2]);
    }

    public function contact()
    {
        return view("contactblogs");
    }
}
