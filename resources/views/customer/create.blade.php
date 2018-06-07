@extends('layouts.admin')
@section('content')

<div class="row">
<div class="container">
<div class="col-md-12">
<div class="panel panel-info">
<div class="panel-heading">
Customers
<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
</div>
</div>
<div class="panel-body">
<form action="{{ route('cstm.store') }}" method="post">
{{ csrf_field() }}

<div class="form-group {{ $errors->has('nama')? 'has-error':''}}">
<label class="control-label">Nama</label>
<input type="text" name="nama" class="form-control" required>
@if ($errors->has('nama'))
<span class="help-block">
<strong>{{ $errors->first('nama') }}</strong>
</span>
@endif
</div>

<div class="form-group {{ $errors->has('alamat')? 'has-error':''}}">
<label class="control-label">alamat</label>
<textarea type="text" name="alamat" class="form-control" required></textarea>
@if ($errors->has('alamat'))
<span class="help-block">
<strong>{{ $errors->first('alamat') }}</strong>
</span>
@endif
</div>

<div class="form-group {{ $errors->has('no_hp')? 'has-error':''}}">
<label class="control-label">no_hp</label>
<input type="text" name="no_hp" class="form-control" required>
@if ($errors->has('no_hp'))
<span class="help-block">
<strong>{{ $errors->first('no_hp') }}</strong>
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