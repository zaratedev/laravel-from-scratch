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
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                    @if(count($errors))
                    <div class="form-group">
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

@endsection