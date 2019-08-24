<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Tag;
use App\Artikel;
use App\User;
class FrontendAPIController extends Controller
{
    public function ulasanberita()
    {   
        $ulasan = Artikel::with('kategori')->orderBy('created_at','desc')->take(4)->get();
        $katalog = Artikel::with('kategori')->orderBy('created_at','desc')->get();      
        $response = [
            'success' => true,
            'data' => [
                'ulasan'=> $ulasan,
                'katalog'=>$katalog    
            ],
            'message' => "Berhasil"
        ];
        return response()->json($response, 200);
    }

    // public function detailulasan(Artikel $artikel){
    //     $detail = Artikel::with('user','kategori')->where('slug','=',$artikel->slug)->first();
    //     $response = [
    //         'success' => true,
    //         'data' => $detail,
    //         'message' => 'Berhasil'
    //     ];
    //     return response()->json($response, 200);
    // }
    
    // public function beritakategori(Kategori $kategori){
    //     $berita = $kategori->Artikel()->with('user','kategori')->latest()->get();
    //     $response = [
    //         'success' => true,
    //         'data' => $berita,
    //         'message' => 'Berhasil'
    //     ];
    //     return response()->json($response, 200);
    // }
}

