@extends('backend.layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Category List</h3>
    </div>
    <div class="card-body">
       
@include('backend.error.error')
@include('backend.error.success')

 <form action="{{ route('category.store') }}" method="post">
  @csrf
  
  <div class="card-body">
    <div class="form-group">
      <label>Category Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter category name">
    </div>
  

    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="isActive" value="1">
      <label class="form-check-label">Publish ? </label>
    </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

    </div>
  </div>
@endsection
