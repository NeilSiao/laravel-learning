@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>You are logged in!</p>
                    
                    
                    <a href="/posts/create" class="btn btn-primary float-right mb-2">
                        Create Post
                    </a>
                    <h3>Your Blogs posts</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @if(count($posts)>0)
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a></td>
                            <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                       <tr> {{ $posts->links() }}</tr>
                        @else
                        <tr>
                            <th>Currently don't have article</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @endif
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
