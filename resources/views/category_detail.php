@extends('app')

@section('content')
<div class="py-4">
  <h2>{{ $category->name }}</h2>
  <p class="text-muted">Daftar artikel pada kategori {{ $category->name }}.</p>

  @forelse($articles as $article)
    <div class="card mb-3 shadow-sm">
      <div class="card-body">
        <h5>{{ $article->title }}</h5>
        <p>{{ $article->content }}</p>
       <p class="text-muted small">By {{ $article->writer->name ?? 'Unknown' }} | {{ date('d M Y', strtotime($article->date)) }}</p>

    </div>
  @empty
    <p>Tidak ada artikel pada kategori ini.</p>
  @endforelse
</div>
@endsection
