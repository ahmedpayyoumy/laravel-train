<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">


    <title>Hello, world!</title>
  </head>
  <body>
    <ul class="nav justify-content-center" style="margin-bottom:50px;">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">See Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">See Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index') }}">See Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('orders.index') }}">See order</a>
      </li>
    </ul>
    <div class="container">
      <div class="row">
        @yield('content')
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>