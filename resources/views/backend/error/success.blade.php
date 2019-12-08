@if(session()->has('message'))
 <li class="alert alert-success">{{ session()->get('message') }}</li>
@endif