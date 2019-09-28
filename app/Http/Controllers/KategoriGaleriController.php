<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{

	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listKategoriGaleri=KategoriGaleri::all(); //select*from kategori_artikel

    //blade
    return view('kategori_galeri.index', compact('listKategoriGaleri'));
    //return view(view: 'kategori_galeri.index')->with('data',$listKategoriArtikel);
	}
}
