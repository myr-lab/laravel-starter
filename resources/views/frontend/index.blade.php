<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
      <ul>
      	<li>
      		@if(auth()->check())
	      		@foreach ($socialLinks as $key => $value)
	      			<a href="{{$value}}">{{ $key }}</a><br>
	      		@endforeach
      		@endif
      	</li>
      </ul>
    </body>
</html>
