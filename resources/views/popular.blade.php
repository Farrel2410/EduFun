@extends('app')

@section('content')
<div class="py-4">
  <h2>Popular Articles</h2>
  <div class="row mt-3">
    @foreach($articles as $article)
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5>{{ $article->title }}</h5>
            <p>{{ Str::limit($article->content,100) }}</p>
            <p class="text-muted small">Views: {{ $article->views }} | {{ date('d M Y', strtotime($article->date)) }}</p>
            <a href="{{ route('category.detail', $article->category_id) }}" class="btn btn-outline-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
