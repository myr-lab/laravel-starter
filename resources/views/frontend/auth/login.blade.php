@extends('frontend.layouts.master')

@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @include('backend.error.error')
            @include('backend.error.success')

           <form action="{{ route('signin') }}" method="POST" role="form">
                @csrf
               <legend>User Login</legend>

               <div class="form-group">
                   <label for="">Email</label>
                   <input type="text" class="form-control"  name="email" placeholder="Enter email">
               </div>
           
               <div class="form-group">
                   <label for="">Password</label>
                   <input type="text" class="form-control"  name="password" placeholder="Enter pasword">
               </div>

               <button type="submit" class="btn btn-primary">Login</button>
           </form>
        </div>
    </div>
</div>
@endsection
