@extends('layouts.admin')
@section('content')

<div class="row">
<div class="container">
<div class="col-md-12">
<div class="panel panel-info">
<div class="panel-heading">
Boking
<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
</div>
</div>
<div class="panel-body">
<form action="{{ route('bk.store') }}" method="post">
{{ csrf_field() }}

<div class="form-group {{ $errors->has('tanggal_boking')? 'has-error':''}}">
<label class="control-label">tanggal_boking</label>
<input type="date" name="tanggal_boking" class="form-control" required>
@if ($errors->has('tanggal_boking'))
<span class="help-block">
<strong>{{ $errors->first('tanggal_boking') }}</strong>
</span>
@endif
</div>

<div class="form-group {{ $errors->has('id_mobil')? 'has-error':''}}">
<label class="control-label">id_mobil</label>
<input type="text" name="id_mobil" class="form-control" required>
@if ($errors->has('id_mobil'))
<span class="help-block">
<strong>{{ $errors->first('id_mobil') }}</strong>
</span>
@endif
</div>

<div class="form-group {{ $errors->has('id_customer')? 'has-error':''}}">
<label class="control-label">id_customer</label>
<input type="text" name="id_customer" class="form-control" required>
@if ($errors->has('id_customer'))
<span class="help-block">
<strong>{{ $errors->first('id_customer') }}</strong>
</span>
@endif
</div>

<div class="form-group">
<button type="submit" class="btn btn-info">Add</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection