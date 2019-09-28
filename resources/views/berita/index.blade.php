@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Berita</div>

                <div class="card-body">
                   <table border="1">
		<tr>
			<td><center> ID </center></td>
			<td><center> Judul </center></td>
			<td><center> Isi </center></td>
			<td><center> user_id </center></td>
			<td><center>Create</center></td>
			<td><center>Update</center></td>
			<td><center>kategori Berita_id</center></td>
			
		</tr>

		@foreach($listBerita as $item)

		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->isi !!}</td>
			<td>{!! $item->users_id !!}</td> 
			<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
			<td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
			<td>{!! $item->kategori_berita_id !!}</td>
			
		</tr>

		@endforeach
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

