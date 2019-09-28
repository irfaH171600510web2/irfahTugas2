<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listKategoriArtikel=KategoriArtikel::all(); //select*from kategori_artikel

    //blade
    return view('kategori_artikel.index', compact('listKategoriArtikel'));
    //return view(view: 'kategori_artikel.index')->with('data',$listKategoriArtikel);
	}
}
 
