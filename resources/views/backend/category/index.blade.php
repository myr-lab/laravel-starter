@extends('backend.layouts.app')
@section('datatable-css')
<link rel="stylesheet" href="{{ asset('admin/css/datatable.min.css') }}">
@endsection
@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Category List</h3>
      <a href="{{ route('category.create') }}" class="fa fa-edit" style="float: right"></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        </thead>

        <tbody>
         @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->index + 1 }}</td>
          <td>{{ $category->name }}</td>
          <td>{{ $category->isActive == 1 ? 'Active' : 'Inactive' }}</td>
          <td>
            
            <a href="{{ route('category.edit',$category->id) }}" class="fa fa-edit"></a> | <a href="" class="fa fa-trash"></a>

          </td>
         
        </tr>
        @endforeach

        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
@section('datatable-js')
<script src="{{asset('admin/js/datatable.min.js')}}"></script>
<script src="{{asset('admin/js/datatable.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection