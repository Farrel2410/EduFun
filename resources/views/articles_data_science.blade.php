@extends('app')

@section('title', 'Data Science Articles')

@section('content')
<div class="container mt-4">
  <h1 class="text-center mb-4">Data Science Articles</h1>

  <div class="row">
    @foreach($articles as $article)
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img src="{{ asset($article['image']) }}" class="card-img-top" alt="{{ $article['title'] }}">
          <div class="card-body">
            <h5 class="card-title">{{ $article['title'] }}</h5>
            <p class="card-text">{{ Str::limit($article['content'], 120) }}</p>
            <p class="text-muted small">By {{ $article['author'] }} • {{ $article['date'] }}</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
