@extends('app')

@section('content')
<div class="py-4">
  <h2>Articles by {{ $writer->name }}</h2>

  @forelse($articles as $article)
    <div class="card mb-3 shadow-sm">
      <div class="card-body">
        <h5>{{ $article->title }}</h5>
        <p>{{ Str::limit($article->content,150) }}</p>
       <p class="text-muted small">Published {{ date('d M Y', strtotime($article->date)) }} | Views: {{ $article->views }}</p>
      </div>
    </div>
  @empty
    <p>Tidak ada artikel oleh penulis ini.</p>
  @endforelse
</div>
@endsection
