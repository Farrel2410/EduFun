@extends('app')

@section('content')
<div class="py-4">
  <h2>Writers</h2>
  <div class="row mt-3">
    @foreach($writers as $writer)
      <div class="col-md-4 mb-3">
        <div class="card text-center shadow-sm">
          <div class="card-body">
            <h5>{{ $writer->name }}</h5>
            <p>{{ $writer->email }}</p>
            <a href="{{ route('writer.detail', $writer->id) }}" class="btn btn-outline-primary btn-sm">View Articles</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
