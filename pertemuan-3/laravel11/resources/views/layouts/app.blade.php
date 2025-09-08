<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'StoryNest')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  @yield('head')
</head>
<body>
  <nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">StoryNest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Komunitas</a></li>
            </ul>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container py-5">
    @yield('content')
  </main>

  <footer class="custom-footer text-center py-3">
    <p class="mb-0">&copy; {{ date('Y') }} StoryNest. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @yield('scripts')
</body>
</html>
