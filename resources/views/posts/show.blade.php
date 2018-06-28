@extends('layout.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>

        <p class="text-muted">
            {{ $post->body }}
        </p>
        <hr>
        <strong>Comments!</strong>
        <hr>
        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}
                        </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection