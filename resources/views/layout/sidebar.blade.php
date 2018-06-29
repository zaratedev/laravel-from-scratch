<div class="col-lg-12">
  <h4>Archives</h4>
  <ul class="list-group">
    @foreach ($archives as $stats)
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="/?month={{ $stats['month'] }}&year={{$stats['year']}}">
          {{ $stats['month'].' , '. $stats['year']}}
          <span class="badge badge-primary badge-pill">{{ $stats['published'] }}</span>
        </a>
      </li>
    @endforeach
  </ul>

  <h4>Tags</h4>
  <ul class="list-group">
    @foreach ($tags as $tag)
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="{{ url('/posts/tag/'.$tag)}}">
          {{ $tag}}
        </a>
      </li>
    @endforeach
  </ul>
</div>
