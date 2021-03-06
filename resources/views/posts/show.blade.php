@extends('layout.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h1>{{ $post->title }}</h1>

          <p class="text-muted">
              {{ $post->body }}
          </p>

          @if (count($post->tags))
            <ul>
              @foreach ($post->tags as $tag)
                <li>
                  <a href="{{ url('/posts/tag/'.$tag->name)}}">{{ $tag->name }}</a>
                </li>
              @endforeach
            </ul>
          @endif
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
        <div class="col-lg-3">
          <div class="row">
            @include('layout.sidebar')
          </div>
        </div>
      </div>
    </div>

@endsection
