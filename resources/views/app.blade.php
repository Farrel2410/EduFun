<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EduFun</title>
  <link href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}" rel="stylesheet">

  <style>
    body { padding-top: 70px; }
    .card-footer small { color: #666; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">EduFun</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('category*') ? 'active' : '' }}" href="{{ route('category') }}">Category</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('writers*') ? 'active' : '' }}" href="{{ route('writers') }}">Writers</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('popular*') ? 'active' : '' }}" href="{{ route('popular') }}">Popular</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  @yield('content')
</main>

<footer class="text-center py-4 mt-5">
  <div class="container">
    <small class="text-muted">© 2025 EduFun</small>
  </div>
</footer>

<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
