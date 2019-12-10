@extends('backend.layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Add New Article</h3>
    </div>
    <div class="card-body">
       
@include('backend.error.error')
@include('backend.error.success')

 <form action="{{ route('post.store') }}" method="post">

  @csrf
  
  <div class="card-body">
    <div class="form-group">
      <label>Post Title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter category name">
    </div>

     <div class="form-group">
      <label>Post Title</label>
      <textarea id="editor1" name="body"></textarea>
    </div>
    
    <select name="category_id" id="input" class="form-control" required="required">
     
     @foreach ($categories as $category)
       <option value="{{ $category->id }}">{{ $category->name }}</option>
     @endforeach
    
    </select>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="isActive" value="1">
      <label class="form-check-label">Publish ? </label>
    </div>
  </div>

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

    </div>
  </div>
@endsection

@section('ckeditor')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
@endsection
