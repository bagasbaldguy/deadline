<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;
use App\User;

class FrontendController extends Controller
{
    public function index()
    {
        $slidebar = Artikel::orderBy('created_at', 'desc')->get();
        $paginate = Artikel::orderBy('created_at', 'desc')->paginate(4);
        return view ('frontend.index',compact('slidebar','paginate'));
    }

    public function katalog(Artikel $artikel)
    {
        return view ('frontend.catalog');
    }

    public function singlekatalog(Artikel $artikel){
        $artikel = Artikel::with('kategori', 'tag', 'user')->where('slug', '=',$artikel->slug)->first();
        return view('frontend.details',compact('artikel'));
    }

    public function tentang()
    {
        return view ('frontend.about');
    }
}