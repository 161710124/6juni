@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Keterangan Boking
			  	<div class="panel-title pull-right"><a href="{{ route('bk.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Tanggal Boking</th>
					  <th>id_mobil</th>
					  <th>id_customer</th>
					  <th colspan="3">Option</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($book as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->tanggal_boking }}</td>
				    	<td>{{ $data->id_mobil }}</td>
				    	<td>{{ $data->id_customer }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('bk.edit',$data->id) }}">Ubah</a>
						</td>
						<td>
							<form method="post" action="{{ route('bk.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection