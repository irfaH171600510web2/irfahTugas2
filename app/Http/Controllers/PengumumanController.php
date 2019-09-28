<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listPengumuman=Pengumuman::all(); //select*from artikel

    //blade
    return view('pengumuman.index', compact('listPengumuman'));
    //return view(view: 'galeri.index')->with('data',$listgaleri);
	}
}