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
        <!-- Add Comment -->
        <hr>
        <div class="card">
            <div class="card-body">
                <form action="{{ url("posts/$post->id/comments") }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" id="body" placeholder="Your comment here." class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Comment</button>
                    </div>
                    @include('layout.errors')
                </form>
            </div>
        </div>
    </div>

@endsection