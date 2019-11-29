@extends('frontend.layouts.master')

@section('main_content')

	<legend>Add Company</legend>
    @if(session()->has('message'))
     <li class="alert alert-success">{{ session()->get('message') }}</li>
    @endif
	<table class="table table-hover">
		<thead>
			<tr>

				<th>No</th>
				<th>Company Name</th>
				<th>Address</th>
				<th>Slug</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($company as $element)
				<tr>
					<td>{{ $loop->index + 1 }}</td>
					<td>{{ $element->name }}</td>
					<td>{{ $element->address }}</td>
					<td>{{ $element->slug }}</td>
					<td>
						<a href="{{ route('company.show',$element->id) }}" class="btn btn-success">Edit</a> | 

						<form action="{{ route('company.delete',$element->id) }}" method="post">
							@csrf
						   <button class="btn btn-danger">Delete</button>
						</form>
					</td>

				</tr>
			@endforeach
			{!! $company->links() !!}
		</tbody>
         <a href="{{ route('company.add') }}" class="btn btn-info">Add Company</a>
	</table>

@endsection