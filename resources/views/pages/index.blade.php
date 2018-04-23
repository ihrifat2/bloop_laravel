@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
		<h1>Welcome To {{ config('app.name', 'Blopp') }}</h1>
		<p>
			@if(Auth::guest())
				<a href="/login" class="btn btn-primary btn-lg">Login</a>
				<a href="/register" class="btn btn-success btn-lg">Register</a>
			@endif
		</p>
	</div>
@endsection