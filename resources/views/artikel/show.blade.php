@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Artikel</div>

                <div class="card-body">
                  
                  <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Judul</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Artikel ->judul!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">isi</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Artikel ->isi!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">User id</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Artikel ->users_id!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Creat</label> 
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Artikel ->created_at!!}</label>
                      </div>

                      <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Update</label>
                        <label for="name" class="col-md-4 col-form-label text-md-left">{!! $Artikel ->updated_at!!}</label>
                      </div>

                      <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                      <a href="{!! route('artikel.index')!!}" class="btn btn-primary">Back</a>
  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

