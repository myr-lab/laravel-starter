@extends('frontend.layouts.master')

@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @include('backend.error.error')
            @include('backend.error.success')

           <form action="{{ route('signup') }}" method="POST" role="form">
                @csrf
               <legend>Register</legend>
           
               <div class="form-group">
                   <label for="">Username</label>
                   <input type="text" class="form-control" name="name" placeholder="Enter username">
               </div>

               <div class="form-group">
                   <label for="">Email</label>
                   <input type="text" class="form-control"  name="email" placeholder="Enter email">
               </div>
           
               <div class="form-group">
                   <label for="">Password</label>
                   <input type="text" class="form-control"  name="password" placeholder="Enter pasword">
               </div>

                <div class="form-group">
                   <label for="">Confirm Password</label>
                   <input type="text" class="form-control"  name="password_confirmation" placeholder="Enter confirm pasword">
               </div>
           
               <button type="submit" class="btn btn-primary">Register</button>
           </form>
        </div>
    </div>
</div>
@endsection
