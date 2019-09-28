<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listBerita=Berita::all(); //select*from artikel

    //blade
    return view('berita.index', compact('listBerita'));
    //return view(view: 'artikel.index')->with('data',$listArtikel);
	}
}