<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $table='kategori_artikel';

   protected $fillable=['id','nama','users_id','created_at'];

    
}

