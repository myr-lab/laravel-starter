@extends('frontend.layouts.master')

@section('main_content')

<form action="{{ route('company.submit',$company->id) }}" method="POST" role="form">
	@csrf
	@method('PATCH')
	<legend>Update Company</legend>

	<div class="form-group">
		<label for="">Company</label>
		<input type="text" name="name" class="form-control" value="{{ $company->name }}">
	</div>

	<div class="form-group">
		<label for="">Company Address</label>
		<input type="text" name="address" class="form-control" value="{{ $company->address }}"">
	</div>
	
	<button type="submit" class="btn btn-primary">Update</button>
	<a href="{{ URL::to('companies') }}" class="btn btn-danger">Back</a>
</form>














@endsection