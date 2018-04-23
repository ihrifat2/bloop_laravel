@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	<section id="blog-section" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="row well">
						@if(count($posts) > 0)
							@foreach($posts as $post)
			
								<div class="col-sm-6 col-md-4 col-lg-3 mt-5">
                                                                        <div class="card card-inverse card-info">
                                                                                <a href="/posts/{{$post->id}}" class="">
                                                                                        <div class="PhotoCard">
                                                                                                <img class="card-img-top" src="/img/{{$post->cover_image}}" alt="{{$post->title}}">
                                                                                                <div class="overlay">
                                                                                                        <div class="text">{{$post->title}}</div>
                                                                                                </div>
                                                                                        </div>
                                                                                        <div class="card-block">
                                                                                                <h4 class="card-title text-truncate">{{$post->title}}</h4>
                                                                                        </div>
                                                                                        <div class="card-footer">
                                                                                                <small>by <strong>{{$post->user->name}}</strong></small>
                                                                                        </div>
                                                                                </a>
                                                                        </div>
                                                                </div>

							@endforeach
						@else
							<p>No Posts Found</p>
						@endif
	
					</div>
				</div>
				{{$posts->links()}}
			</div>
		</div>
	</section>
@endsection
