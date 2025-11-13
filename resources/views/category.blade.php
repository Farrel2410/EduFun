@extends('app')

@section('title', 'Categories')

@section('content')
<div class="container mt-4">
  <h1 class="mb-4 text-center">Categories</h1>

  <!-- Gunakan row flex agar sejajar -->
  <div class="row d-flex justify-content-center align-items-stretch">

    <!-- Category: Data Science -->
    <div class="col-md-5 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body d-flex flex-column text-center">
          <h4 class="card-title">Data Science</h4>
          <p class="flex-grow-1">Pelajari Machine Learning, Deep Learning, dan Natural Language Processing.</p>
          <a href="{{ route('articles.dataScience') }}" class="btn btn-primary mt-auto">View Articles</a>
        </div>
      </div>
    </div>

    <!-- Category: Network Security -->
    <div class="col-md-5 mb-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body d-flex flex-column text-center">
          <h4 class="card-title">Network Security</h4>
          <p class="flex-grow-1">Pelajari Software Security, Network Administration, dan Popular Network Technology.</p>
          <a href="{{ route('articles.networkSecurity') }}" class="btn btn-primary mt-auto">View Articles</a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
