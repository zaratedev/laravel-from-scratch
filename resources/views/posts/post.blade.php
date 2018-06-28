<div class="col-md-6 col-xs-12">
    <div class="card mb-4 box-shadow">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ url('/posts/'.$post->id) }}">
                {{ $post->title }}
                </a>
            </h5>
            <p class="card-text">
                {{ $post->body }}
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">{{ $post->user->name.' on '.$post->created_at->toFormattedDateString()}}</small>
            </div>
        </div>
    </div>
</div>
