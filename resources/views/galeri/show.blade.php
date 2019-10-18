@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Galeri</div>

                <div class="card-body">
                  
                  <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Galeri ->nama!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Keterangan</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Galeri ->keterangan!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Path</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Galeri ->path!!}</label>
                      </div>

                       <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Kategori galeri id</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Galeri ->kategori_galeri_id!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">User id</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Galeri ->users_id!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Create</label> 
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Galeri ->created_at!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Update</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Galeri ->updated_at!!}</label>
                      </div>

                      <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                      <a href="{!! route('berita.index') !!}" class="btn btn-primary">Back</a>
  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

