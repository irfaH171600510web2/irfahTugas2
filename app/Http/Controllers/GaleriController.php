<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\KategoriGaleri;

class GaleriController extends Controller
{
  public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listGaleri=Galeri::all(); //select*from galeri

    //blade
    return view('galeri.index', compact('Galeri'));
    //return view(view: 'galeri.index')->with('data',$listGaleri);
  }
  public function show($id) {
  //Eloquent
  
  $Galeri=Galeri::find($id);

  return view ( 'galeri.show',compact( 'Galeri'));
}

  public function create(){

    $listKategoriGaleri= KategoriGaleri::pluck('nama','id');
    


    return view ('galeri.create', compact('listKategoriGaleri'));

  }
  public function store(Request $request){
    $input=$request->all();


    Galeri::create($input);

    return redirect(route ('galeri.index'));

  }

  public function edit($id){
  $Galeri=Galeri::find($id);
  $listKategoriGaleri=KategoriGaleri::pluck('nama','id');

  

  if(empty($Galeri)){
  return redirect(route('galeri.index'));
  }

    return view('galeri.edit', compact('Galeri','listKategoriGaleri'));
  }

  public function update($id, Request $request){
    $Galeri=Galeri::find($id);
    $input= $request->all();

  if(empty($Galeri)){
  return redirect(route('galeri.index'));
  }

  $Galeri->update($input);

  return redirect(route ('galeri.index'));

  }

  public function destroy($id){
  $Galeri=Galeri::find($id);

  
  if(empty($Galeri)){
  return redirect(route('galeri.index'));
  } 
  $Galeri->delete();
  return redirect(route('galeri.index'));
}

}