@extends('layout.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>

        <p class="text-muted">
            {{ $post->body }}
        </p>
    </div>

@endsection