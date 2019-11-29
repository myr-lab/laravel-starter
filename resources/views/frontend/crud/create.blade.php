@extends('frontend.layouts.master')

@section('main_content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div>
	@if(session()->has('message'))
     <li class="alert alert-success">{{ session()->get('message') }}</li>
    @endif
</div>
<form action="{{ route('company.store') }}" method="POST" role="form">
	
	 @csrf

	<legend>Add Company</legend>

	<div class="form-group">
		<label for="">Company</label>
		<input type="text" name="name" class="form-control" placeholder="Enter company name">
	</div>

	<div class="form-group">
		<label for="">Company Address</label>
		<input type="text" name="address" class="form-control" placeholder="Enter company address">
	</div>
	
	<button type="submit" class="btn btn-primary">Submit</button>
	<a href="{{URL::to('companies')}}" class="btn btn-success">Back</a>
</form>














@endsection