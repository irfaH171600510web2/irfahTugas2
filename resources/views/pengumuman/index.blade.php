@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pengumuman</div>

                <div class="card-body">
                	<a href="{!! route('pengumuman.create') !!}" class="btn btn-primary"> Tambah Data</a>
                   	<table border="1">
		<tr bgcolor="aqua">
			<td><center> ID </center></td>
			<td><center> Judul </center></td>
			<td><center> Isi </center></td>
			<td><center> user_id </center></td>
			<td><center>Create</center></td>
			<td><center>Update</center></td>
			<td><center>kategori Pengumuman_id</center></td>
			<td><center>Aksi</center></td>
		</tr>

		@foreach($listPengumuman as $item)

		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->isi !!}</td>
			<td>{!! $item->users_id !!}</td> 
			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
			<td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
			<td>{!! $item->kategori_pengumuman_id !!}</td>
			<td>
			<a href="{!! route('pengumuman.show',[$item->id]) !!}" class="btn btn-primary">Lihat</a>

			<a href="{!! route('pengumuman.edit',[$item->id]) !!}" class="btn btn-warning">Ubah</a>

			{!! Form::open(['route' => ['pengumuman.destroy', $item->id], 'method' => 'delete']) !!}

			{!! Form::submit('Hapus',['class'=>'btn btn-sm btn-danger']); !!}

			{!! Form::close() !!}
		</td>
		</tr>

		@endforeach
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

