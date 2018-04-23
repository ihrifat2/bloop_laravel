@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <hr>
                    <h3>Your Blog Post</h3>
                    @if(count($posts) > 0)
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>
                                        <strong><a href="/posts/{{$post->id}}">{{$post->title}}</a></strong>
                                    </td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no post</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
