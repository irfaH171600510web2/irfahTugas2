@extends('Layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pengumuman</div>

                    <div class="card-body">
                        {!! Form::model($Pengumuman, ['route' => ['pengumuman.update', $Pengumuman->id],'method'=>'patch']) !!}
                            @include('Pengumuman.form')
                       {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
