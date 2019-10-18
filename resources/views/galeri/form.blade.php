@csrf
 

 <div class="form-group row">
     <label for="nama" class="col-md-2 col-form-label text-md-right">{{ __('Nama') }}</label>

    <div class="col-md-6">
        {!! Form::text('nama', null,['calss'=>'form-control','required','autofocus']);!!}
    
     @error('nama')
     
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
     @enderror
 </div>
</div>


 <div class="form-group row">
     <label for="kategori_galeri_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategori Galeri Id') }}</label>

    <div class="col-md-6">
        {!! Form::select('kategori_galeri_id',$listKategoriGaleri,null,["class"=>"form-control","required"]) !!}
    
     @error('kategori_galeri_id')
     
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
     @enderror
 </div>
</div>

<div class="form-group row">
     <label for="keterangan" class="col-md-2 col-form-label text-md-right">{{ __('Keterangan') }}</label>

    <div class="col-md-6">
        {!! Form::text('keterangan', null,['calss'=>'form-control','required','autofocus']);!!}
    
     @error('keterangan')
     
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
     @enderror
 </div>
</div>

<div class="form-group row">
     <label for="path" class="col-md-2 col-form-label text-md-right">{{ __('Path') }}</label>

    <div class="col-md-6">
        {!! Form::text('path', null,['calss'=>'form-control','required','autofocus']);!!}
    
     @error('path')
     
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
     @enderror
 </div>
</div>

 <div class="form-group row">
     <label for="isi" class="col-md-2 col-form-label text-md-right">{{ __('Isi') }}</label>

    <div class="col-md-10">
        {!!  Form::textarea('isi', null,['class'=>'form-control']);  !!}

     @error('isi')
     
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
         </span>
     @enderror
 </div>
</div>

        {!! Form::hidden('users_id', Auth::id());!!}
    
     <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                                <a href="{!! route('galeri.index') !!}" class="btn btn-danger">
                                    {{ __('Batal') }}
                                </a>
                               
                            </div>
                        </div>
