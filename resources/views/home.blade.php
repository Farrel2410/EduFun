@extends('app')

@section('content')
<div class="py-4">
  <h1 class="mb-3">Welcome to EduFun</h1>
  <p>Platform edukasi — artikel pilihan seputar Data Science & Network Security.</p>

  <h4 class="mt-4">Latest Articles</h4>
  <div class="row mt-3">
    @foreach($articles as $article)
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="https://via.placeholder.com/800x300?text=EduFun" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
            <a href="{{ route('category.detail', $article->category_id) }}" class="btn btn-primary btn-sm">Read More</a>
          </div>
          <div class="card-footer">
            <small>{{ date('d M Y', strtotime($article->date)) }} | by {{ $article->writer->name ?? 'Unknown' }}</small>
        </div>

        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
