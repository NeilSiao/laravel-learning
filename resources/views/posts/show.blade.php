@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-primary m-2">Go Back</a>
        <h1>{{$post->title}}</h1>
        <div>
            {!!$post->body!!}
        </div>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="noImage">
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <br>

    @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning mt-2">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
   
@endsection