@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Create to Post</h1>
        <hr>
        <div class="row">
            <div class="col-lg-8">
                <form method="post" action="{{ url('/posts') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Publish</button>
                </form>
            </div>
        </div>
    </div>

@endsection