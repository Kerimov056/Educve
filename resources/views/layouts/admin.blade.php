{{-- resources/views/layouts/admin.blade.php --}}
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Panel</title>
  <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin</a>
    <div class="d-flex align-items-center gap-3">
      <span class="text-white">{{ auth()->user()->name }}</span>
      <a href="{{ route('home') }}" class="btn btn-sm btn-secondary">Site</a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-sm btn-danger">Logout</button>
      </form>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <aside class="col-2 bg-light min-vh-100 py-3">
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
          {{-- <li class="nav-item"><a class="nav-link" href="{{ route('admin.users.index') }}">Users</a></li> --}}
        </ul>
      </aside>
      <main class="col-10 p-4">
        @yield('content')
      </main>
    </div>
  </div>
</body>
</html>
