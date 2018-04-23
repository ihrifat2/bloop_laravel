@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-4 text-left">
			<a href="/posts" class="btn btn-default">Go Back</a>
		</div>
		<div class="col-md-4 col-sm-8 col-xs-8 col-md-offset-4 text-right">
			@if(!Auth::guest())
				@if(Auth::user()->id == $post->user_id)
					{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class' => 'pull-right'])!!}
						{{Form::hidden('_method', 'DELETE')}}
						<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
						{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
					{!! Form::close() !!}
				@endif
			@endif
		</div>
	</div>

	<div class="row text-justify mt-3">

		<div class="col-md-12 blogShort well">
			<div class="row">
				<div class="col-md-2">
					<a href="/posts/{{$post->id}}">
						<img style="width: 200px" src="/img/{{$post->cover_image}}" alt="{{$post->title}}" class="pull-left margin10 img-thumbnail">
					</a>
				</div>
				<div class="col-md-10">
					<h1>{{$post->title}}</h1>
				</div>
			</div>
			<em>
				by {{$post->user->name}}
				<small>Written on {{$post->created_at}}</small>
			</em>
			<article>
				<p>
					{!!$post->body!!}
				</p>
			</article>
		</div>

	</div>
@endsection
